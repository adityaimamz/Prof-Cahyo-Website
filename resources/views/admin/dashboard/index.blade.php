@extends('layouts/admin')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Data Dashboard Website</h4>
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
                                    <th class="datatable-nosort">Hero Title</th>
                                    <th class="datatable-nosort">Hero Subtitle</th>
                                    <th class="datatable-nosort">Hero Image</th>
                                    <th class="datatable-nosort">About Title</th>
                                    <th class="datatable-nosort">About Content</th>
                                    <th class="datatable-nosort">About Image</th>
                                    <th class="datatable-nosort">Contact Title</th>
                                    <th class="datatable-nosort">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $d->herosubtitle }}</td>
                                        <td>{{ $d->herotitle }}</td>
                                                                                <td>
                                            <img src="{{ Storage::url($d->heroimage) }}" alt="" width="50px">
                                        </td>
                                        <td>{{ $d->abouttitle }}</td>
                                        <td>{{ $d->abouttext }}</td>
                                                                              <td>
                                            <img src="{{ Storage::url($d->aboutimage) }}" alt="" width="50px">
                                        </td>
                                        <td>{{ $d->contacttitle }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item" href="{{ route('dashboard.edit', $d->id) }}"><i
                                                            class="dw dw-edit2"></i>
                                                        Edit</a>
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
