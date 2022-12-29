@extends('admin.master')

@section('title')
    Edit Brand
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Brand</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Brand</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Brand
            </div>
            <div class="card-body">
                <form action="{{route('brands.update',$brand->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="row mt-2">
                        <label for="categoryName" class="col-md-2">Brand Name</label>
                        <div  class="col-md-10"><input id="categoryName" type="text" name="name" value="{{$brand->name}}" placeholder="Enter a product category"></div>
                    </div>
                    <div class="row mt-2">
                        <label class="col-md-2">Status</label>
                        <div  class="col-md-10">
                            <label for="published"><input id="published"  type="radio" name="status" value="1" {{$brand->status == 1 ? 'checked' : ''}}>Published </label>
                            <label for="unPublished"><input id="unPublished"  type="radio" name="status" value="0" {{$brand->status == 0 ? 'checked' : ''}}>Unpublished </label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-2"></label>
                        <div class="col-md-10">
                            <input type="submit" class="btn btn-primary" value="Update Brand">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection



