@extends('layouts/app')

@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Artikel</h1>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar End -->

    <!-- Blog Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-12">
                    <div class="row g-5">
                        @foreach ($articles as $article)
                            <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ Storage::url($article->gambar) }}" alt="">
                                        {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                            href="">{{ $article->judul }}</a> --}}
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex mb-3">
                                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>Dr. Cahyo
                                                Budi Utomo, M.Pd</small>
                                            <small><i
                                                    class="far fa-calendar-alt text-primary me-2"></i>{{ \Carbon\Carbon::parse($article->created_at)->format('D, d M Y') }}</small>
                                        </div>
                                        <h4 class="mb-3">{{ $article->judul }}</h4>
                                        <p> {{ substr($article->meta_deskripsi, 0, 120) }}{{ strlen($article->meta_deskripsi) > 120 ? '...' : '' }}
                                        </p>
                                        <a class="text-uppercase" href="/detail/{{ $article->slug }}">Read More <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg m-0">
                                    <!-- Tombol Previous -->
                                    <li class="page-item {{ $articles->currentPage() == 1 ? 'disabled' : '' }}">
                                        <a class="page-link rounded-0" href="{{ $articles->previousPageUrl() }}"
                                            aria-label="Previous">
                                            <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                        </a>
                                    </li>

                                    <!-- Menampilkan nomor halaman -->
                                    @for ($i = 1; $i <= $articles->lastPage(); $i++)
                                        <li class="page-item {{ $articles->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $articles->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    <!-- Tombol Next -->
                                    <li
                                        class="page-item {{ $articles->currentPage() == $articles->lastPage() ? 'disabled' : '' }}">
                                        <a class="page-link rounded-0" href="{{ $articles->nextPageUrl() }}"
                                            aria-label="Next">
                                            <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Blog list End -->

                <!-- Sidebar Start -->
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
