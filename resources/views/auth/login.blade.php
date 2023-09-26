@extends('layouts/login')

@section('content')
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="/">
                    <h2 class="text-primary">CBU Sites</h2>
                </a>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ asset('assets-admin/vendors/images/login-page-img.png') }}" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        {{-- error login  --}}
                        @if (Session::has('login'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ Session::get('login') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login Admin</h2>
                        </div>
                        <form action="{{ route('login.store') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <label for="yourUsername" class="form-label">Email</label>
                            <div class="input-group custom">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <label for="yourPassword" class="form-label">Password</label>
                            <div class="input-group custom">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="**********" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
