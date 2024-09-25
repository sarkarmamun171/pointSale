@extends('layouts.admin')
@section('content')
<div class="container">
    <h3 align="left" class="mt-5">POS</h3>
    <div class="row">
        <div class="row">
            <div class="col-sm-8">
              <form action="" method="post" class="form-horizontal" id="frmInvoice">
                    <table class="table table-bordered">
                        <caption>Add Product</caption>
                        <tr>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" placeholder="Product code" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Product Name" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Price" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Quantity" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Total Amount">
                            </td>
                            <td>
                                <button class="btn btn-success" type="button" onclick="addproduct()">Add</button>
                            </td>
                        </tr>
                    </table>
              </form>
              <table class="table table-bordered" id="product_list">
                <caption>Product</caption>
                <thead>
                    <tr>
                        <th style="width:40px">Remove</th>
                        <th>Product Name</th>
                        <th>Product Code</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
            <div class="col-sm-4">
                <div class="col-s12 m6 offset m4">
                    <div class="form-group" align="left">
                        <label for="form-label">Total</label>
                        <input type="text" class="form-control" id="total" name="total" size="30px" required >
                    </div>
                    <div class="form-group" align="left">
                        <label for="form-label">Pay</label>
                        <input type="text" class="form-control" id="pay" name="pay" size="30px" required >
                    </div>
                    <div class="form-group" align="left">
                        <label for="form-label">Balance</label>
                        <input type="text" class="form-control" id="balance" name="balance" size="30px" required >
                    </div>
                    <div class="form-group" align="left">
                        <label for="form-label">Due</label>
                        <input type="text" class="form-control" id="due" name="due" size="30px" required >
                    </div>
                    <div class="form-group" align="left">
                        <button type="submit" class="btn btn-primary">Update Invoice</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
