@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage Product</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <div class="float-start">
                    <i class="fas fa-table me-1"></i>
                    Manage Product
                </div>
                <div class="float-end">
                    <a href="{{route('products.create')}}" class="btn btn-primary ">Create Product</a>
                </div>
            </div>
            <div class="card-body">
                <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category_id}}</td>
                            <td>{{$product->brand_id}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                            <td>
                                <img src="{{asset($product->image)}}" alt="" width="50">
                            </td>
                            <td>{{$product->status == 1 ? 'published' : 'unpublished'}}</td>
                            <td>
                                <a href="{{route('products.edit',$product->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <form onsubmit="return confirm('Are your sure to delete this?')" action="{{route('products.destroy',$product->id)}}" method="post" class="d-inline-block">
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

