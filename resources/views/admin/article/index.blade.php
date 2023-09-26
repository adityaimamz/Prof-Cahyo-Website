@extends('layouts/admin')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Data Artikel Website</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        DataTable
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <a href="{{ route('article.create') }}" class="btn btn-primary">Tambah Artikel</a>
                        </div>
                    </div>
                </div>
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                    </div>
                    <div class="pb-20">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus">#</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ Storage::url($d->gambar) }}" alt="" width="50px">
                                            {{-- {{ $d->gambar }} --}}
                                        </td>
                                        <td>{{ $d->judul }}</td>
                                        <td>{{ \Carbon\Carbon::parse($d->created_at)->format('D, d M Y') }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item" href="{{ route('article.show', $d->slug) }}"><i
                                                            class="dw dw-eye"></i>
                                                        View</a>
                                                    <a class="dropdown-item" href="{{ route('article.edit', $d->id) }}"><i
                                                            class="dw dw-edit2"></i>
                                                        Edit</a>
                                                    <form action="{{ route('article.destroy', $d->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="dropdown-item"><i
                                                                class="dw dw-delete-3"></i>
                                                            Delete</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
