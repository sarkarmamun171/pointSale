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
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                    </table>
              </form>
            </div>
        </div>
    </div>
</div>

@endsection
