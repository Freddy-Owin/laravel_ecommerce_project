@extends('layouts.master')

@section('content')
    <div class="content-header row justify-content-between">
        <div class="col-4">
            <h1>EditCategory</h1>
        </div>
        <div class="col-1">
            <a href="{{ route('categories.index') }}" class="btn btn-success">Back</a>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Form</div>
                    </div>
                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        {{ @method_field("PATCH") }}
                        {{ @csrf_field() }}
                        <div class="card-body">
                            <div class="form-group mt-3">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection