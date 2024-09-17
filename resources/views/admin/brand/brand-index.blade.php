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
                @foreach ($brands as $sl=>$brand)
                    <tr>
                        <td>{{ $sl+1 }}</td>
                        <td>{{ $brand->brand_name }}</td>
                        <td><img src="{{ asset('uploads/brand') }}/{{ $brand->brand_img }}" alt="" width="50"></td>
                        <td>
                            @if ($brand->status == 1)
                            <span class="badge badge-dark">True</span>
                        @elseif ($brand->status == 2)
                            <span class="badge badge-primary">False</span>
                        @endif
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('brand.edit',$brand->id) }}" class="btn btn-info shadow btn-xs sharp del_btn"><i
                                        class="fa fa-pencil"></i></a>
                                &nbsp; &nbsp;
                                <a href="{{ route('brand.delete',$brand->id) }}" class="btn btn-danger shadow btn-xs sharp del_btn"><i
                                        class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add Brand</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">
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
