@extends('admin.layouts.main')
@section('main-content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Draft Products</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 navbar">
        <h6 class="m-0 font-weight-bold text-primary">Draft Products List</h6>
        <a href="{{ url('admin/products') }}" class="btn btn-success">Back</a>
    </div>
    @if (session('success'))
        <div class="myAlert-top alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('success') }}
        </div>
    @endif
    @if (session('delete'))
        <div class="myAlert-bottom alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('delete') }}
        </div>
    @endif
    @if (session('update'))
        <div class="myAlert-top alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('update') }}
        </div>
    @endif
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered product-table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Sku</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Tag</th>
                        <th>Compare Price</th>
                        <th>Selling Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Admin</th>
                        <th>Edit</th>
                        <th>Draft</th>
                    </tr>
                    @foreach($product as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->sku }}</td>
                            <td>{{ $item->description }}</td>
                            <td><span class="badge badge-success">{{ $item->category }}</span></td>
                            <td><span class="badge badge-warning">{{ $item->tag }}</span></td>
                            <td>${{ $item->compare_price }}</td>
                            <td>${{ $item->selling_price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td class="product-image-admin"><img src="{{ asset('uploads/product/'.$item->image) }}" alt=""></td>
                            <td>{{ $item->admin }}</td>
                            <td><a href="{{url('/admin/retore-product/'.$item->id) }}" class="btn btn-primary">Retore</a></td>
                            <td><a href="{{url('/admin/delete-product/'.$item->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach 
                </thead>
                <tbody>
                                                
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection