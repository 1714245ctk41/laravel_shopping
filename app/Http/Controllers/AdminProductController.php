<?php

namespace App\Http\Controllers;

use App\Components\Recusive;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTag;
use App\Models\Tag;
use App\Traits\StorageImageTrait as TraitsStorageImageTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductAddRequest;


class AdminProductController extends Controller
{

    use TraitsStorageImageTrait;
    private $product;
    private $productImage;
    private $tag;
    private $productTag;
    private $recusive;
    public function __construct(Product $product, ProductImage $productImage, Tag $tag, ProductTag $productTag)
    {
        $this->product = $product;
        $this->productImage = $productImage;
        $this->tag = $tag;
        $this->productTag = $productTag;
    }

    public function index(Request $request)
    {
        $products = $this->product->latest()->paginate(5);



        return view('admin.product.index', compact('products'));
    }

    public function getCategory($parentId)
    {
        $data = Category::all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }

    // ! Begin delete
    public function delete(Product $product)
    {
        try {
            $product->delete();
            // $product->tags()->deattach();

            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        } catch (Exception $exception) {
            Log::error('Message:' . $exception->getMessage() . 'Line: ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }

    //! Begin edit
    public function edit(Product $product)
    {

        $htmlOption = $this->getCategory($product->category_id);
        return view('admin.product.edit', compact('htmlOption', 'product'));
    }

    public function update(Request $request, Product $product)
    {
        try {
            DB::beginTransaction();
            $dataProductUpdate = [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->content,
                'user_id' => auth()->id(),
                'category_id' => $request->category_id,
            ];

            $dataUploadFeatureImage = $this->storageTraitUpload($request, 'feature_image_path', 'product');


            if (!empty($dataUploadFeatureImage)) {
                Storage::delete('public/' . $product . '/' . auth()->id(), $product->feature_image_name);
                $dataProductUpdate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductUpdate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }

            // $data = $this->storageTraitUpload($request, 'feature_image_path', 'product');
            $product->update($dataProductUpdate);
            $productUpdate = $this->product->find($product->id);
            // * Insert data to product_images
            if ($request->hasFile('image_path')) {

                $this->productImage->where('product_id', $product->id)->delete();
                foreach ($request->image_path as $fileItem) {
                    $dataProductImageDetail = $this->storageTraitUploadMultiple($fileItem, 'product');


                    $productUpdate->images()->create([
                        'image_path' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name'],
                    ]);
                }
            }

            //* Insert tags for product
            if (!empty($request->tags)) {
                foreach ($request->tags as $tagItem) {
                    //* Insert to tags
                    $tagInstance = $this->tag->firstOrCreate(['name' => $tagItem]);
                    $tagIds[] = $tagInstance->id;
                }
                $product->tags()->sync($tagIds);
            }


            DB::commit();

            return redirect()->route('product.edit', ['product' => $product->id]);
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error('Message:' . $exception->getMessage() . 'Line: ' . $exception->getLine());
        }
    }


    //! Begin create
    public function create()
    {
        $htmlOption = $this->getCategory(0);
        // dd($htmlOption);
        return view('admin.product.add', compact('htmlOption'));
    }
    public function store(ProductAddRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataProductCreate = [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->content,
                'user_id' => auth()->id(),
                'category_id' => $request->category_id,
            ];
            $dataUploadFeatureImage = $this->storageTraitUpload($request, 'feature_image_path', 'product');

            if (!empty($dataUploadFeatureImage)) {
                $dataProductCreate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }

            $data = $this->storageTraitUpload($request, 'feature_image_path', 'product');
            $product =  $this->product->create($dataProductCreate);

            // * Insert data to product_images
            if ($request->hasFile('image_path')) {
                foreach ($request->image_path as $fileItem) {
                    $dataProductImageDetail = $this->storageTraitUploadMultiple($fileItem, 'product');


                    $product->images()->create([
                        'image_path' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name'],
                    ]);
                }
            }

            //* Insert tags for product
            if (!empty($request->tags)) {
                foreach ($request->tags as $tagItem) {
                    //* Insert to tags
                    $tagInstance = $this->tag->firstOrCreate(['name' => $tagItem]);
                    $tagIds[] = $tagInstance->id;
                }
                $product->tags()->attach($tagIds);
            }


            DB::commit();

            return redirect()->route('product.create');
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error('Message:' . $exception->getMessage() . 'Line: ' . $exception->getLine());
        }
    }
}