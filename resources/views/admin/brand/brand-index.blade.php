@extends('layouts.admin')
@section('content')
    <div class="col-lg-8">
        <div class="card-header">
            <h4>Brand List</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>Brand Name</th>
                    <th>Brand Logo</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add Brand</h3>
            </div>
            <div class="card-body">
                <form action="{{ route() }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="brand_name" class="form label">Brand Name</label>
                        <input type="text" name="brand_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="brand_img" class="form label">Brand Image</label>
                        <input type="file" name="brand_img" class="form-control">
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
