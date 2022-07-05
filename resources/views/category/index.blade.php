@extends('layouts.master')

@section('content')
    <div class="content-header">
        <h1>Categories</h1>
    </div>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>
                                <a href="{{ route('categories.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus p-2"></i>Add New Category
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $value)
                        <tr>
                            <th>{{ $value->id }}</th>
                            <th>{{ $value->name }}</th>
                            <th>
                                <form action="{{ route('categories.destroy', $value->id) }}" method="POST">
                                    {{ @method_field("DELETE") }}
                                    {{ @csrf_field() }}
                                    <a href="{{ route('categories.show', $value->id) }}" class="btn btn-success">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('categories.edit', $value->id) }}" class="btn btn-warning">
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
                        {{ $category->links() }}
                    </tfoot>
                </table>
            </div>
        </div>
        
    </div>
@endsection

