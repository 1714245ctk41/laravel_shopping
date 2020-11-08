@extends('layouts.admin')

@section('css')
{{-- <link href="{{asset('./assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css"> --}}
    <!-- Summernote css -->
    {{-- <link href="{{asset('assets/libs/summernote/summernote-bs4.min.css')}}" rel="stylesheet" type="text/css"> --}}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
@endsection

@section('content')

@include('partials.content-header', ['name' => 'PRODUCT', 'key' => 'EDIT'])
{{-- @php
    dd($product->name)
@endphp --}}
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Hướng dẫn</h4>
                <p class="card-title-desc">Điền đầy đủ thông tin bên dưới</p>

            <form method="POST" action="{{route('product.update', ['product' => $product->id])}}" data-select2-id="7" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="name" ">Tên sản phẩm</label>
                                <input value="{{$product->name}}" id="name" name="name" type="text" class="form-control">
                            </div>
                           
                            
                            <div class="form-group">
                                <label for="price">Giá sản phẩm</label>
                                <input value="{{$product->price}}" id="price" name="price" type="text" class="form-control">
                            </div>
                            <div class="form-group">

                             <label for="price">Ảnh đại diện</label>

                            <div class="custom-file">
                                
                                <input name="feature_image_path" type="file" class="form-control-fil" >
                                <label   for="customFile">Choose file</label>
                              </div>
                            </div>

                            <div class="form-group">

                                <label for="price">Ảnh chi tiết</label>
   
                               <div class="custom-file">
                                   
                                   <input name="image_path[]" multiple type="file" class="form-control-fil" >
                                   <label name="image_path"  for="customFile">Choose file</label>
                                 </div>
                               </div>

                        </div>
                        

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Danh mục sản phẩm</label>
                                <select class="form-control select2" name="category_id">
                                    <option value="0">Chọn danh mục</option>
                                    @php
                                        echo $htmlOption
                                    @endphp
                                </select>
                            </div>
                            <div class="form-group" data-select2-id="7">
                                <label class="control-label">Tag sản phẩm</label>

                                <select name="tags[]" class="select2 form-control select2-multiple select2-hidden-accessible" multiple data-placeholder="Choose ..." data-select2-id="4" tabindex="-1" aria-hidden="true">
                                   
                                    @foreach ($product->tags as $tag)
                                  
                                    <option value="{{$tag->name}}" data-select2-id="14" selected>{{$tag->name}}</option>
                                    
                                @endforeach
                                </select>
                                {{-- <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="5" style="width: 392.5px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Alaska" data-select2-id="17"><span class="select2-selection__choice__remove" role="presentation">×</span>Alaska</li><li class="select2-selection__choice" title="California" data-select2-id="18"><span class="select2-selection__choice__remove" role="presentation">×</span>California</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}

                            </div>
                            <div class="form-group">
                                <label for="name" ">Ảnh đại diện hiện tại</label><br>
                                     <img src="{{$product->feature_image_path}}" width="100px" alt="">
                                </div>

                                
                        
                            
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="name" ">Ảnh chi tiết hiện tại</label><br>
                                @foreach ($product->productImages as $product_image_item)
                                <img src="{{$product_image_item->image_path}}" width="100px" alt="">
                                @endforeach
                                     
                                </div>

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Mô tả</h4>
                                    {{-- <p class="card-title-desc">Super simple wysiwyg editor on bootstrap</p> --}}
                                <textarea name="content" class="form-control my-editor" value="{{$product->content}}">{{$product->content}}</textarea>

                                    {{-- <textarea name="content" class="summernote my-editor">Hello Summernote</textarea> --}}
                                </div>
                            </div>
                        </div> <!-- end col -->

                    </div>

                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                </form>

            </div>
        </div>

        {{-- <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-3">Ảnh phụ</h4>

                <form id="dzupload" method="POST" class="dropzone dz-clickable" enctype="multipart/form-data">

                    <div class="dz-message needsclick">
                        <div class="mb-3">
                            <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                        </div>
                        
                        <h4>Drop files here or click to upload.</h4>
                       
                    </div>
                </form>
            </div>

        </div> <!-- end card-->

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Meta Data</h4>
                <p class="card-title-desc">Fill all information below</p>

                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="metatitle">Meta title</label>
                                <input id="metatitle" name="productname" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="metakeywords">Meta Keywords</label>
                                <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="metadescription">Meta Description</label>
                                <textarea class="form-control" id="metadescription" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    

                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                    <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>

                </form>

            </div>
        </div> --}}
    </div>
</div>
@endsection

@section('js')
{{-- <script src="{{asset('./assets/libs/select2/js/select2.min.js')}}"></script> --}}

<script src="{{asset('/admins/product/add/add.js')}}"></script>

<!--tinymce js-->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
{{-- <script src="{{asset('assets/libs/tinymce/tinymce.min.js')}}"></script> --}}
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
<!-- Summernote js -->
{{-- <script src="{{asset('assets/libs/summernote/summernote-bs4.min.js')}}"></script> --}}
<!-- init js -->
{{-- <script src="{{asset('assets/js/pages/form-editor.init.js')}}"></script> --}}

@endsection