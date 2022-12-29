@extends('admin.master')

@section('title')
    Edit Category
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Category</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit Category
            </div>
            <div class="card-body">
                <form action="{{route('categories.update',$category->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="row mt-2">
                        <label for="categoryName" class="col-md-2">Category Name</label>
                        <div  class="col-md-10"><input id="categoryName" type="text" name="name" value="{{$category->name}}" placeholder="Enter a product category"></div>
                    </div>
                    <div class="row mt-2">
                        <label class="col-md-2">Status</label>
                        <div  class="col-md-10">
                            <label for=""><input  type="radio" name="status" value="1" {{$category->status == 1 ? 'checked' : ''}}>Published </label>
                            <label for=""><input  type="radio" name="status" value="0" {{$category->status == 0 ? 'checked' : ''}}>Unpublished </label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-2"></label>
                        <div class="col-md-10">
                            <input type="submit" class="btn btn-primary" value="Update Category">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection


