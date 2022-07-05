@extends('layouts.master')

@section('content')
    <div class="content-header">
        <h1>Brands</h1>
    </div>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Brand ID</th>
                            <th>Brand Name</th>
                            <th>
                                <a href="{{ route('brands.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus p-2"></i>Add New Brand
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brand as $value)
                        <tr>
                            <th>{{ $value->id }}</th>
                            <th>{{ $value->name }}</th>
                            <th>
                                <form action="{{ route('brands.destroy', $value->id) }}" method="POST">
                                    {{ @method_field("DELETE") }}
                                    {{ @csrf_field() }}
                                    <a href="{{ route('brands.show', $value->id) }}" class="btn btn-success">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('brands.edit', $value->id) }}" class="btn btn-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <button class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        {{ $brand->links() }}
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection