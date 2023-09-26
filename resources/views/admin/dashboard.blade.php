@extends('layouts/admin')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="{{ asset('assets-admin/vendors/images/banner-img.png') }}" alt="" />
                    </div>
                    <div class="col-md-8">
                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                            Welcome back
                            <div class="weight-600 font-30 text-blue">{{ Auth::user()->name }}</div>
                        </h4>
                        <p class="font-18 max-width-600">
                            Silakan atur dan kelola hal-hal penting di sini.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">{{ \App\Models\article::all()->count() }}</div>
                                <div class="font-14 text-secondary weight-500">
                                    Jumlah Artikel
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon" data-color="#00eccf">
                                    <i class="icon-copy dw dw-file"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
