@extends('layouts.admin')

@section('content')


<!-- start page title -->

@include('partials.content-header', ['name' => 'Role', 'key' => 'Edit'])
<!-- end page title -->
<div class="roles-create-wrapper">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{--
                                        <h4 class="card-title">Basic Information</h4>
                                        <p class="card-title-desc">Fill all information below</p> --}}

                <form method="POST" action="{{route('roles.update', ['role' => $role->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="productname">Tên vai trò</label>
                                <input value="{{$role->name}}" id="name" name="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror">
                                @include('partials.error-validation', ['error_validation' => 'name'])

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="productname">Mô tả vai trò</label>
                                <textarea rows="4" id="description" name="display_name" type="text"
                                    class="form-control ">{{$role->display_name}}</textarea>
                                {{-- @include('partials.error-validation', ['error_validation' => 'description']) --}}
                                {{-- @error('description') is-invalid @enderror --}}
                                {{-- @error('image_path') is-invalid @enderror --}}
                            </div>

                        </div>

                    </div>

            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
    <div class="card border border-primary">
    <div class="card-header bg-transparent border-primary">

        <h5 class="my-0 text-primary">
            <div
                class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                <input  type="checkbox"
                    class="custom-control-input checkall"
                    id="customCheck-outlinecolorcheckall">
                <label class="custom-control-label"
                    for="customCheck-outlinecolorcheckall">
                    <i
                        class="mdi mdi-bullseye-arrow mr-3"></i>checkall
                </label>
            </div>

        </h5>
    </div>
</div>
</div>
</div>


            <div class="row">
                @foreach ($permissionsParent as $permissionsParentItem)

                <div class="col-12">

                    <div class="card border border-primary">
                        <div class="card-header bg-transparent border-primary">

                            <h5 class="my-0 text-primary">
                                <div
                                    class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                    <input  value={{$permissionsParentItem->id}} type="checkbox"
                                        class="custom-control-input checkbox_wrapper"
                                        id="customCheck-outlinecolor{{$permissionsParentItem->id}}">
                                    <label class="custom-control-label"
                                        for="customCheck-outlinecolor{{$permissionsParentItem->id}}">
                                        <i
                                            class="mdi mdi-bullseye-arrow mr-3"></i>{{$permissionsParentItem->display_name}}
                                    </label>
                                </div>

                            </h5>
                        </div>
                        <div class="row">
                            @foreach ($permissionsParentItem->permissionsChildren as $item)

                            <div class="col-3">

                                <div class="card-body">
                                    <h5 class="card-title mt-0">

                                        <div
                                            class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                            <input value="{{$item->id}}" type="checkbox"
                                            name="permission_id[]"
                                            {{$permissionsChecked->contains('id', $item->id) ? 'checked': ''}}
                                                class="custom-control-input checkbox_children"
                                                id="customCheck-outlinecolor{{$item->id}}">
                                            <label class="custom-control-label"
                                                for="customCheck-outlinecolor{{$item->id}}">{{$item->name}}</label>
                                        </div>

                                    </h5>
                                </div>


                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                @endforeach

            </div>


            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Thêm vai trò</button>
            {{-- <button type="submit" class="btn btn-secondary waves-effect">Cancel</button> --}}
            </form>

        </div>
    </div>
</div>

</div>
<!-- end row -->

</div>


@endsection

@section('js')
<script>
$(function(){
    $('.checkbox_wrapper').on('click', function() {
    $(this).parents('.card').find('.checkbox_children').prop('checked', $(this).prop('checked'));
})

$('.checkall').on('click', function(){
    $(this).parents().find('.checkbox_children').prop('checked', $(this).prop('checked'));
    $(this).parents().find('.checkbox_wrapper').prop('checked', $(this).prop('checked'));


})
})
</script>
@endsection