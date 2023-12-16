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
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Customer</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Product Name
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Total
                                                Purchase</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Price
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Total
                                                Price</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Delivery
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Action
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sales as $item)
                                            <tr>
                                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                    <div class="d-flex align-items-center">
                                                        <span class="ms-3 text-xs">
                                                            {{ $item->customer }}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                    <div class="d-flex align-items-center">
                                                        <span class="ms-3 text-xs">
                                                            {{ $item->productname }}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                    <div class="d-flex align-items-center">
                                                        <span class="ms-3 text-xs">
                                                            {{ $item->totalpurchase }}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                    <div class="d-flex align-items-center">
                                                        <span class="ms-3 text-xs">
                                                            {{ $item->price}}          
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                    <div class="d-flex align-items-center">
                                                        <span class="ms-3 text-xs">
                                                            {{ $item->total_price}}          
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                    <div class="d-flex align-items-center">
                                                        <span class="ms-3 text-xs">
                                                            {{ $item->delivery}}          
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <a href="{{ route('penjualan.detail', $item->_id) }}"
                                                    class="text-gray-400 hover:text-amber-400  mr-2">
                                                    <i class="fa fa-eye text-sm"></i>
                                                </a>                                                
                                                <a href="#" class="text-gray-400 hover:text-amber-400" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{$item->_id}}">
                                                    <i class="fa fa-trash text-sm"></i>
                                                </a>
            
                                                <div class="modal fade" id="deleteModal{{$item->_id}}" tabindex="-1"
                                                    role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title font-weight-bolder" id="deleteModalLabel">
                                                                    Delete Confirmation
                                                                </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-sm">
                                                                Apakah anda yakin menghapus Mata Pelajaran <span
                                                                    class="font-weight-bolder">{{$item->name}}</span>?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Tidak</button>
                                                                <form action="{{ route('produk.destroy', $item->_id) }}"
                                                                    method="POST" style="display: inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
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
    </section>
@endsection

@section('jquery')
    <script></script>
@endsection
