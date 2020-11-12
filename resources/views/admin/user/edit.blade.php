@extends('layouts.admin')

@section('content')


 <!-- start page title -->
 
                      @include('partials.content-header', ['name' => 'user', 'key' => 'Add'])
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
{{--         
                                        <h4 class="card-title">Basic Information</h4>
                                        <p class="card-title-desc">Fill all information below</p> --}}
        
<form method="POST" action="{{route('users.update', ['user' => $user->id])}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="productname">Nhập tên</label>
                                                    <input value="{{$user->name}}" id="name" name="name" type="text" class="form-control ">
                            {{-- @include('partials.error-validation', ['error_validation' => 'name']) --}}

                                                    </div>
                                                
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="productname">Nhập email</label>
                                                    <input value="{{$user->email}}" id="email" name="email" type="email" class="form-control ">
                            {{-- @include('partials.error-validation', ['error_validation' => 'name']) --}}

                                                    </div>
                                                
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="productname">Nhập password</label>
                                                    <input value="" id="password" name="password" type="password" class="form-control ">
                            {{-- @include('partials.error-validation', ['error_validation' => 'name']) --}}

                                                    </div>
                                                
                                                </div>

                                            </div>

                                            <div class="form-group" data-select2-id="7">
                                                <label class="control-label">Vai trò</label>
                
                                                <select name="role_id[]" class="select2_init form-control select2-multiple select2-hidden-accessible" multiple data-placeholder="Choose ..." data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                    <option value=""></option>
                                                    @foreach ($roles as $role)
                                            <option 
                                                {{$rolesOfUser->contains('id', $role->id) ? 'selected' : ''}}
                                                value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach
                                                    {{-- <option value="AK" data-select2-id="9">Alaska</option> --}}
                                                   
                                            </select>
                                                {{-- <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="5" style="width: 392.5px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Alaska" data-select2-id="17"><span class="select2-selection__choice__remove" role="presentation">×</span>Alaska</li><li class="select2-selection__choice" title="California" data-select2-id="18"><span class="select2-selection__choice__remove" role="presentation">×</span>California</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
                
                                            </div>
                         


                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Chỉnh sửa</button>
                                            {{-- <button type="submit" class="btn btn-secondary waves-effect">Cancel</button> --}}
                                        </form>
        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

        


@endsection


@section('js')
{{-- <script src="{{asset('./assets/libs/select2/js/select2.min.js')}}"></script> --}}

<script src="{{asset('/admins/product/add/add.js')}}"></script>
<script>
    $('.select2_init').select2({
        'placeholder': 'Chọn vai trò'
    })
</script>

<!--tinymce js-->


@endsection