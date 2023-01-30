@extends('admin.layouts.main')
@section('main-content')
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Update Product</h1>
<div class="card shadow mb-8">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between navbar">
        <h6 class="m-0 font-weight-bold text-primary">Update Product</h6>
        <a href="{{ url('admin/products') }}" class="btn btn-success">Back</a>
    </div>
    <div class="card-body">
        <form action="{{ url('admin/update-product/'.$product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <ul class="nav nav-tabs " role="tablist">
                <li class="nav-item">
                    <a href="#info" role="tab" data-toggle="tab" class="nav-link active">
                        Product Details
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#ratings" role="tab" data-toggle="tab" class="nav-link">
                        Product Price
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#plus" role="tab" data-toggle="tab" class="nav-link">
                        Product Media
                    </a>
                </li>
            </ul>
            <div class="tab-content p-3 border" style="border-top: 0px!important;">
                <div class="tab-pane active" role="tabpanel" id="info">
                    <div class="form-group">
                        <label for="title">Product Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Product Title" value="{{ $product->title }}">
                        <small id="emailHelp" class="form-text text-danger">
                                @error('title')
                                    {{ $message }}
                                @enderror
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="sku">Product SKU</label>
                        <input type="text" name="sku" class="form-control" id="sku" placeholder="Enter Product Sku" value="{{ $product->sku }}">
                        <small id="emailHelp" class="form-text text-danger">
                                @error('sku')
                                    {{ $message }}
                                @enderror
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="description">Product Description</label>
                        <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Product Description" value="{{  $product->description }}">{{  $product->description }}</textarea>
                        <small id="emailHelp" class="form-text text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="description">Select Category</label>
                        <select class="form-control" name="category">
                            @foreach($category as $item)    
                                <option value="{{ $item->category_name }}" @if($item->category_name == $product->category) selected @endif>{{ $item->category_name }}</option>
                            @endforeach  
                        </select>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="ratings">
                    <div class="form-group">
                        <label for="compare_price">Product Compare Price (in $)</label>
                        <input type="number" name="compare_price" class="form-control" id="compare_price" placeholder="Enter Product Selling Price" value="{{  $product->compare_price }}">
                        <small id="emailHelp" class="form-text text-danger">
                                @error('selling_price')
                                    {{ $message }}
                                @enderror
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="selling_price">Product Selling Price (in $)</label>
                        <input type="number" name="selling_price" class="form-control" id="selling_price" placeholder="Enter Product Selling Price" value="{{  $product->selling_price }}">
                        <small id="emailHelp" class="form-text text-danger">
                                @error('selling_price')
                                    {{ $message }}
                                @enderror
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Enter Product Quantity" value="{{  $product->quantity }}">
                        <small id="emailHelp" class="form-text text-danger">
                                @error('quantity')
                                    {{ $message }}
                                @enderror
                        </small>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="plus">
                    <div class="form-group">
                        <label for="tag">Product Tag</label>
                        <input type="text" name="tag" class="form-control" id="tag" placeholder="Enter Product Tag" value="{{ $product->tag }}">
                        <small id="emailHelp" class="form-text text-danger">
                                @error('tag')
                                    {{ $message }}
                                @enderror
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <input type="file" name="image" class="form-control" style="padding-bottom: 35px;">
                        <img class="img-profile rounded-circle admin-table-img" src="{{ asset('uploads/product/'.$product->image) }}">
                        <small id="emailHelp" class="form-text text-danger">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="admin" class="form-control" value="{{ Session::get('admin') }}">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="admin" class="form-control" id="admin" placeholder="" value="{{  $product->admin }}">
                    </div>
                </div>
            </div>
            <div class="text-right mt-4">
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </form>
    </div>
</div>
</div>
<!-- /.container-fluid -->
@endsection