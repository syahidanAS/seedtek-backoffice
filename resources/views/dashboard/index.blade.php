@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container text-center" style="margin-top: 7%; margin-bottom:2%;">
        <img src="{{ asset('images/logo-seedtek.png') }}" alt="" style="width: 300px;">
        <h3 class="mt-2">APLIKASI PENGENDALIAN PIUTANG</h3>
        
    </div>
</div>
<div class="col-xl-3 col-lg-6" style="margin-left: 10%">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Piutang</div>
                                <div class="stat-digit"><p>@currency($totalPiutang)</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Realisasi Piutang</div>
                                <div class="stat-digit"><p>@currency($totalPembayaran )</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Sisa Piutang</div>
                                <div class="stat-digit"><p>@currency($sisaPiutang)</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
