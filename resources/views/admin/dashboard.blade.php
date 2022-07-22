@extends('layouts.app')
@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            My Camps
                        </div>
                        <div class="card-body">
                            @include('components.alert')
                            <table class="table my-4">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Camp</th>
                                        <th>Price</th>
                                        <th>Registered Date</th>
                                        <th>Paid Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($checkouts as $checkout)
                                        <tr>
                                            <td>{{ $checkout->User->name }}</td>
                                            <td>{{ $checkout->Camp->title }}</td>
                                            <td>{{ $checkout->Camp->price }}K</td>
                                            <td>{{ $checkout->created_at->format('M d Y') }}</td>
                                            <td>
                                                @if ($checkout->is_paid)
                                                    <span class="badge bg-success">Paid</span>
                                                @else
                                                    <span class="badge bg-warning">Waiting</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (!$checkout->is_paid)
                                                    <form action="{{ route('admin.checkout.update', $checkout->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button class="btn btn-primary btn-sm py-2 px-3">Set As
                                                            Paid</button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
