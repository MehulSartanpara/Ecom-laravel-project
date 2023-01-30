@extends('admin.layouts.main')
@section('main-content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Categorys</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 navbar">
            <h6 class="m-0 font-weight-bold text-primary">Categorys List</h6>
            <a href="{{ url('admin/add-category') }}" class="btn btn-success">Add Category</a>
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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Categorys Name</th>                          
                            <th>No. Of Product</th>
                            <th>Username</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Draft</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category_name }}</td>
                            <td>{{ $item->no_of_product }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{date('d M, Y', strtotime($item->created_at))}}</td>
                            <td><a href="{{url('/admin/edit-category/'.$item->id) }}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{url('/admin/delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach                                 
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection