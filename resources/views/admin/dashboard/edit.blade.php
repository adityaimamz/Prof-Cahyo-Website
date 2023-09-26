@extends('layouts/admin')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div>
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>TEdit Data Dashboard</h4>
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
            <!-- Default Basic Forms Start -->


            <!-- horizontal Basic Forms Start -->
            <div class="pd-20 card-box mb-20">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Edit Data</h4>
                    </div>
                    <div class="pull-right">
                    </div>
                </div>
                <form action="{{ route('dashboard.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="herosubtitle" class="form-label">Subtitle Hero</label>
                        <input class="form-control" type="text" id="herosubtitle" name="herosubtitle"
                            placeholder="Masukkan Subtitle Hero" value="{{ $data->herosubtitle }}" />
                    </div>

                    <div class="form-group">
                        <label for="herotitle" class="form-label">Judul Hero</label>
                        <input class="form-control" type="text" id="herotitle" name="herotitle"
                            placeholder="Masukkan Judul Hero" value="{{ $data->herotitle }}" />
                    </div>

                    <div class="form-group">
                        <label for="heroimage" class="form-label">Gambar Hero</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input form-control" id="heroimage" name="heroimage"
                                required />
                            <label class="custom-file-label">Pilih file</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="abouttitle" class="form-label">Judul About</label>
                        <input class="form-control" type="text" id="abouttitle" name="abouttitle"
                            placeholder="Masukkan Judul About" value="{{ $data->abouttitle }}" />
                    </div>

                    <div class="form-group">
                        <label for="abouttext" class="form-label">Teks About</label>
                        <input class="form-control" type="text" id="abouttext" name="abouttext"
                            placeholder="Masukkan Teks About" value="{{ $data->abouttext }}" />
                    </div>

                    <div class="form-group">
                        <label for="aboutimage" class="form-label">Gambar About</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input form-control" id="aboutimage" name="aboutimage"
                                required />
                            <label class="custom-file-label">Pilih file</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contacttitle" class="form-label">Judul Kontak</label>
                        <input class="form-control" type="text" id="contacttitle" name="contacttitle"
                            placeholder="Masukkan Judul Kontak" value="{{ $data->contacttitle }}" />
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email Kontak</label>
                        <input class="form-control" type="email" id="email" name="email"
                            placeholder="Masukkan Email Kontak" value="{{ $data->email }}" />
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Nomor Telepon Kontak</label>
                        <input class="form-control" type="text" id="phone" name="phone"
                            placeholder="Masukkan Nomor Telepon Kontak" value="{{ $data->phone }}" />
                    </div>

                    <div class="form-group">
                        <label for="address" class="form-label">Alamat Kontak</label>
                        <input class="form-control" type="text" id="address" name="address"
                            placeholder="Masukkan Alamat Kontak" value="{{ $data->address }}" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" style="width: 100%" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- horizontal Basic Forms End -->
    </div>
    </div>
    </div>
@endsection
