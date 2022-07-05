@extends('layouts.master')

@section('content')
    <a href="{{ route('products.index') }}" class="btn btn-success justify-content-end">
        <i class="fa-solid fa-arrow-pointer"></i>Back
    </a>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-bordered table-dark">
                    <tr>
                        <th rowspan="7">
                            <img src="{{ asset('storage/products') }}/{{ $product->image }}" alt="{{ $product->name }}">
                        </th>
                    </tr>
                    <tr>
                        <th class="col-7">Name - {{ $product->name }}</th>
                    </tr>
                    <tr>
                        <th class="col-7">Brand - {{ $product->brand->name }}</th>
                    </tr>
                    <tr>
                        <th class="col-7">Cateogry - {{ $product->category->name }}</th>
                    </tr>
                    <tr>
                        <th class="col-7">Stock - {{ $product->stock }}</th>
                    </tr>
                    <tr>
                        <th class="col-7">Price - {{ $product->price }} $</th>
                    </tr>
                    <tfoot>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning col-12">
                                    <i class="fa-solid fa-pen-to-square"></i>Edit Product
                                </a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection