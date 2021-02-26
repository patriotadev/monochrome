@extends('admin.index')

@section('data')
<div class="container mt-5">
    <form action="/add_product" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name">
        </div>
        <div class="form-group">
            <label for="product_type">Product Type</label>
            <input type="text" class="form-control" id="product_type" name="product_type">
        </div>
        <div class="form-group">
            <label for="new_arrival">New Arrival</label>
            <input type="text" class="form-control" id="new_arrival" name="new_arrival">
        </div>
        <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control-file" id="product_image" name="product_image">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add</button>
    </form>
</div>
@endsection