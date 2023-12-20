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
                        <div class="row">
                            <div class="col-md-6"style="align-self:end!important;">
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control" id="name" name="name" required value="{{$products->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="align-self:end!important;">
                                <div class="form-group">
                                    <label>Gambar Produk</label>
                                    <input type="file" class="form-control" id="image" name="image" value="{{$products->image}}">
                                </div>
                            </div>
                            <div class="col-md-6"style="align-self:end!important;">
                                <div class="form-group">
                                    <label>Deskripsi Produk</label>
                                    <input type="text" class="form-control" id="description" name="description" required value="{{$products->description}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="align-self:end!important;">
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" class="form-control" id="price" name="price" required value="{{$products->price}}">
                                </div>
                            </div>
                            <div class="col-md-6"style="align-self:end!important;">
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="number" class="form-control" id="stock" name="stock" required value="{{$products->stock}}">
                                </div>
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
                                    <a class="btn-inner--icon text-white"><i class="fa fa-save" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn-inner--text text-white ms-2">Simpan</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jquery')
@endsection
