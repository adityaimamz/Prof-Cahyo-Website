@extends('layouts/app')

@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">

            </div>
        </div>
    </div>
    </div>
    <!-- Navbar End -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{ Storage::url($article->gambar) }}" alt="">
                        <h1 class="mb-4">{{ $article->judul }}</h1>
                        <h5 class="my-3 text-secondary">
                            {{ \Carbon\Carbon::parse($article->created_at)->format('D, d M Y') }}</h5>
                        {!! $article->konten !!}
                    </div>
                    <!-- Blog Detail End -->
                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4">

                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent Post</h3>
                        </div>
                        @foreach ($articles as $item)
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="{{ Storage::url($item->gambar) }}"
                                    style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">
                                    {{ $item->judul }}
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Recent Post Start -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
@endsection
