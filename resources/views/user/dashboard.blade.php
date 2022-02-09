@extends('layouts.default') 

@section('content')
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class="col-lg-12 col-12 header-wrap mt-4">
                <p class="story">DASHBOARD</p>
                <h2 class="primary-header">Booking History</h2>
            </div>
        </div>
        <div class="row my-4 table-responsive">
            @include('components.alert')
            <table class="table text-nowrap">
                <thead>
                    <tr class="align-middle">
                        <th scope="col" colspan="2" class="text-center">Package Name</th>
                        <th scope="col" class="text-center">Order Schedule</th>
                        <th scope="col" class="text-center">Nominal Dp</th>
                        <th scope="col" class="text-center">Payment Status</th>
                        <th scope="col" class="text-center">Statuation</th>
                        <th scope="col" colspan="3" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($checkouts as $checkout )
                    <tr class="align-middle">
                        <td class="text-center">
                            <img src="{{ asset('img/full-service.png') }}" height="110" alt="" />
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>{{ $checkout->Package->title }}</strong>
                            </p>
                            <p>{{ $checkout->created_at->format('d F Y') }}</p>
                        </td>
                        <td class="text-center">
                            <span>{{ date('d M Y', strtotime($checkout->order_schedule)) }}</span>
                        </td>
                        <td class="text-center">
                            <span>Rp {{ $checkout->Package->price }}.000</span>
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
                                <a href="{{ $checkout->midtrans_url }}" class="btn btn-warning" style="width: 105px">Pay Here</a>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="https://wa.me/082272417131?text=Hi, saya ingin bertanya tentang paket {{ $checkout->Package->title }}">
                                <i class="fas fa-headset fa-2x text-primary"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            @if ($checkout->payment_status == 'paid')
                                <a href="{{ route('user.get.invoice', $checkout->midtrans_booking_code) }}" class="btn btn-secondary" style="width: 105px" target="_blank">
                                    Invoice <i class="fas fa-print"></i>
                                </a>
                            @elseif ($checkout->payment_status == 'waiting')
                                <a href="{{ route('checkout.edit', $checkout->midtrans_booking_code) }}" class="btn btn-secondary shadow m-1">
                                    <i class="fas fa-pen-square"></i>
                                </a>
                                <form id="cancelOrder{{ $checkout->id }}" class="d-inline" action="{{ route('checkout.delete', $checkout->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                </form>
                                <button class="btn btn-danger shadow m-1" onclick="cancelOrder({{ $checkout->id }})">
                                    <i class="fas fa-trash"></i>
                                </button>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-5 text-decoration-line-through"><b>No Order List</b></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection