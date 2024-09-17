@extends('layouts.admin')
@section('content')
<div class="col-lg-6 m-auto">
    <div class="card">
        <div class="card-header">
            <h3>Edit Category</h3>
        </div>
        <div class="card-body">

            <form action="{{ route('category.update',$category_info->id) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="category_id" value="{{ $category_info->id }}">
                    <label for="cate_name" class="form label">Category Name</label>
                    <input type="text" name="cate_name" class="form-control" value="{{ $category_info->cate_name }}">
                </div>
                <div class="mb-3">
                    <label for="category_img" class="form label">Category Image</label>
                    <input type="file" name="cate_img" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                </div>

                <div class="mb-3">
                    <img id="blah" src="{{ asset('uploads/category') }}/{{ $category_info->cate_img }}" width="100">
                </div>
                <div class="mb-3">
                    <label for="">Select</label>
                    <select class="form-control" name="status"  value="{{ $category_info->status }}">
                        <option selected>Status Menu</option>
                        <option value="1">True</option>
                        <option value="2">False</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update Category</button>
                    <span class="mb-3">
                        <a href="{{ route('category.index') }}" class="btn btn-infor">View Category List</a>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
