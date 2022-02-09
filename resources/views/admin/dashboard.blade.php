@extends('layouts.default')

@section('content')
<section class="dashboard my-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <strong>Booking List</strong>
                    </div>
                    <div class="card-body table-responsive">
                        @include('components.alert')
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Package Name</th>
                                    <th class="text-center">Order Schedule</th>
                                    <th class="text-center">Paid Status</th>
                                    <th class="text-center">Statuation</th>
                                    <th class="text-center" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
                                <tr class="align-middle">
                                    <td>
                                        <p class="mb-1">
                                            {{ $checkout->User->name }}
                                        </p>
                                        <p>
                                            {{ $checkout->midtrans_booking_code }}
                                        </p>
                                    </td>
                                    <td>{{ $checkout->Package->title }}</td>
                                    <td class="text-center">{{ date('d M Y', strtotime($checkout->order_schedule)) }}</td>
                                    <td class="text-center">
                                        @if ($checkout->payment_status == 'waiting' || $checkout->payment_status == 'pending')
                                            <span class="badge rounded-pill bg-warning text-dark shadow">{{ $checkout->payment_status }}</span>
                                        @elseif ($checkout->payment_status == 'paid')
                                            <span class="badge rounded-pill bg-success shadow">{{ $checkout->payment_status }}</span>
                                        @elseif ($checkout->payment_status == 'failed')
                                            <span class="badge rounded-pill bg-danger shadow">{{ $checkout->payment_status }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($checkout->status == 0)
                                            <span class="badge rounded-pill bg-danger shadow">Waiting In Line</span>
                                        @elseif ($checkout->status == 1)
                                            <span class="badge rounded-pill bg-warning text-dark shadow">On Progress</span>
                                        @elseif ($checkout->status == 2)
                                            <span class="badge rounded-pill bg-success shadow">Finished</span>
                                        @endif
                                    </td>
                                    <td class="text-center p-0">
                                        @if ($checkout->payment_status == 'paid')
                                            @if ($checkout->status < 2) 
                                                <form id="updateCheckout{{ $checkout->id }}" action="{{ route('admin.checkout.change', $checkout->id) }}" method="post">
                                                    @csrf
                                                </form>
                                                @if ($checkout->status == 0)
                                                    <button class="btn btn-warning btn-sm shadow" onclick="updateStatustoProgress({{ $checkout->id }})">
                                                        Set to Progress
                                                    </button>
                                                @elseif ($checkout->status == 1)
                                                    <button class="btn btn-success btn-sm shadow" onclick="updateStatustoFinished({{ $checkout->id }})">
                                                        Set to Finished
                                                    </button>
                                                @endif
                                            @endif
                                        @endif
                                    </td>
                                    <td class="text-center p-0">
                                        <a href="{{ route('admin.checkout.edit', $checkout->midtrans_booking_code) }}" class="btn btn-secondary shadow m-1">
                                            <i class="fas fa-pen-square"></i>
                                        </a>
                                    </td>
                                    <td class="text-center p-0">
                                        <form id="deleteCheckout{{ $checkout->id }}" action="{{ route('admin.checkout.delete', $checkout->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                        </form>
                                        <button class="btn btn-danger shadow m-1" onclick="deleteCheckout({{ $checkout->id }})">
                                            <i class="fas fa-trash"></i>
                                        </button>
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