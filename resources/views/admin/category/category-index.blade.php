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
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Category Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($categories as $sl => $category)
                            <tr>
                                <td>{{ $sl + 1 }}</td>
                                <td>{{ $category->cate_name }}</td>
                                <td><img width="50" src="{{ asset('uploads/category') }}/{{ $category->cate_img }}"
                                        alt=""></td>
                                <td>
                                    @if ($category->status == 1)
                                        <span class="badge badge-dark">True</span>
                                    @elseif ($category->status == 2)
                                        <span class="badge badge-primary">False</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('category.edit',$category->id) }}" class="btn btn-info shadow btn-xs sharp del_btn"><i
                                                class="fa fa-pencil"></i></a>
                                        &nbsp; &nbsp;
                                        <a href="{{ route('category.delete',$category->id) }}" class="btn btn-danger shadow btn-xs sharp del_btn"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
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
                        <input type="text" name="cate_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="cate_img" class="form label">Category Image</label>
                        <input type="file" name="cate_img" class="form-control">
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
