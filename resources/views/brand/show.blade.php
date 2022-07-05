@extends('layouts.master')

@section('content')
    <div class="content-header row justify-content-between">
        <div class="content-title col-3">
            <h1>{{ $brand->name }}</h1>
        </div>
        <div class="back col-2">
            <a href="{{ route('brands.index') }}" class="btn btn-success">
                <i class="fa-solid fa-circle-left p-2"></i>Back
            </a>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-bordered table-dark">
                    <thead>
                        <th class="col-1">Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th class="col-4">
                            <a href="{{ route('products.create') }}" class="btn btn-info">
                                <i class="fas fa-plus"></i>Add a New Product
                            </a>
                        </th>
                    </thead>
                    <tbody>
                        @foreach ($product as $item)
                            @if ($item->brand->id == $brand->id)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/products') }}/{{ $item->image }}" alt="Product Image" width="30px" height="30px">    
                                </td>    
                                <td>{{ $item->name }}</th>
                                <td>{{ $item->price }} $</td>
                                <td>
                                    <form action="{{ route('products.destroy',$item->id) }}" method="POST">
                                        {{ @method_field("DELETE") }}
                                        {{ @csrf_field() }}
                                        <a href="{{ route('products.show', $item->id) }}" class="btn btn-success">
                                            <i class="fas fa-eye"></i>View Detail
                                        </a>
                                        <button class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>  
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection