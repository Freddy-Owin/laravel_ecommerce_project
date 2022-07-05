@extends('layouts.master')

@section('content')
    <div class="content-header row justify-content-between">
        <div class="content-title col-4">
            <h1>Add a New Product</h1>
        </div>
        <div class="col-2">
            <a href="{{ route('products.index') }}" class="btn btn-success">
                <i class="fa-solid fa-circle-left p-2"></i>Back
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    {{ @csrf_field() }}
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="text" name="stock" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="brand_id">Brand</label>
                                <select name="brand_id" id="" class="form-control">
                                    <option value="" disabled selected>Choose Brand</option>
                                    @foreach ($brand as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="brand_id">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="" disabled selected>Choose Category</option>
                                    @foreach ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" onchange="previewFile(this)">
                                <img alt="Product Image" id="previewImg" style="max-width:130px;margin-top:20px">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary col-12">Create a New Product</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function previewFile(input) {
            var file = $("input[type=file]").get(0).files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function()
                {
                    $("#previewImg").attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection