@extends('layouts/master')
@section('content')
    <section class="w-full min-h-screen py-24 bg-#857f72" style="background-size: cover; background-color: #695c47">
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
                                    style="background:#ad7c35;color:white!important;font-family: 'Poppins';text-align:center">Produk
                                    Saya</span>
                            </div>
                            <div class="row my-2">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="mx-1 my-2 px-2 py-1 text-uppercase text-xs font-weight-bold"
                                                style="color:black!important;font-family: 'Poppins';text-align:center">Nama Produk</span>
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
                                                style="color:black!important;font-family: 'Poppins';text-align:center">Stok</span>
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
                                                style="color:black!important;font-family: 'Poppins';text-align:center;font-size:2rem">Produk
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

                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Gambar</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">
                                                Description</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Price
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Stock
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
                                                            {{ $item->name }}
                                                        </span>
                                                    </div>
                                                </td>

                                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                    <div class="d-flex align-items-center">
                                                        <span class="ms-3 text-xs">
                                                            <img src="uploads/produk/{{ $item->image }}" alt="" style="width: 200px; height: 200px; background-size: cover; object-fit:cover">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                    <div class="d-flex align-items-center">
                                                        <span class="ms-3 text-xs">
                                                            {{ $item->description }}
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
                                                            {{ $item->stock }}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <a href="{{ route('produk.show', $item->_id) }}"
                                                        class="text-gray-400 hover:text-amber-400  mr-2">
                                                        <i class="fa fa-eye text-sm"></i>
                                                    </a>
                                                    <a href="{{ route('produk.edit', $item->_id) }}"
                                                        class="text-gray-400 hover:text-amber-400 mx-2">
                                                        <i class="fas fa-edit text-sm"></i>
                                                    </a>
                                                    <a href="#" class="text-gray-400 hover:text-amber-400"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $item->_id }}">
                                                        <i class="fa fa-trash text-sm"></i>
                                                    </a>

                                                    <div class="modal fade" id="deleteModal{{ $item->_id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title font-weight-bolder"
                                                                        id="deleteModalLabel">
                                                                        Delete Confirmation
                                                                    </h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-sm">
                                                                    Apakah anda yakin menghapus Produk <span
                                                                        class="font-weight-bolder">{{ $item->name }}</span>?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Tidak</button>
                                                                    <form
                                                                        action="{{ route('produk.destroy', $item->_id) }}"
                                                                        method="POST" style="display: inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Hapus</button>
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
        </div>
    </section>
@endsection

@section('jquery')
    <script></script>
@endsection
