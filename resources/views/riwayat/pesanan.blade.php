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
                                    style="background:#587697;color:white!important;text-align:center">Penjualan
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
                                                style="color:black!important;text-align:center">Nama Customer</span>
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
                                                style="color:#587697!important;text-align:center;font-size:2rem">Sales
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Id</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Name</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Pembeli</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Status
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Harga
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Action
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $item)
                                  
                                                <tr>
                                                    <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-3 text-xs">
                                                                {{ $item->_id }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-3 text-xs">
                                                                {{ $item->name }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-3 text-xs">
                                                                {{ $item->gambar }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-3 text-xs">
                                                                {{ $item->price }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-3 text-xs">
                                                                {{ $item->price }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-3 text-xs">
                                                                <form class="p-3" method="POST"
                                                                    action="{{ route('move-products-pesanan', $item->_id) }}"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    <button class="btn btn-info"
                                                                        type="submit">Kirim</button>
                                                                </form>
                                                            </span>
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
    </section>
@endsection

@section('jquery')
    <script></script>
@endsection
