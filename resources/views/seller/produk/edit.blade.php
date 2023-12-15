@extends('layouts.master')

@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
                <div class="card p-2">
                    <div class="px-3 pt-2 font-weight-bold">
                        <h5 class="font-weight-bolder">Data Murid: {{ $products->name }}</h5>
                        <hr style="background-color:#01353f;height:10px;border-radius:40px;width:25%">
                    </div>
                    @if (session('error'))
                        <div class="alert alert-danger m-2" style="color:white;font-weight:bold">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form class="p-3" method="POST" action="{{ route('produk.update', $products->_id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="namamurid">Nama Murid</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $products->name }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="namasekolah">Asal Sekolah</label>
                                        <input type="text" class="form-control" id="namasekolah" name="namasekolah"
                                            value="{{ $products->name }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <input type="text" class="form-control" id="gender" name="gender"
                                            value="{{ $products->name }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tanggallahir">Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="tanggallahir" name="tanggallahir"
                                            value="{{ $products->name }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kelas">Kelas </label>
                                        <input type="text" class="form-control" id="kelas" name="kelas"
                                            value="{{ $products->name }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fotomurid">Foto </label>
                                        <input type="text" class="form-control" id="fotomurid" name="fotomurid"
                                            value="{{ $products->name }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="idbidang">Bidang</label>
                                    <input type="text" class="form-control" id="idbidang" name="idbidang"
                                        value="{{ $products->name }}" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 pt-2">
                                    <button class="btn btn-icon btn-3 btn-secondary" type="button">
                                        <a href="/produk" class="btn-inner--icon text-white"><i class="fa fa-arrow-left"
                                                aria-hidden="true"></i>
                                        </a>
                                        <a href="/produk" class="btn-inner--text text-white ms-2">Kembali</a>
                                    </button>
                                    <button class="btn btn-icon btn-3 btn-success" type="submit">
                                        <a class="btn-inner--icon text-white"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>
                                        </a>
                                        <a class="btn-inner--text text-white ms-2">Update</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jquery')
@endsection
