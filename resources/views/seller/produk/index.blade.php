@extends('layouts/master')
@section('content')
    <section class="w-full min-h-screen py-24 " style="background-size: cover;">
        <div class=container>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-2 mt-2">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <a href="javascript:;" class="d-block">
                                {{-- <img src="./assets/img/kit/pro/anastasia.jpg" class="img-fluid border-radius-lg"> --}}
                            </a>
                        </div>

                        <div class="card-body pt-2">
                            <div class="row">
                                <span class="mx-1 my-2 px-2 py-1 text-uppercase text-xs font-weight-bold"
                                    style="background:#587697;color:white!important;text-align:center">Produk
                                    Saya</span>
                            </div>
                            <div class="row my-2">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="mx-1 my-2 px-2 py-1 text-uppercase text-xs font-weight-bold"
                                                style="color:black!important;text-align:center">Nama Produk</span>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-text text-body"><i class="fas fa-search"
                                                        aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="searchInput"
                                                    placeholder="Type here...">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="mx-1 my-2 px-2 py-1 text-uppercase text-xs font-weight-bold"
                                                style="color:black!important;text-align:center">Variasi produk</span>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-text text-body"><i class="fas fa-search"
                                                        aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="searchInput"
                                                    placeholder="Type here...">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="mx-1 my-2 px-2 py-1 text-uppercase text-xs font-weight-bold"
                                                style="color:black!important;text-align:center">Stok</span>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                {{-- <span class="input-group-text text-body"><i class="fas fa-search"
                                                        aria-hidden="true"></i></span> --}}
                                                <span class="input-group-text text-body"></span>
                                                <input type="text" class="form-control" id="searchInput"
                                                    placeholder="Min stok...">
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <span class="mx-1 my-2 px-2 py-1 text-uppercase text-xs font-weight-bold"
                                                style="color:black!important;text-align:center">-</span>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <span class="input-group-text text-body"></span>
                                                <input type="text" class="form-control" id="searchInput"
                                                    placeholder="Max stok...">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-2 mt-2">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <a href="javascript:;" class="d-block">
                                {{-- <img src="./assets/img/kit/pro/anastasia.jpg" class="img-fluid border-radius-lg"> --}}
                            </a>
                        </div>

                        <div class="card-body pt-2">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="mx-1 my-2 px-2 py-1 text-uppercase font-weight-bold"
                                                style="color:#587697!important;text-align:center;font-size:2rem">Produk
                                                Saya</span>
                                        </div>
                                        <div class="col-sm-6">
                                            <a class="btn btn-warning" href="{{ route('produk.create') }}"
                                                style="float:right;">
                                                <span>Tambah Produk</span>
                                                <i class="fa fa-plus ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Nama Produk
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Kode Variasi
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Variasi</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Harga
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Stok
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">
                                                Penjualan
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Action
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('jquery')
    <script></script>
@endsection
