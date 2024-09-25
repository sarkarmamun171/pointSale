@extends('layouts.admin')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h3>Add New Product</h3>
            <a href="{{ route('product.list') }}" class="btn btn-primary"><i class="fa fa-list"></i> Product List</a>
        </div>
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">Seclect Category</option>
                                @foreach ($categories as $category)
                                {{-- <option value="{{ $category->id }}">{{ $category->category_name }}</option> --}}
                                <option value="{{ $category->id }}" @if($category->id == $products->cat_id) selected @endif>
                                    {{ $category->cate_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="" class="form-label">Product Brand</label>
                            <select name="brand" class="form-control">
                                <option value="">Seclect Product Brand</option>
                                @foreach ($brands as $brand)
                                {{-- <option value="{{ $category->id }}">{{ $category->category_name }}</option> --}}
                                <option value="{{ $brand->id }}" @if($brand->id == $products->brand_id) selected @endif>
                                    {{ $brand->brand_name }}
                                </option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" value="{{ $products->productname }}">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" value="{{ $products->price }}">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Discount</label>
                            <input type="number" class="form-control" name="discount" value="{{ $products->discount }}">

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Short Description</label>
                            <textarea id="short_desp" name="short_desp" type="text" class="form-control">{{ $products->short_desp }}</textarea>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Long Description</label>
                            <textarea id="long_desp" name="long_desp" type="text" class="form-control" name="long_desp">{{ $products->long_desp }}</textarea>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Additional Information</label>
                            <textarea type="text" class="form-control" name="additional_info">{{ $products->additional_info }}</textarea>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Preview Image</label>
                            <input type="file" class="form-control" name="preview" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"></input>
                        </div>

                        <div class="my-2">
                            {{-- <img width="100" src="" id="blah" alt=""> --}}
                            <img src="{{ asset('uploads/preview_img') }}/{{ $products->preview }}" width="100">
                        </div>
                    </div>

                    <div class="col-lg-4 m-auto">
                        <div class="mb-3">
                            <button type="submit" class="btn-primary p-3 rounded">Product Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('footer_script')
<script>
    $(document).ready(function() {
        $('#short_desp').summernote();
        // $('#short_desp').summernote('code', '')
        // $('#short_desp').html(escape($('#short_desp').summernote('code', '<b>some</b>')));
        $('#long_desp').summernote();
    });
</script>
