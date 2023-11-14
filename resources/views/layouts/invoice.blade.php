@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Invoice
                <strong>01/01/01/2018</strong>
                <span class="float-right"> <strong>Status:</strong> Success</span>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Angkasa Data</strong>
                        </div>
                        <div>Phone: +48 444 666 3333</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>Client / Customer</strong>
                        </div>
                        <div>Username: user@angkasadata</div>
                    </div>

                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>
                                <th>Description</th>

                                <th class="text-right">Unit Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center">1</td>
                                <td class="left strong">Internet</td>
                                <td class="left">Langganan internet bulanan</td>

                                <td class="text-right">Rp. 200.000</td>
                            </tr>
                            <tr>
                                <td class="center">2</td>
                                <td class="left">Alat</td>
                                <td class="left">Sewa alat (Router / Access Point)</td>

                                <td class="text-right">Rp. 10.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5"></div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="text-left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="text-right">
                                        <strong>Rp. 210.000</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
