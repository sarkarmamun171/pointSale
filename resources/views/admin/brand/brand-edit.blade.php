@extends('layouts.admin')
@section('content')
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Update Brand</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('brand.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="brand_id" value="{{ $brand_info->id }}">
                        <label for="brand_name" class="form-label">Brand Name</label>
                        <input type="text" name="brand_name" id="brand_name" class="form-control"
                            value="{{ $brand_info->brand_name }}">

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Brand Logo</label>
                        <input type="file" name="brand_img" class="form-control"
                            onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <div class="mb-3">
                        <img id="blah" src="{{ asset('uploads/brand') }}/{{ $brand_info->brand_img }}" width="100">
                    </div>
                    <div class="mb-3">
                        <label for="">Select</label>
                        <select class="form-control" name="status" value="{{ $brand_info->status }}">
                            <option selected>Status Menu</option>
                            <option value="1">True</option>
                            <option value="2">False</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Brand</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
