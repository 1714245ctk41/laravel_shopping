@extends('layouts.admin')

@section('content')


 <!-- start page title -->
 
                      @include('partials.content-header', ['name' => 'menu', 'key' => 'Add'])
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
{{--         
                                        <h4 class="card-title">Basic Information</h4>
                                        <p class="card-title-desc">Fill all information below</p> --}}
        
<form method="POST" action="{{route('menus.store')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="productname">Tên menu</label>
                                                        <input id="menu_name" name="menu_name" type="text" class="form-control">
                                                    </div>
                                                
                                                </div>
        
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Menu</label>
                                                        <select class="form-control select2" name="select_parent_id">
                                                            <option value="0">Chọn menu cha</option>
                                                            @php
                                                                echo $htmlOption
                                                            @endphp
                                                        </select>
                                                    </div>
                                            
                                                    
                                                </div>
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