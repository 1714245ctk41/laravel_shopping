@extends('layouts.admin')

@section('content')


 <!-- start page title -->
 
                      @include('partials.content-header', ['name' => 'slider', 'key' => 'EDIT'])
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
{{--         
                                        <h4 class="card-title">Basic Information</h4>
                                        <p class="card-title-desc">Fill all information below</p> --}}
        
<form method="POST" action="{{route('slider.update', ['slider' => $slider])}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="productname">Tên slider</label>
                                                    <input value="{{$slider['name']}}" id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror">
                            @include('partials.error-validation', ['error_validation' => 'name'])

                                                    </div>
                                                
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="productname">Mô tả slider</label>
                                                    <textarea rows="4" id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror">{{$slider['description']}}</textarea>
                            @include('partials.error-validation', ['error_validation' => 'description'])

                                                    </div>
                                                
                                                </div>

                                            </div>
                                            <div class="form-group">

                                            <div class="custom-file">

                                                <label for="productname">Thêm hình ảnh slider</label><br>
                                
                                            <input  name="image_path" type="file" class="form-control-fil @error('image_path') is-invalid @enderror" >
                                                <label   for="customFile">Choose file</label>
                            @include('partials.error-validation', ['error_validation' => 'image_path'])

                                              </div>
                                            </div>
                                        </div>
                                       

                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-title-desc">Hình ảnh cũ</p>
                                            <img src="{{$slider['image_path']}}" width="150px" class="img-fluid" alt="Responsive image">
                                        </div>
                                        </div>
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Thêm slider</button>
                                            {{-- <button type="submit" class="btn btn-secondary waves-effect">Cancel</button> --}}
                                        </form>
        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

        


@endsection