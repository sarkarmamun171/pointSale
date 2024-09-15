@extends('layouts.admin');
@section('content')
    <div class="col-lg-8">
        <form action="" method="get">
            <div class="card">
                <div class="card-header">
                    <h3>Category List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Category Name</th>
                            <th>Category Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add New Category</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="cate_name" class="form label">Category Name</label>
                    <input type="text" name="cate_name"  class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="cate_img" class="form label">Category Image</label>
                    <input type="file" name="cate_img"  class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="">Select</label>
                    <select class="form-control" name="status">
                        <option selected>Status Menu</option>
                        <option value="1">True</option>
                        <option value="2">False</option>
                      </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
