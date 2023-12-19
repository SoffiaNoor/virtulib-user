@extends('layouts/buyer')
@section('content')
<section class="text-center p-10 w-full bg-[#fffbeb] rounded-2xl drop-shadow-md">
    <div class="grid grid-cols-2 gap-10">
        <div class="relative pb-48 overflow-hidden rounded-2xl">
            @if (isset($products->image) && !empty($products->image))
            <img class="absolute inset-0 h-full w-full object-cover rounded-xl"
                src="http://127.0.0.1:8000/uploads/produk/{{$products->image}}" alt="">
            @else
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('assets/img/none.png') }}"
                alt="No Picture">
            @endif
        </div>
        <div class="text-left">
            <div class="font-bold text-3xl my-5">
                {{ $products->name }}
            </div>
            <div class="grid grid-cols-4 my-3">
                <div class="flex items-center text-sm text-gray-600">
                    @php
                    $rating = $products->rating;
                    $roundedRating = round($rating);
                    @endphp

                    @for ($i = 1; $i <= 5; $i++) <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 fill-current @if ($i <= $roundedRating) text-yellow-500 @else text-gray-400 @endif">
                        <path
                            d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                        </path>
                        </svg>
                        @endfor

                </div>
                <div>1000 Penilaian</div>
                <div>Jakarta Pusat</div>
                <div>615 Terjual</div>
            </div>
            <div class="grid grid-cols-4 my-3">
                <div>Pengiriman: </div>
                <div
                    class="py-1 px-2 mx-1 text-center rounded-full font-bold text-white bg-gradient-to-r from-[#8EACCD] to-[#4f79a7] shadow-lg">
                    JNE</div>
                <div
                    class="py-1 px-2 mx-1 text-center rounded-full font-bold text-white bg-gradient-to-r from-[#8EACCD] to-[#4f79a7] shadow-lg">
                    Gojek</div>
                <div
                    class="py-1 px-2 mx-1 text-center rounded-full font-bold text-white bg-gradient-to-r from-[#8EACCD] to-[#4f79a7] shadow-lg">
                    Si Cepat</div>
            </div>
            <div>Deskripsi Produk: </div>
            <div>{{$products->description}}</div>

            <div class="flex flex-cols-2 my-3 gap-4">
                <div>
                    <form method="POST" action="{{ route('buy.now', ['id' => $products->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <button
                            class="btn text-white bg-gradient-to-r from-[#ca8a04] to-[#a16207] rounded-full hover:bg-gradient-to-r hover:from-[#d97706] hover:to-[#f59e0b] duration-700 hover:shadow-2xl  transition-all ease-in-out">Beli
                            Sekarang!</button>
                    </form>
                </div>
                <div>
                    <form method="POST" action="{{ route('buytoCart', ['id' => $products->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <button
                            class="btn text-white bg-gradient-to-r from-[#ca8a04] to-[#a16207] rounded-full hover:bg-gradient-to-r hover:from-[#d97706] hover:to-[#f59e0b] duration-700 hover:shadow-2xl  transition-all ease-in-out"
                            onclick="my_modal_4.showModal()">Masukkan Keranjang</button>
                    </form>
                    <dialog id="my_modal_4" class="modal modal-bottom sm:modal-middle">
                        <div class="modal-box">
                            <h3 class="font-bold text-lg">Produk telah ditambahkan di keranjang belanja</h3>
                            <div class="modal-action">
                                <form method="dialog">
                                    <button class="btn">Close</button>
                                </form>
                            </div>
                        </div>
                    </dialog>
                </div>
            </div>
        </div>
</section>

<section class="text-center p-10 mt-10 w-full bg-[#fffbeb] rounded-2xl drop-shadow-md">
    <div class="text-center">
        <div class="font-bold text-3xl my-5">{{$products->seller->name}} Mart</div>
    </div>
    <div class="grid grid-cols-5">
        @foreach($products_recommendation as $pr)
        <div class="w-full sm:w-1/2 md:w-1/2 xl:w-full p-2">
            <a href="{{ route('detail', $pr->id) }}"
                class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                <div class="relative pb-48 overflow-hidden">
                    @if (isset($pr->image) && !empty($pr->image))
                    <img class="absolute inset-0 h-full w-full object-cover"
                        src="http://127.0.0.1:8000/uploads/produk/{{$pr->image}}" alt="{{ $pr->name }}">
                    @else
                    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('assets/img/none.png') }}"
                        alt="No Picture">
                    @endif
                </div>
                <div class="p-4">
                    <span
                        class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">{{$pr->seller->name}}</span>
                    <h2 class="mt-2 mb-2  font-bold">{{$pr->name}}</h2>
                    <p class="text-sm">{{$pr->description}}</p>
                    <div class="mt-3 flex items-center">
                        <span class="text-sm font-semibold">Rp.</span>&nbsp;<span
                            class="font-bold text-xl">{{$pr->price}}</span>&nbsp;<span
                            class="text-sm font-semibold">,-</span>
                    </div>
                </div>
                <div class="p-4 border-t border-b text-xs text-gray-700">
                    <span class="flex items-center mb-1">
                        <i class="fas fa-archive text-lg mr-2 text-black"></i>Stock :
                        {{ $pr->stock }}
                    </span>
                    <span class="flex items-center">
                        <i class="far fa-address-card fa-fw text-black mr-2"></i> Status :
                        @if ($pr->stock > 0)
                        <div
                            class="text-center text-white bg-gradient-to-r from-[#ca8a04] to-[#a16207] shadow-lg rounded-full px-3 py-2 m-2">
                            Available
                        </div>
                        @else
                        <div
                            class="text-center text-white bg-gradient-to-r from-[#ca8a04] to-[#a16207] shadow-lg rounded-full px-3 py-2 m-2">
                            Not Available</div>
                        @endif
                    </span>
                </div>
                <div class="p-4 flex items-center text-sm text-gray-600">
                    @php
                    $rating = $pr->rating;
                    $roundedRating = round($rating);
                    @endphp

                    @for ($i = 1; $i <= 5; $i++) <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 fill-current @if ($i <= $roundedRating) text-yellow-500 @else text-gray-400 @endif">
                        <path
                            d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                        </path>
                        </svg>
                        @endfor
                        <div class="grid grid-cols-2 w-full">
                            <div class="ml-2">{{ $pr->rating }} / 5 </div>
                            <div class="text-right" style="float:right">{{ $pr->terjual }} Terjual
                            </div>
                        </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>
@endsection

@section('jquery')
<script></script>
@endsection