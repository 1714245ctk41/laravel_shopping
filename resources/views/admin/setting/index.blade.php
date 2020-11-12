@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{asset('admins/setting.css')}}">
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="{{asset('admins/main.js')}}"></script>

@endsection

@section('content')
@include('partials.content-header', ['name' => 'Setting', 'key' => 'List'])



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
                            
                                <div class="dropdown">
                                    <button class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-plus mr-1"></i> Add New Menu  <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu"  aria-labelledby="dropdownMenuButton" style="">
                                    <a class="dropdown-item" href="{{route('settings.create').'?type=Text'}}">Text</a>
                                    <a class="dropdown-item" href="{{route('settings.create').'?type=Textarea'}}">Textarea</a>
                                    </div>
                                </div>
                            
                           
                          


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
                                <th>Order ID</th>
                                <th>Config key</th>
                                <th>Config value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($settings as $setting)
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                            <td><a href="javascript: void(0);" class="text-body font-weight-bold">{{$setting->id}}</a> </td>
                                <td>{{$setting->config_key}}</td>
                                <td>
                                   {{$setting->config_value}}
                                </td>

                                <td>
                                    <a href="{{route('settings.edit', ['setting'=>$setting['id']]).'?type='.$setting->type}} class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="mdi mdi-pencil font-size-18"></i></a>
                                        {{-- href="{{route('settings.edit', ['id'=>$menu['id']])}}"
                                        href="{{route('settings.delete', ['id'=>$menu['id']])}}" --}}

                                    <a href="" id="action_delete"
                                        class="text-danger action_delete"
                                    data-url = "{{route('settings.delete', ['setting' => $setting['id']])}}"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="mdi mdi-close font-size-18"></i></a>
                                </td>
                               
                            </tr>

                            @endforeach
                           

                            
                        </tbody>
                    </table>
                </div>
              
              @include('partials.pagination', ['paginator' => $settings])
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection