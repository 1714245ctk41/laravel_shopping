@extends('layouts.admin')
@section('content')
@include('partials.content-header', ['name' => 'role', 'key' => 'List'])

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <div class="search-box mr-2 mb-2 d-inline-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <i class="bx bx-search-alt search-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="text-sm-right">
                        <a href="{{route('roles.create')}}">
                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2">
                                <i class="mdi mdi-plus mr-1"></i> Add New role</button>
                            </a>
                        </div>
                    </div><!-- end col-->
                </div>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                    </div>
                                </th>
                                <th>role ID</th>
                                <th>Tên vai trò</th>
                                <th>Mô tả vai trò</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                            <td><a href="javascript: void(0);" class="text-body font-weight-bold">{{$role['id']}}</a> </td>
                                <td>{{$role['name']}}</td>
                                <td>
                                    {{$role['display_name']}}
                                </td>
                      
                               

                                <td>
                                    <a href="{{route('roles.edit', ['role'=>$role['id']])}}" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="mdi mdi-pencil font-size-18"></i></a>
                            

                                    <a href=""
                                        data-url="{{route('roles.delete', ['role'=>$role['id']])}}" 
                                        id="action_delete"
                                        class="text-danger action_delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="mdi mdi-close font-size-18"></i></a>
                                </td>
                               
                            </tr>

                            @endforeach
                           

                            
                        </tbody>
                    </table>
                </div>
              
              @include('partials.pagination', ['paginator' => $roles])
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{asset('admins/main.js')}}"></script>

@endsection
