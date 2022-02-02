<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
        <link rel="shortcut icon" href="{{ asset('img/laravel.png') }}" />
        <title>Invoice | Ardent Auto Detailing</title>
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap");
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body {
                font-family: "Poppins", sans-serif;
                font-size: 12px;
                background-color: silver;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .invoice {
                max-width: 20cm;
                margin: auto;
                padding: 3%;
                background-color: whitesmoke;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <section class="invoice">
            <div class="container px-3">
                @foreach ($checkouts as $checkout)
                <div class="row m-0 pb-3 border-bottom border-dark">
                    <div class="col-7 p-0">
                        <img
                            src="{{ asset('img/logo-navbar.png') }}"
                            class="mb-2"
                            height="60"
                            alt="logo ardent"
                        />
                        <h4 class="mb-0 text-uppercase">{{ $checkout->midtrans_booking_code }}</h4>
                        <p class="mt-1 mb-0">
                            Package :
                            <strong>
                                {{ $checkout->Package->title }} By Crystal Shield
                            </strong>
                        </p>
                    </div>
                    <div class="col-5 p-0 text-end">
                        <p class="mb-0">Issued: {{ $checkout->updated_at->format('d-m-Y H:i') }}</p>
                        <p>Status: <span class="badge rounded-pill bg-success"><strong>SUCCESS</strong></span></p>
                    </div>
                </div>
                <div class="row m-0 py-3">
                    <div class="col p-0">
                        <p class="mb-0 text-blue">Bill From:</p>
                        <p class="mb-0">
                            <strong>Ardent Auto Detailing</strong>
                        </p>
                        <p class="mb-0">Jl. Boulevard Timur No.88G, Medan</p>
                        <p class="mb-0">(+62) 8123456789</p>
                        <p class="mb-0">ardentautodetailing.com</p>
                    </div>
                    <div class="col p-0 text-end">
                        <p class="mb-0 text-blue">Bill To:</p>
                        <p class="mb-0">
                            <strong>{{ $checkout->User->name }}</strong>
                        </p>
                        <p class="mb-0">{{ $checkout->User->email }}</p>
                        <p class="mb-0">{{ $checkout->User->no_telp }}</p>
                        <p class="mb-0">Customer</p>
                    </div>
                </div>
                <div class="row m-0 pb-2">
                    <div class="col p-0">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead class="table-secondary">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nama Paket</th>
                                        <th>Dp</th>
                                        <th class="text-center">Qty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center" width="7%">
                                            1
                                        </th>
                                        <td width="63%">
                                            {{ $checkout->Package->title }} By
                                            Crystal Shield
                                        </td>
                                        <td width="20%">IDR {{ $checkout->Package->price }}.000</td>
                                        <td class="text-center" width="10%">
                                            1
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row m-0 pb-0">
                    <div class="col p-0">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead class="table-secondary">
                                    <tr>
                                        <th class="text-center" width="7%">
                                            #
                                        </th>
                                        <th width="25%">Merk</th>
                                        <th width="18%">Color</th>
                                        <th width="10%">Year</th>
                                        <th width="15%">Plat BK</th>
                                        <th width="25%">Order Schedule</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center" width="7%">
                                            1
                                        </th>
                                        <td>{{ $checkout->vehicle_brand }}</td>
                                        <td class="text-capitalize">{{ $checkout->vehicle_color }}</td>
                                        <td>{{ $checkout->production_year }}</td>
                                        <td class="text-uppercase">{{ $checkout->number_plate }}</td>
                                        <td>{{ $checkout->order_schedule }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col text-center">
                        <p class="mb-0" style="max-width: 100%">
                            Terima kasih telah percaya kepada jasa kami
                        </p>
                        <p class="mb-0" style="max-width: 100%">
                            Ardent Auto Detailing
                        </p>
                    </div>
                    <p class="m-0 text-center">
                        <a
                            href="javascript:window.print();"
                            class="btn btn-warning text-light rounded-pill mt-2"
                            >Print Invoice
                        </a>
                    </p>
                </div>
                @endforeach
            </div>
        </section>

        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
