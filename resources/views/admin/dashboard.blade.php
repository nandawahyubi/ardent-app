@extends('layouts.default')

@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header py-3 px-0">
                            <div class="bg-primary shadow"
                                style="max-width: 200px; padding: 7px 0 7px 10px; border-radius: 5px 55px 55px 5px;">
                                <h2 class="primary-header text-light m-0">Booking List</h2>
                            </div>
                        </div>
                        <div class="card-body px-2 table-responsive">
                            @include('components.alert')
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Package Name</th>
                                        <th class="text-center">Order Schedule</th>
                                        <th class="text-center">Paid Status</th>
                                        <th class="text-center">Statuation</th>
                                        <th class="text-center" colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($checkouts as $checkout)
                                        <tr class="align-middle">
                                            <td>
                                                <p class="mb-0">
                                                    {{ $checkout->User->name }}
                                                </p>
                                                <p class="mb-0">
                                                    {{ $checkout->midtrans_booking_code }}
                                                </p>
                                            </td>
                                            <td>
                                                {{ $checkout->Package->title }}
                                            </td>
                                            <td class="text-center">
                                                {{ date('d M Y', strtotime($checkout->order_schedule)) }}
                                            </td>
                                            <td class="text-center">
                                                @if ($checkout->payment_status == 'waiting' || $checkout->payment_status == 'pending')
                                                    <span
                                                        class="badge rounded-pill bg-warning text-dark shadow">{{ $checkout->payment_status }}</span>
                                                @elseif ($checkout->payment_status == 'paid')
                                                    <span
                                                        class="badge rounded-pill bg-success shadow">{{ $checkout->payment_status }}</span>
                                                @elseif ($checkout->payment_status == 'failed')
                                                    <span
                                                        class="badge rounded-pill bg-danger shadow">{{ $checkout->payment_status }}</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if ($checkout->status == 0)
                                                    <span class="badge rounded-pill bg-danger shadow">Waiting In Line</span>
                                                @elseif ($checkout->status == 1)
                                                    <span class="badge rounded-pill bg-warning text-dark shadow">On
                                                        Progress</span>
                                                @elseif ($checkout->status == 2)
                                                    <span class="badge rounded-pill bg-success shadow">Finished</span>
                                                @endif
                                            </td>
                                            <td class="text-center p-0">
                                                @if ($checkout->payment_status == 'paid')
                                                    <a href="{{ route('get.invoice', $checkout->midtrans_booking_code) }}"
                                                        class="btn btn-secondary shadow mx-1" title="print payment"
                                                        target="_blank">
                                                        <i class="fas fa-print"></i>
                                                    </a>
                                                    @if ($checkout->file)
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-success shadow mx-1"
                                                            title="see proof of payment" data-bs-toggle="modal"
                                                            data-bs-target="#staticBackdrop-{{ $checkout->midtrans_booking_code }}">
                                                            <i class="fa-regular fa-eye"></i>
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade"
                                                            id="staticBackdrop-{{ $checkout->midtrans_booking_code }}"
                                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="staticBackdropLabel">
                                                                            Proof of Payment
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="{{ asset('storage/' . $checkout->file) }}"
                                                                            alt="Proof of Payment" style="width: 300px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if ($checkout->status < 2)
                                                        <form id="updateCheckout{{ $checkout->id }}"
                                                            action="{{ route('admin.checkout.change', $checkout->id) }}"
                                                            class="d-inline" method="post">
                                                            @csrf
                                                        </form>
                                                        @if ($checkout->status == 0)
                                                            <button class="btn btn-warning btn-sm shadow mx-1"
                                                                onclick="updateStatustoProgress({{ $checkout->id }})">
                                                                Set to Progress
                                                            </button>
                                                        @elseif ($checkout->status == 1)
                                                            <button class="btn btn-success btn-sm shadow mx-1"
                                                                onclick="updateStatustoFinished({{ $checkout->id }})">
                                                                Set to Finished
                                                            </button>
                                                        @endif
                                                    @endif
                                                @endif
                                                <a href="{{ route('admin.checkout.edit', $checkout->midtrans_booking_code) }}"
                                                    class="btn btn-secondary shadow mx-1" title="change data">
                                                    <i class="fas fa-pen-square"></i>
                                                </a>
                                                <form id="deleteCheckout{{ $checkout->id }}"
                                                    action="{{ route('admin.checkout.delete', $checkout->id) }}"
                                                    class="d-inline" method="post">
                                                    @method('delete')
                                                    @csrf
                                                </form>
                                                <button class="btn btn-danger shadow mx-1" title="cancle and remove"
                                                    onclick="deleteCheckout({{ $checkout->id }})">
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
            <div class="d-flex justify-content-end">
                {{ $checkouts->links() }}
            </div>
        </div>
    </section>
@endsection
