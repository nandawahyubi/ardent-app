@extends('layouts.default')

@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class="col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">DASHBOARD</p>
                    <div class="bg-primary shadow"
                        style="max-width: 250px; padding: 7px 0 7px 10px; border-radius: 5px 55px 55px 5px;">
                        <h2 class="primary-header text-light m-0">Booking History</h2>
                    </div>
                </div>
            </div>
            <div class="row my-4 mx-0 table-responsive">
                @include('components.alert')
                <table class="table text-nowrap">
                    <thead>
                        <tr class="align-middle">
                            <th scope="col" class="text-center">Package Name</th>
                            <th scope="col" class="text-center">Order Schedule</th>
                            <th scope="col" class="text-center">Nominal Dp</th>
                            <th scope="col" class="text-center">Payment Status</th>
                            <th scope="col" class="text-center">Statuation</th>
                            <th scope="col" colspan="3" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($checkouts as $checkout)
                            <tr class="align-middle">
                                <td class="text-center py-4">
                                    {{-- <img src="{{ asset('img/full-service.png') }}" height="110" alt="" />
                                    </td>
                                    <td> --}}
                                    <p class="mb-1"><strong>{{ $checkout->Package->title }}</strong></p>
                                    <p class="mb-0">{{ $checkout->created_at->format('d F Y') }}</p>
                                </td>
                                <td class="text-center">
                                    <span>{{ date('d M Y', strtotime($checkout->order_schedule)) }}</span>
                                </td>
                                <td class="text-center">
                                    <span>Rp {{ $checkout->Package->price }}.000</span>
                                </td>
                                <td class="text-center">
                                    @if ($checkout->payment_status == 'waiting' || $checkout->payment_status == 'pending')
                                        <span
                                            class="badge rounded-pill bg-warning text-dark">{{ $checkout->payment_status }}
                                        </span>
                                    @elseif ($checkout->payment_status == 'paid')
                                        <span class="badge rounded-pill bg-success">{{ $checkout->payment_status }}</span>
                                    @elseif ($checkout->payment_status == 'failed')
                                        <span class="badge rounded-pill bg-danger">{{ $checkout->payment_status }}</span>
                                    @endif
                                </td>
                                @if ($checkout->payment_status == 'failed')
                                    <td class="text-center">
                                        <span class="badge rounded-pill bg-danger">{{ $checkout->payment_status }}</span>
                                    </td>
                                @else
                                    <td class="text-center">
                                        @if ($checkout->status == 0)
                                            <span class="badge rounded-pill bg-danger">waiting in line</span>
                                        @elseif ($checkout->status == 1)
                                            <span class="badge rounded-pill bg-warning text-dark">on progress</span>
                                        @elseif ($checkout->status == 2)
                                            <span class="badge rounded-pill bg-success">finished</span>
                                        @endif
                                    </td>
                                @endif
                                <td class="text-center">
                                    @if ($checkout->payment_status == 'waiting')
                                        <a href="{{ $checkout->midtrans_url }}" class="btn btn-warning shadow mx-1"
                                            style="width: 105px;">
                                            Pay Here
                                        </a>
                                    @endif
                                    <a href="https://wa.me/082272417131?text=Hi, saya ingin bertanya tentang paket {{ $checkout->Package->title }}"
                                        class="btn btn-primary shadow mx-1" title="contact support">
                                        <i class="fas fa-headset"></i>
                                    </a>
                                    @if ($checkout->payment_status == 'paid')
                                        <a href="{{ route('get.invoice', $checkout->midtrans_booking_code) }}"
                                            class="btn btn-secondary shadow mx-3" style="width: 105px;"
                                            title="print payment" target="_blank">
                                            Invoice <i class="fas fa-print"></i>
                                        </a>
                                        @if (!$checkout->file)
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning shadow mx-1" title="upload payment"
                                                data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop-{{ $checkout->midtrans_booking_code }}">
                                                <i class="fa-solid fa-arrow-up-from-bracket"></i>
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
                                                                Upload Payment
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <form
                                                            action="{{ route('update.file', $checkout->midtrans_booking_code) }}"
                                                            method="post" enctype="multipart/form-data" id="formFile">
                                                            @method('put')
                                                            @csrf
                                                            <div class="modal-body">
                                                                <p class="text-center text-primary">
                                                                    Unggah Bukti Pembayaran Anda !
                                                                </p>
                                                                <input type="file" name="file"
                                                                    class="form-control {{ $errors->has('file') ? 'is-invalid' : '' }}">
                                                                @if ($errors->has('file'))
                                                                    <p class="text-danger mb-0">
                                                                        {{ $errors->first('file') }}
                                                                    </p>
                                                                @endif
                                                                <p class="py-2 mb-0">
                                                                    <span class="text-danger">*</span> file type :
                                                                    png,
                                                                    jpg, jpeg (max 2MB)
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button type="submit" class="btn btn-primary">
                                                                    Upload
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif ($checkout->file)
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
                                    @elseif ($checkout->payment_status == 'waiting')
                                        <a href="{{ route('checkout.edit', $checkout->midtrans_booking_code) }}"
                                            class="btn btn-secondary shadow mx-1" title="change data">
                                            <i class="fas fa-pen-square"></i>
                                        </a>
                                        <form id="cancelOrder{{ $checkout->id }}" class="d-inline"
                                            action="{{ route('checkout.delete', $checkout->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                        </form>
                                        <button class="btn btn-danger shadow mx-1" title="cancle and remove"
                                            onclick="cancelOrder({{ $checkout->id }})">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5 text-decoration-line-through">
                                    <b>No Order List</b>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
