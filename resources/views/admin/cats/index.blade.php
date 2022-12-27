@extends('admin.layouts.master')
@section('title')
    categorys
@endsection


@section('pagename')
    all Categorys
@endsection


@section('main_page')
    Category
@endsection

@section('sub_page')
    all Categorys
@endsection


@section('content')
    <a href="{{ route('cats.create') }}" class="btn btn-outline-info"> Add New Category</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category Table</h3>
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
                            @forelse ($cats as $cat)
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
                                    <td><a href="{{ route('cats.edit', $cat->id) }}" class="btn btn-outline-info">Update</a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{route('cats.destroy',$cat->id)}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="3" class="text-center">No Category Addedd
                            @endforelse



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
