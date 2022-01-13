@extends('layouts.default')

@section('content')
<section class="dashboard my-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <strong>Booking List</strong>
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Package Name</th>
                                    <th class="text-center">Order Schedule</th>
                                    <th class="text-center">Statuation</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
                                <tr class="align-middle">
                                    <td>{{ $checkout->User->name }}</td>
                                    <td>{{ $checkout->Package->title }}</td>
                                    <td class="text-center">
                                        {{ date('d M Y', strtotime($checkout->order_schedule)) }}
                                    </td>
                                    <td class="text-center">
                                        @if ($checkout->is_paid == 1)
                                        <span class="text-warning">On Progress</span>
                                        @elseif ($checkout->is_paid == 2)
                                        <span class="text-success">Finished</span>
                                        @else
                                        <span class="text-danger">Waiting</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($checkout->is_paid < 2) 
                                        <form id="updateCheckout{{ $checkout->id }}" action="{{ route('admin.checkout.update', $checkout->id) }}" method="post">
                                            @csrf
                                        </form>
                                            @if ($checkout->is_paid == 0)
                                            <button class="button btn-warning btn-sm" onclick="updateStatustoProgress({{ $checkout->id }})">Set to Progress</button>
                                            @elseif ($checkout->is_paid == 1)
                                            <button class="button btn-success btn-sm" onclick="updateStatustoFinished({{ $checkout->id }})">Set to Finished</button>
                                            @endif
                                        @endif
                                        <a href="#" class="btn btn-secondary">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Booking Register</td>
                                </tr>
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