@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card mt-3">
                    <div class="card-header">
                        Discounts
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-12 d-flex flex-row-reverse">
                                <a href="{{ route('admin.discount.create') }}" class="btn btn-primary btn-sm">Create</a>
                            </div>
                        </div>
                        @include('components.alert')
                        <table class="table my-4">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>Percentage</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($discounts as $discount)
                                    <tr>
                                        <td>{{ $discount->name }}</td>
                                        <td>
                                            <span class="badge bg-primary">{{ $discount->code }}</span>
                                        </td>
                                        <td>{{ $discount->description }}</td>
                                        <td>{{ $discount->percentage }}%</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.discount.edit', $discount->id) }}"
                                                class="btn btn-success sm">Edit</a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('admin.discount.destroy', $discount->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
