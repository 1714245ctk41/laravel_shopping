@extends('layouts.admin')

@section('content')


 <!-- start page title -->
 
                      @include('partials.content-header', ['name' => 'permission', 'key' => 'Add'])
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
{{--         
                                        <h4 class="card-title">Basic Information</h4>
                                        <p class="card-title-desc">Fill all information below</p> --}}
        
<form method="POST" action="{{route('permissions.store')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Chọn tên module</label>
                                                        <select class="form-control select2" name="module_parent">
                                                            <option value="">Chọn tên module</option>
                                                            @foreach (config('permissions.Table_module') as $moduleItem)
                                                        <option value="{{$moduleItem}}">{{$moduleItem}}</option>
                                                                
                                                            @endforeach

                                                            {{-- @php
                                                                echo $htmlOption
                                                            @endphp --}}
                                                        </select>
                                                    </div>
                                            
                                                    
                                                </div>
                                            </div>

                                            

                                            <div class="row">
                                                @foreach (config('permissions.module_children') as $module_children)
                                                    
                                                <div class="col-md-3">

                                                    <div class="card-body">
                                                        <h5 class="card-title mt-0">
                    
                                                            <div
                                                                class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                                        <input value="{{$module_children}}" type="checkbox"
                                                                name="module_children[]"
                                                                    class="custom-control-input checkbox_children"
                                                                    id="customCheck-outlinecolorlist{{$module_children}}">
                                                                <label class="custom-control-label"
                                                                    for="customCheck-outlinecolorlist{{$module_children}}">{{$module_children}}</label>
                                                            </div>
                    
                                                        </h5>
                                                    </div>
                    

                                                </div>
                                                {{-- end col-3 --}}
                                                @endforeach

                                              
                                            </div>
        
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Lưu thay đổi</button>
                                            {{-- <button type="submit" class="btn btn-secondary waves-effect">Cancel</button> --}}
                                        </form>
        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

        


@endsection