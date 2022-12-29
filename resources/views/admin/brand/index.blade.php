@extends('admin.master')

@section('title')
    Manage Brand
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Brand</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage Brand</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <div class="float-start">
                    <i class="fas fa-table me-1"></i>
                    Manage Brand
                </div>
                <div class="float-end">
                    <a href="{{route('brands.create')}}" class="btn btn-primary ">Create Brand</a>
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
                    @foreach($brands as $brand)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->slug}}</td>
                            <td>{{$brand->status == 1 ? 'published' : 'unpublished'}}</td>
                            <td>
                                <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <form onsubmit="return confirm('Are your sure to delete this?')" action="{{route('brands.destroy',$brand->id)}}" method="post" class="d-inline-block">
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

