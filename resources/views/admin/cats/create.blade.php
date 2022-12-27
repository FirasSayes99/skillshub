@extends('admin.layouts.master')
@section('title')
    add category
@endsection


@section('pagename')
    add category
@endsection


@section('main_page')
    category
@endsection

@section('sub_page')
    Add Category
@endsection


@section('content')
    <div class="col-md-12">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Category</h3>
            </div>


            <form method="post" action="{{route('cats.store')}}">  
            @csrf
                
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <div class="col-sm-6">

                            <div class="form-group clearfix">
                                <div class="icheck-primary d-inline mr-3">
                                    <input type="radio" id="radioPrimary1" name="active" value="1" checked="">
                                    <label for="radioPrimary1">
                                    Active
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary2" name="active" value="0">
                                    <label for="radioPrimary2">
                                    Not Active
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>


    </div>
@endsection
