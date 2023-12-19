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
                                    style="background:#ad7c35;color:white!important;text-align:center">Shipping Products</span>
                            </div>
                            <div class="row my-2">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="mx-1 my-2 px-2 py-1 text-uppercase text-xs font-weight-bold"
                                                style="color:black!important;text-align:center">Product Name</span>
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
                                                style="color:black!important;text-align:center">Customer Name</span>
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
                                                style="color:#587697!important;text-align:center;font-size:2rem">Shipping Products
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">No.</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Image</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Product</th>                                 
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Buyer</th>                                      
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Price
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Status
                                            </th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder">Payment Method</th>
                                            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $item)
                              
                                        <tr>
                                            <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                <div class="d-flex align-items-center">
                                                    <span class="ms-3 text-xs">
                                                        {{ $loop->iteration }} 
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-uppercase text-default text-xs font-weight-bolder text-center">
                                                <div class="d-flex align-items-center">
                                                    <span class="ms-3 text-xs">
                                                        <img src="uploads/produk/{{ $item->product->image }}" alt="" style="width: 200px; height: 200px; background-size: cover">
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-uppercase text-default text-xs font-weight-bolder text-center">
                                                <div class="d-flex align-items-center">
                                                    <span class="ms-3 text-xs">
                                                        {{ $item->product->name }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                <div class="d-flex align-items-center">
                                                    <span class="ms-3 text-xs">
                                                        {{-- {{ $item->product->user->name }} --}}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                <div class="d-flex align-items-center">
                                                    <span class="ms-3 text-xs">
                                                        {{ $item->product->price }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                <div class="d-flex align-items-center">
                                                    <span class="ms-3 text-xs">
                                                        {{ $item->product->price }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                <div class="d-flex align-items-center">
                                                    <span class="ms-3 text-xs">
                                                        {{ $item->product->price }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                <div class="d-flex align-items-center">
                                                    <span class="ms-3 text-xs">
                                                        <form class="p-3" method="POST"
                                                            action="{{ route('move-products-pengiriman', $item->_id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <button class="btn btn-info"
                                                                type="submit">Send</button>
                                                        </form>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                 
                                        @endforeach
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end pt-4">
                                        @if ($products->currentPage() > 1)
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $products->previousPageUrl() }}"
                                                    tabindex="-1">
                                                    <i class="fa fa-angle-left"></i>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:;" tabindex="-1">
                                                    <i class="fa fa-angle-left"></i>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                        @endif

                                        @for ($i = 1; $i <= $products->lastPage(); $i++)
                                            <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $products->url($i) }}"
                                                    style="{{ $i == $products->currentPage() ? 'color:white;background-color:#1B3C5F;border:none' : '' }}">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor

                                        @if ($products->currentPage() < $products->lastPage())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $products->nextPageUrl() }}">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>

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
