@extends('layouts/admin')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div>
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Detail Artikel</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Form Basic
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                                <a href="{{ route('article.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="container pd-0">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    <div class="blog-img">
                                        <img src="{{ Storage::url($data->gambar) }}" alt="" />
                                    </div>
                                    <div class="blog-caption">
                                        <h1 class="mb-10 mx-auto text">
                                            {{ $data->judul }}
                                        </h1>
                                        <h5 class="text-secondary my-4">
                                            {{ \Carbon\Carbon::parse($data->created_at)->format('D, d M Y') }}</h5>
                                        {!! $data->konten !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
