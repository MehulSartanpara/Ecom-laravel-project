@extends('admin.layouts.main')
@section('main-content')
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Add Category</h1>
<div class="card shadow mb-8">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between navbar">
                  <h6 class="m-0 font-weight-bold text-primary">Add Category</h6>
                  <a href="{{ url('admin/categorys') }}" class="btn btn-success">Back</a>
                </div>
                <div class="card-body">
                  <form action="{{ url('admin/add-category') }}" method="post" enctype="multipart/form-data">
                   @csrf 
                    <div class="form-group">
                      <label for="category_name">First Name</label>
                      <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Enter Category Name" value="{{ old('category_name') }}">
                      <small id="emailHelp" class="form-text text-danger">
                            @error('category_name')
                                {{ $message }}
                            @enderror
                      </small>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="admin" class="form-control" value="{{ Session::get('admin') }}">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                  </form>
                </div>
              </div>
</div>
<!-- /.container-fluid -->
@endsection