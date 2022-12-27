@extends('admin.layouts.master')
@section('title')
    archives
@endsection


@section('pagename')
    all Archives
@endsection


@section('main_page')
    Category
@endsection

@section('sub_page')
     Archives
@endsection


@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Archive Table</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">

                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Created at</th>
                                <th colspan="2" class="text-center">Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cat as $cat)
                                <tr>
                                    <td>{{ $cat->id }}</td>
                                    <td>{{ $cat->name }}</td>
                                    <td>
                                        @if ($cat->active == 1)
                                            {{ 'active' }}
                                        @else
                                            {{ 'not active' }}
                                        @endif
                                    </td>
                                    <td>{{ $cat->created_at }}</td>
                                    <td><a href="{{ route('cats.restore', $cat->id) }}" class="btn btn-outline-info">Restore</a></td>
                                   
                                    
                                   <td><a href="{{ route('cats.force', $cat->id) }}" class="btn btn-outline-danger">Delete</a></td>
                            @empty
                                <td colspan="4" class="text-center">No Category Added</td>
                            @endforelse



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
