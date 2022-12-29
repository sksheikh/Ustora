
@extends('admin.master')

@section('title')
    Create Product
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Brand</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Create Product</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Create Product
            </div>
            <div class="card-body">
                <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2">
                        <label for="categoryName" class="col-md-3">Product Name</label>
                        <div  class="col-md-9"><input id="categoryName" type="text" name="name" placeholder="Enter a product name" class="form-control"></div>
                    </div>
                    <div class="row mt-2">
                        <label for="categoryName" class="col-md-3">Product Category</label>
                        <div  class="col-md-9">
                            <select name="category_id" id="" class="form-control">
                                <option value="">--Select a Category--</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
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
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="" class="col-md-3">Product Price</label>
                        <div class="col-md-9">
                            <input type="number" name="price" class="form-control" placeholder="Enter product price">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="categoryName" class="col-md-3">Product Description</label>
                        <div  class="col-md-9">
                            <textarea name="description"  rows="3" class="form-control"></textarea>
                        </div>
                    </div>


                    <div class="row mt-2">
                        <label for="categoryName" class="col-md-3">Product Image</label>
                        <div  class="col-md-9">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label class="col-md-3">Status</label>
                        <div  class="col-md-9">
                            <label for=""><input  type="radio" name="status" value="1" checked>Published </label>
                            <label for=""><input  type="radio" name="status" value="0">Unpublished </label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-primary" value="Create Product">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection


