@extends('layouts/master')
@section('content')
    <section class="w-full min-h-screen py-24 "
        style="background-size: cover;">
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
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-default text-xs font-weight-bolder">Username Customer</th>
                                        <th class="text-uppercase text-default text-xs font-weight-bolder">Kode produk</th>
                                        <th class="text-uppercase text-default text-xs font-weight-bolder">Jumlah Pembelian</th>
                                        <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Harga</th>
                                        <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Total Belanja</th>
                                        <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Pengiriman</th>
                                        <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
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
