@extends('admin.index')

@section('data')
<div class="container mt-5">
    <a href="/admin/products/add_product"><button type="button" class="btn btn-primary mb-2">Add</button></a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Type</th>
                <th scope="col">New Arrival</th>
                <th scope="col">Product Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $p)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$p->product_name}}</td>
                <td>{{$p->product_type}}</td>
                <td>{{$p->new_arrival}}</td>
                <td><img src="/images/{{$p->product_image}}" width="100" height="100"></td>
                <td>
                    <div>

                        <a href="/admin/products/edit/{{$p->id}}"><button type="button" class="btn btn-success">Update</button></a>
                        <a href="/admin/products/delete/{{$p->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endSection