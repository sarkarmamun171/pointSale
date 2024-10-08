@extends('layouts.admin')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Product</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="" class="form-label">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">Seclect Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->cate_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="" class="form-label">Brand</label>
                                <select name="brand" id="brand" class="form-control">
                                    <option value="">Seclect Brand</option>
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Product Name</label>
                                <input type="text" class="form-control" name="product_name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Discount</label>
                                <input type="number" class="form-control" name="discount">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Short Description</label>
                                <textarea id="short_desp" name="short_desp" type="text" class="form-control" name="short_desp"></textarea>
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Long Description</label>
                                <textarea id="long_desp" name="long_desp" type="text" class="form-control" name="Long_desp"></textarea>
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Additional Information</label>
                                <textarea type="text" class="form-control" name="additional_info"></textarea>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Preview Image</label>
                                <input type="file" class="form-control" name="preview" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"></input>
                            </div>
                            <div class="my-2">
                                <img width="100" src="" id="blah" alt="">
                            </div>
                        </div>

                        <div class="col-lg-4 m-auto">
                            <div class="mb-3">
                                <button type="submit" class="btn-primary p-3 rounded">Add New Product</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
