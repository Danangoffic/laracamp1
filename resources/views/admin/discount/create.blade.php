@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card mt-3">
                    <div class="card-header">
                        Insert a new Discount
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.discount.store') }}" method="post">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="name" class="form-label">Discount Name</label>
                                <input type="text" name="name"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" required
                                    value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="code" class="form-label">Discount Code</label>
                                <input type="text" name="code"
                                    class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" required
                                    value="{{ old('code') }}">
                                @if ($errors->has('code'))
                                    <p class="text-danger">{{ $errors->first('code') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="description" class="form-label">Discount Description</label>
                                <textarea name="description" id="" cols="0" rows="2"
                                    class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="percentage" class="form-label">Discount Percentage</label>
                                <input type="number" min="0" max="100" name="percentage"
                                    class="form-control {{ $errors->has('percentage') ? 'is-invalid' : '' }}" required
                                    value="{{ old('percentage') }}">
                                @if ($errors->has('percentage'))
                                    <p class="text-danger">{{ $errors->first('percentage') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
