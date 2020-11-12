@extends('layouts.admin')
@section('content')
@include('partials.content-header', ['name' => 'category', 'key' => 'List'])

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
                    @can('category-add')

                    <div class="col-sm-8">
                        <div class="text-sm-right">
                        <a href="{{route('categories.create')}}">
                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2">
                                <i class="mdi mdi-plus mr-1"></i> Add New Category</button>
                            </a>
                        </div>
                    </div><!-- end col-->
                    @endcan

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
                                <th>Tên danh mục</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                            <td><a href="javascript: void(0);" class="text-body font-weight-bold">{{$category['id']}}</a> </td>
                                <td>{{$category['name']}}</td>
                                <td>
                                    {{$category['created_at']}}
                                </td>

                                <td>
                                    @can('category-edit')
                                        
                                    <a href="{{route('categories.edit', ['id'=>$category['id']])}}" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="mdi mdi-pencil font-size-18"></i></a>
                                        @endcan

                            

                                    <a href="{{route('categories.delete', ['id'=>$category['id']])}}" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="mdi mdi-close font-size-18"></i></a>
                                </td>
                               
                            </tr>

                            @endforeach
                           

                            
                        </tbody>
                    </table>
                </div>
              
              @include('partials.pagination', ['paginator' => $categories])
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection