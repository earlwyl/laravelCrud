@extends('layouts.master')
@section('title', 'Create Product')
@section('content')
<br>
<div class="container" >
    <div class="row" >
        <div class="col-md-6" >
                <h4>Form Input Data</h4>
                <br>
                <form action="{{ route('product.store') }}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="product_id">Kode Product <span class="text-danger" >*</span></label>
                        <input class="form-control" name="id" id="id" type="text">
                    </div>
                    <div class="form-group">
                        <label for="name_product">Product Name <span class="text-danger" >*</span></label>
                        <input class="form-control" name="name_product" id="name_product" type="text">
                    </div>
                    <div class="form-group">
                        <label for="price">Price <span class="text-danger" >*</span></label>
                        <input class="form-control" name="price" id="price" type="text">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock<span class="text-danger" >*</span></label>
                        <input class="form-control" name="stock" id="stock" type="text">
                    </div>
                    <br>
                    <div>
                        <button type="submit" class="btn btn-primary">Insert</button>
                        <a href="{{ route('product.index') }}">Kembali</a>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection