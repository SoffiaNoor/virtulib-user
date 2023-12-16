@extends('layouts/master')
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
                <div class="card p-2">
                    <div class="px-3 pt-2 font-weight-bold">
                        <h5 class="font-weight-bolder">Tambah Produk:
                        </h5>
                        <hr style="background-color:#01353f;height:10px;border-radius:40px;width:25%">
                    </div>
                    @if (session('error'))
                        <div class="alert alert-danger m-2" style="color:white;font-weight:bold">
                            {{ session('error') }}
                        </div>
                    @endif
                    @foreach ($products as $item)
                        <form class="p-3" method="POST" action="{{ route('move-products', $item->_id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <button class="btn btn-danger" type="submit">Pindah bang</button>
                        </form>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection

@section('jquery')
@endsection
