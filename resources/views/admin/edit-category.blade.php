@extends('admin.layouts.main')
@section('main-content')
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Update Category</h1>
<div class="card shadow mb-8">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between navbar">
                  <h6 class="m-0 font-weight-bold text-primary">Update Category</h6>
                  <a href="{{ url('admin/categorys') }}" class="btn btn-success">Back</a>
                </div>
                <div class="card-body">
                  <form action="{{ url('admin/update-category/'.$category->id) }}" method="post" enctype="multipart/form-data">
                   @csrf 
                   @method('PUT')
                    <div class="form-group">
                      <label for="category_name">Category Name</label>
                      <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Enter First Name" value="{{ $category->category_name }}">
                      <small id="emailHelp" class="form-text text-danger">
                            @error('category_name')
                                {{ $message }}
                            @enderror
                      </small>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="no_of_product" class="form-control" value="{{ $category->no_of_product }}">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="username" class="form-control" value="{{ $category->username }}">
                    </div>
                    <div class="text-right">
                      <button type="submit" class="btn btn-primary">Update Admin</button>
                    </div>
                  </form>
                </div>
              </div>
</div>
<!-- /.container-fluid -->
@endsection