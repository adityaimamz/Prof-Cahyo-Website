@extends('layouts/admin')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div>
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Edit Artikel</h4>
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
                            <h4 class="text-blue h4">Edit Data Artikel</h4>
                        </div>
                        <div class="pull-right">
                        </div>
                    </div>
                    <form action="{{ route('article.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="#title" class="form-label">Judul Artikel</label>
                            <input class="form-control" type="text"id="title" name="judul"
                                placeholder="Masukan Judul" value="{{ $data->judul }}" />
                        </div>
                        <div class="form-group">
                            <label for="#meta-judul" class="form-label">Meta Judul</label>
                            <input class="form-control" type="text" id="meta-judul" name="meta_judul"
                                placeholder="Masukan Meta Judul" value="{{ $data->meta_judul }}" />
                        </div>
                        <div class="form-group">
                            <label for="#meta-deskripsi" class="form-label">Meta Deskripsi</label>
                            <input class="form-control" type="text" id="meta-deskripsi" name="meta_deskripsi"
                                placeholder="Masukan Meta Deskripsi" value="{{ $data->meta_deskripsi }}" />
                        </div>
                        <div class="form-group">
                            <label for="#gambar" class="form-label">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input form-control" id="gambar" name="gambar"
                                    value="{{ $data->gambar }}" required/>
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="#content" class="form-label">Isi Konten</label>
                            <textarea class="form-control textarea_editor form-control border-radius-0" id="content" rows="3" name="konten">{{ $data->konten }}</textarea>
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
