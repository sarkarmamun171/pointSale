@extends('layouts.admin');
@section('content')
    <div class="col-lg-8"></div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add New Category</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="category_name" class="form label">Category Name</label>
                    <input type="text" name="category_name"  class="form-control" >

                </div>
            </div>
        </div>
    </div>
@endsection
