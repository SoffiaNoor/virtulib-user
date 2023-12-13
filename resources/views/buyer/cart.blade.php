@extends('layouts/buyer')
@section('content')
    <section class="text-center p-10 mt-10 w-full bg-white rounded-2xl drop-shadow-md">
        @foreach ($products as $item)
            <div class="bg-blue-400">
                @if (!empty($item->name))
                    <div class="flex flex-cols-7 h-64 gap-3">
                        <div><input type="checkbox" id="myCheckbox"></div>
                        <div>
                            @if (isset($item->image_path) && !empty($item->image_path))
                                <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset($item->image_path) }}"
                                    alt="{{ $product->name }}">
                            @else
                                <div class="w-8 h-8">
                                    <img src="{{ asset('assets/images/no-picture.png') }}" alt="No Picture">
                                </div>
                            @endif
                        </div>
                        <div>{{ $item->name }}</div>
                        <div>{{ $item->price }}</div>
                        <!-- Div dengan counter -->
                        <div class="bg-gray-200 p-4 rounded-md">
                            <p class="text-lg font-bold mb-2">Counter</p>
                            <div class="flex items-center justify-center bg-blue-500 text-white w-10 h-10 rounded-full">
                                <span id="counter" class="text-2xl">1</span>
                            </div>
                            <div class="mt-4">
                                <button id="plusBtn"
                                    class="bg-green-500 text-white px-4 py-2 rounded-md mr-2">Plus</button>
                                <button id="minusBtn" class="bg-red-500 text-white px-4 py-2 rounded-md">Minus</button>
                            </div>
                        </div>
                    </div>
                @else
                    <div>Tambahkan Item ke Keranjang Bang!</div>
                @endif
            </div>
        @endforeach
    </section>

    <section class="px-5 lg:mx-24 mx-11">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                @foreach ($products as $item)
                    <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                        <a href="{{ route('detail', $item->id) }}"
                            class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden h-full">
                            <div class="relative pb-48 overflow-hidden">
                                @if (isset($item->image_path) && !empty($item->image_path))
                                    <img class="absolute inset-0 h-full w-full object-cover"
                                        src="{{ asset($item->image_path) }}" alt="{{ $product->name }}">
                                @else
                                    <img class="absolute inset-0 h-full w-full object-cover"
                                        src="{{ asset('assets/images/no-picture.png') }}" alt="No Picture">
                                @endif
                            </div>
                            <div class="p-4">
                                <span
                                    class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">{{ $item->seller }}</span>
                                <h2 class="mt-2 mb-2  font-bold">{{ $item->name }}</h2>
                                <p class="text-sm">{{ $item->deskripsi }}</p>
                                <div class="mt-3 flex items-center">
                                    <span class="font-bold text-xl">Rp. </span>&nbsp;<span
                                        class="font-bold text-xl">{{ $item->harga }}</span>
                                </div>
                            </div>
                            <div class="p-4 border-t border-b text-xs text-gray-700">
                                <span class="flex items-center mb-1">
                                    <i class="fas fa-archive text-lg mr-2 text-black"></i>Stock :
                                    {{ $item->stok }}
                                </span>
                                <span class="flex items-center">
                                    <i class="far fa-address-card fa-fw text-black mr-2"></i> Status :
                                    {{ $item->status }}
                                </span>
                            </div>
                            <div class="p-4 flex items-center text-sm text-gray-600">
                                @php
                                    $rating = $item->rating;
                                    $roundedRating = round($rating);
                                @endphp

                                @for ($i = 1; $i <= 5; $i++)
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 fill-current @if ($i <= $roundedRating) text-yellow-500 @else text-gray-400 @endif">
                                        <path
                                            d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                        </path>
                                    </svg>
                                @endfor
                                <div class="grid grid-cols-2 w-full">
                                    <div class="ml-2">{{ $item->rating }} / 5 </div>
                                    <div class="text-right" style="float:right">{{ $item->terjual }} Terjual
                                    </div>
                                </div>
                            </div>

                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="text-center p-10 mt-10 w-full bg-white rounded-2xl drop-shadow-md">
        <div class="text-center">
            <div class="font-bold text-3xl my-5">Produk Toko Blabla Lainnya</div>
        </div>
        <div class="grid grid-cols-5">
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-full p-2">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="{{ asset('assets/images/Buku1.png') }}" alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                        <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                        <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                            Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                        </div>
                    </div>
                    <div class="p-4 border-t border-b text-xs text-gray-700">
                        <span class="flex items-center mb-1">
                            <i class="far fa-clock fa-fw mr-2 text-black"></i> 3 Tage
                        </span>
                        <span class="flex items-center">
                            <i class="far fa-address-card fa-fw text-black mr-2"></i> Ermäßigung mit
                            Karte
                        </span>
                    </div>
                    <div class="p-4 flex items-center text-sm text-gray-600"><svg viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-gray-400">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><span class="ml-2">34 Bewertungen</span></div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-full p-2">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="{{ asset('assets/images/Buku1.png') }}" alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                        <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                        <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                            Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                        </div>
                    </div>
                    <div class="p-4 border-t border-b text-xs text-gray-700">
                        <span class="flex items-center mb-1">
                            <i class="far fa-clock fa-fw mr-2 text-black"></i> 3 Tage
                        </span>
                        <span class="flex items-center">
                            <i class="far fa-address-card fa-fw text-black mr-2"></i> Ermäßigung mit
                            Karte
                        </span>
                    </div>
                    <div class="p-4 flex items-center text-sm text-gray-600"><svg viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-gray-400">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><span class="ml-2">34 Bewertungen</span></div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-full p-2">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="{{ asset('assets/images/Buku1.png') }}" alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                        <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                        <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                            Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                        </div>
                    </div>
                    <div class="p-4 border-t border-b text-xs text-gray-700">
                        <span class="flex items-center mb-1">
                            <i class="far fa-clock fa-fw mr-2 text-black"></i> 3 Tage
                        </span>
                        <span class="flex items-center">
                            <i class="far fa-address-card fa-fw text-black mr-2"></i> Ermäßigung mit
                            Karte
                        </span>
                    </div>
                    <div class="p-4 flex items-center text-sm text-gray-600"><svg viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-gray-400">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><span class="ml-2">34 Bewertungen</span></div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-full p-2">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="{{ asset('assets/images/Buku1.png') }}" alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                        <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                        <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                            Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                        </div>
                    </div>
                    <div class="p-4 border-t border-b text-xs text-gray-700">
                        <span class="flex items-center mb-1">
                            <i class="far fa-clock fa-fw mr-2 text-black"></i> 3 Tage
                        </span>
                        <span class="flex items-center">
                            <i class="far fa-address-card fa-fw text-black mr-2"></i> Ermäßigung mit
                            Karte
                        </span>
                    </div>
                    <div class="p-4 flex items-center text-sm text-gray-600"><svg viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-gray-400">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><span class="ml-2">34 Bewertungen</span></div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-full p-2">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="{{ asset('assets/images/Buku1.png') }}" alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                        <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                        <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                            Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                        </div>
                    </div>
                    <div class="p-4 border-t border-b text-xs text-gray-700">
                        <span class="flex items-center mb-1">
                            <i class="far fa-clock fa-fw mr-2 text-black"></i> 3 Tage
                        </span>
                        <span class="flex items-center">
                            <i class="far fa-address-card fa-fw text-black mr-2"></i> Ermäßigung mit
                            Karte
                        </span>
                    </div>
                    <div class="p-4 flex items-center text-sm text-gray-600"><svg viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-yellow-500">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 fill-current text-gray-400">
                            <path
                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                            </path>
                        </svg><span class="ml-2">34 Bewertungen</span></div>
                </a>
            </div>
        </div>
    </section>
@endsection

@section('jquery')
<script>
    // Ambil elemen-elemen yang dibutuhkan
    const counterElement = document.getElementById('counter');
    const plusBtn = document.getElementById('plusBtn');
    const minusBtn = document.getElementById('minusBtn');

    // Nilai awal counter
    let counterValue = 1;

    // Fungsi untuk menampilkan nilai counter
    function displayCounter() {
      counterElement.textContent = counterValue;
    }

    // Fungsi untuk menambah nilai counter
    function increaseCounter() {
      counterValue++;
      displayCounter();
    }

    // Fungsi untuk mengurangi nilai counter
    function decreaseCounter() {
      if (counterValue > 1) {
        counterValue--;
        displayCounter();
      }
    }

    // Tambahkan event listener untuk tombol plus dan minus
    plusBtn.addEventListener('click', increaseCounter);
    minusBtn.addEventListener('click', decreaseCounter);

    // Tampilkan nilai awal counter
    displayCounter();
  </script>
    
@endsection
