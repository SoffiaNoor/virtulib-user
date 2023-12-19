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
                                    style="background:#ad7c35;color:white!important;font-family: 'Poppins';text-align:center">Penjualan
                                    Saya</span>
                            </div>
                            <div class="row my-2">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="mx-1 my-2 px-2 py-1 text-uppercase text-xs font-weight-bold"
                                                style="color:black!important;font-family: 'Poppins';text-align:center">Nama
                                                Produk</span>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-text text-body"><i class="fas fa-search"
                                                        aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="searchInput"
                                                    placeholder="Type here..."
                                                    onkeyup="searchProduct('{{ route('penjualan.searchProduk') }}')">
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
                                                style="color:black!important;font-family: 'Poppins';text-align:center">Nama
                                                Customer</span>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-text text-body"><i class="fas fa-search"
                                                        aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="searchInput2"
                                                    placeholder="Type here..."
                                                    onkeyup="searchSales('{{ route('penjualan.searchCustomer') }}')">
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
                                                style="color:black!important;font-family: 'Poppins';text-align:center;font-size:2rem">Sales
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
                                            @if ($item->status === 0)
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
                                                                {{ $item->price }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-3 text-xs">
                                                                {{ $item->total_price }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="text-uppercase text-default text-xs font-weight-bolder">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-3 text-xs">
                                                                {{ $item->delivery }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <a href="{{ route('penjualan.detail', $item->_id) }}"
                                                            class="text-gray-400 hover:text-amber-400  mr-2">
                                                            <i class="fa fa-eye text-sm"></i>
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
                                                                        Apakah anda yakin menghapus Mata Pelajaran <span
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
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end pt-4">
                                        @if ($sales->currentPage() > 1)
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $sales->previousPageUrl() }}"
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

                                        @for ($i = 1; $i <= $sales->lastPage(); $i++)
                                            <li class="page-item {{ $i == $sales->currentPage() ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $sales->url($i) }}"
                                                    style="{{ $i == $sales->currentPage() ? 'color:white;background-color:#1B3C5F;border:none' : '' }}">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor

                                        @if ($sales->currentPage() < $sales->lastPage())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $sales->nextPageUrl() }}">
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
    </section>
@endsection

@section('jquery')
    <script>
        function searchProduct(route) {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementsByTagName("table")[0];
            tr = table.getElementsByTagName("tr");


            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Ganti dengan indeks kolom yang ingin Anda cari
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }

            fetch(`${route}?keyword=${filter}`)
                .then(response => response.json())
                .then(data => {
                    // Menghapus semua baris (kecuali baris header) dari tabel
                    const table = document.querySelector(".table"); // Sesuaikan dengan selector yang sesuai
                    const rowCount = table.rows.length;
                    for (let i = rowCount - 1; i > 0; i--) {
                        table.deleteRow(i);
                    }

                    // Mengisi tabel dengan data hasil pencarian yang baru
                    const tbody = table.querySelector("tbody");
                    data.forEach(item => {
                        const newRow = tbody.insertRow();
                        newRow.innerHTML = `
                <td>${item.customer}</td>
                <td>${item.productname}</td>
                <td>${item.totalpurchase}</td>
                <td>${item.price}</td>
                <td>${item.total_price}</td>
                <td>${item.delivery}</td>
                <!-- Tambahkan kolom aksi atau action jika diperlukan -->
            `;
                    });
                })
                .catch(error => console.error('Error:', error));


        }

        function searchSales(route) {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput2");
            filter = input.value.toUpperCase();
            table = document.getElementsByTagName("table")[0];
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                const customerName = tr[i].getElementsByTagName("td")[0]; // Kolom nama pelanggan
                if (customerName) {
                    const customerText = customerName.textContent || customerName.innerText;
                    if (customerText.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }

            fetch(`${route}?keyword=${filter}`)
                .then(response => response.json())
                .then(data => {
                    const table = document.querySelector(".table");
                    const tbody = table.querySelector("tbody");

                    // Menghapus semua baris (kecuali baris header) dari tabel
                    const rowCount = tbody.rows.length;
                    for (let i = rowCount - 1; i > 0; i--) {
                        tbody.deleteRow(i);
                    }

                    // Mengisi tabel dengan data hasil pencarian yang baru
                    data.forEach(item => {
                        const newRow = tbody.insertRow();
                        newRow.innerHTML = `
                    <td>${item.customer}</td>
                    <td>${item.productname}</td>
                    <td>${item.totalpurchase}</td>
                    <td>${item.price}</td>
                    <td>${item.total_price}</td>
                    <td>${item.delivery}</td>
                    <!-- Tambahkan kolom aksi atau action jika diperlukan -->
                `;
                    });
                })
                .catch(error => console.error('Error:', error));


        }
    </script>
@endsection
