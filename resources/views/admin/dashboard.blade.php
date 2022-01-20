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
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Package Name</th>
                                    <th class="text-center">Order Schedule</th>
                                    <th class="text-center">Paid Status</th>
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
                                        @if ($checkout->payment_status == 'waiting' || $checkout->payment_status == 'pending')
                                        <span class="badge rounded-pill bg-warning text-dark">{{ $checkout->payment_status }}</span>
                                        @elseif ($checkout->payment_status == 'paid')
                                        <span class="badge rounded-pill bg-success">{{ $checkout->payment_status }}</span>
                                        @elseif ($checkout->payment_status == 'failed')
                                        <span class="badge rounded-pill bg-danger">{{ $checkout->payment_status }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($checkout->status == 0)
                                        <span class="badge rounded-pill bg-danger">Waiting In Line</span>
                                        @elseif ($checkout->status == 1)
                                        <span class="badge rounded-pill bg-warning text-dark">On Progress</span>
                                        @elseif ($checkout->status == 2)
                                        <span class="badge rounded-pill bg-success">Finished</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($checkout->payment_status == 'paid')
                                            @if ($checkout->status < 2) 
                                                <form id="updateCheckout{{ $checkout->id }}" action="{{ route('admin.checkout.update', $checkout->id) }}" method="post">
                                                    @csrf
                                                </form>
                                                @if ($checkout->status == 0)
                                                <button class="button btn-warning btn-sm" onclick="updateStatustoProgress({{ $checkout->id }})">
                                                    Set to Progress
                                                </button>
                                                @elseif ($checkout->status == 1)
                                                <button class="button btn-success btn-sm" onclick="updateStatustoFinished({{ $checkout->id }})">
                                                    Set to Finished
                                                </button>
                                                @endif
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