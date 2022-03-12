@extends('master')
@section('title')
    Add Product
@endsection
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class=" card-header">Add Product Form</div>
                        <div class="card-body">
                            <form action="{{route('update-product',['id'=>$product->id])}}" method="POST">
                                <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" value="{{$product->name}}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="category" class="form-control" value="{{$product->category}}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="brand" class="form-control" value="{{$product->brand}}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="text" name="price" class="form-control" value="{{$product->price}}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control" value="">{{$product->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file" value=""/>
                                        <img src="{{asset($product->image)}}" alt="" height="100px" width="100px">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit"  class="btn btn-outline-success" value="Update Info Product"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

