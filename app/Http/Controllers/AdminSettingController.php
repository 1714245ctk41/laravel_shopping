<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddSettingRequest;
use App\Models\Setting;
use App\Traits\DeleteModelTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminSettingController extends Controller
{
    use DeleteModelTrait;
    private $setting;
    public $requestType;
    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function index()
    {
        $settings = $this->setting->latest()->paginate(5);
        return view('admin.setting.index', compact('settings'));
    }

    //* begin delete
    public function delete(Setting $setting)
    {
        // $this->deleteModelTrait($setting);
        try {
            $setting->delete();

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

    //* begin create
    public function create(Request $request)
    {
        // $this->requestType = $request->type; type="Text or Textarea
        return view('admin.setting.add');
    }

    public function store(AddSettingRequest $request)
    {
        $this->setting->create([
            'config_key' => $request->config_key,
            'config_value' => $request->config_value,
            'type' => $request->type
        ]);
        return redirect()->route('settings.index');
    }

    //* cập nhật setting
    public function edit(Setting $setting, Request $request)
    {
        return view('admin.setting.edit', compact('setting'));
    }
    public function update(Setting $setting, Request $request)
    {
        $setting->update([
            'config_key' => $request->config_key,
            'config_value' => $request->config_value,
        ]);
        return redirect()->route('settings.edit', ['setting' => $setting->id]);
    }
}