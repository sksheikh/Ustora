
@extends('admin.master')

@section('title')
    Edit Product
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Product</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit Product
            </div>
            <div class="card-body">
                <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row mt-2">
                        <label for="categoryName" class="col-md-3">Product Name</label>
                        <div  class="col-md-9"><input id="categoryName" type="text" name="name" value="{{$product->name}}" placeholder="Enter a product name" class="form-control"></div>
                    </div>
                    <div class="row mt-2">
                        <label for="categoryName" class="col-md-3">Product Category</label>
                        <div  class="col-md-9">
                            <select name="category_id" id="" class="form-control">
                                <option value="">--Select a Category--</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == $product->category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="categoryName" class="col-md-3">Product Brand</label>
                        <div  class="col-md-9">
                            <select name="brand_id" id="" class="form-control">
                                <option value="">--Select a Brand--</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" {{$brand->id == $product->brand->id ? 'selected' : ''}}>{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="" class="col-md-3">Product Price</label>
                        <div class="col-md-9">
                            <input type="number" name="price" value="{{$product->price}}" class="form-control" placeholder="Enter product price">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="categoryName" class="col-md-3">Product Description</label>
                        <div  class="col-md-9">
                            <textarea name="description" rows="3" class="form-control">{{$product->description}}</textarea>
                        </div>
                    </div>


                    <div class="row mt-2">
                        <label for="categoryName" class="col-md-3">Product Image</label>
                        <div  class="col-md-9">
                            <input type="file" name="image" class="form-control">
                            <img src="{{asset($product->image)}}" alt="" width="50" class="mt-2">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label class="col-md-3">Status</label>
                        <div  class="col-md-9">
                            <label for=""><input  type="radio" name="status" value="1" {{$product->status == 1 ? 'checked' : ''}}>Published </label>
                            <label for=""><input  type="radio" name="status" value="0" {{$product->status == 0 ? 'checked' : ''}}>Unpublished </label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-primary" value="Update Product">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection



