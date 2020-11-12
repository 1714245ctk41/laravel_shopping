@extends('layouts.admin')

@section('content')


 <!-- start page title -->
 
                      @include('partials.content-header', ['name' => 'setting', 'key' => 'Add'])
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
{{--         
                                        <h4 class="card-title">Basic Information</h4>
                                        <p class="card-title-desc">Fill all information below</p> --}}
        
<form method="POST" action="{{route('settings.update', ['setting' => $setting->id])}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="productname">Config key</label>
                                                    <input value="{{$setting->config_key}}" id="config_key" name="config_key" type="text" 
                                                        class="form-control @error('title') is-invalid @enderror">
                            @include('partials.error-validation', ['error_validation' => 'config_key'])

                                                    </div>
                                                
                                                </div>
                                               
                                                    @if ($setting->type === 'Text')
                                                        
                                                        
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="productname">Config value</label>
                                                        <input value="{{$setting->config_value}}" id="config_value" name="config_value" type="text" 
                                                        class="form-control @error('title') is-invalid @enderror">
                            @include('partials.error-validation', ['error_validation' => 'config_value'])

                                                    </div>
                                                
                                                </div>
                                                @elseif($setting->type === 'Textarea')
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="productname">Config value</label>
                                                        <textarea rows="5" id="config_value" name="config_value" 
                                                    class="form-control @error('title') is-invalid @enderror">{{$setting->config_value}}</textarea>
                            @include('partials.error-validation', ['error_validation' => 'config_value'])

                                                    </div>
                                                
                                                </div>
                                               
                                                @endif

                                            </div>
        
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                                            {{-- <button type="submit" class="btn btn-secondary waves-effect">Cancel</button> --}}
                                        </form>
        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

        


@endsection