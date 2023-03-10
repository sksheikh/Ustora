@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage Category</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <div class="float-start">
                    <i class="fas fa-table me-1"></i>
                    Manage Category
                </div>
                <div class="float-end">
                    <a href="{{route('categories.create')}}" class="btn btn-primary ">Create Category</a>
                </div>
            </div>
            <div class="card-body">
                <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>{{$category->status == 1 ? 'published' : 'unpublished'}}</td>
                            <td>
                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <form onsubmit="return confirm('Are your sure to delete this?')" action="{{route('categories.destroy',$category->id)}}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"  class="btn btn-sm btn-danger " >Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
