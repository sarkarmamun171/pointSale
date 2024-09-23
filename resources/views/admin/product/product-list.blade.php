@extends('layouts.admin')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Product List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Category</th>
                        <th>Brand Name</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Discount(%)</th>
                        <th>After Discount</th>
                        <th>Preview</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($productLists as $sl=>$productList)
                        <tr>
                            <td>{{ $sl+1 }}</td>
                            <td>{{ $productList->category->cate_name }}</td>
                            <td>{{ $productList->brand->brand_name}}</td>
                            <td>{{ $productList->product_name}}</td>
                            <td>{{ $productList->price}}</td>
                            <td>{{ $productList->discount}}</td>
                            <td>{{ $productList->after_discount}}</td>
                            <td>
                                <img width="70" src="{{ asset('uploads/preview_img') }}/{{ $productList->preview }}" alt="">
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a  title="inventory" href="#" class="btn btn-primary shadow btn-xs sharp"><i class="fa fa-archive"></i></a>
                                    &nbsp; &nbsp;
                                    <a  title="view" href="#" class="btn btn-info shadow btn-xs sharp"><i class="fa fa-eye"></i></a>
                                    &nbsp; &nbsp;
                                    <a title="delete" href="#" class="btn btn-danger shadow btn-xs sharp del_btn"><i class="fa fa-trash"></i></a>
                                    &nbsp; &nbsp;
                                    <a title="edit" href="#" class="btn btn-info shadow btn-xs sharp"><i class="fa fa-pencil"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
