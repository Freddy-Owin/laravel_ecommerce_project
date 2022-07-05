@extends('layouts.master')

@section('content')
    <div class="content-header row justify-content-between">
        <div class="col-4">
            <h1>Add a New Brand</h1>
        </div>
        <div class="col-1">
            <a href="{{ route('brands.index') }}" class="btn btn-success">Back</a>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Create Form</div>
                    </div>
                    <form action="{{ route('brands.store') }}" method="POST">
                        {{ @csrf_field() }}
                        <div class="card-body">
                            <div class="form-group mt-3">
                                <label for="name">Brand Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection