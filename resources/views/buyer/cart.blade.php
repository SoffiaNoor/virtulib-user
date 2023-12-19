@extends('layouts/buyer')
@section('content')
<div class="text-center">
    <div class="font-bold text-3xl my-5">Your Cart</div>
</div>
@foreach ($cart as $item)
<section class="text-center p-10 mt-5 w-full bg-[#fffbeb] rounded-2xl drop-shadow-md">
    <div class="bg-transparent">
        <div class="flex flex-cols-7 gap-3 self-center justify-center items-center">
            <div><input type="checkbox" class="accent-amber-500"></div>
            <div>
                @if (isset($item->product->image) && !empty($item->product->image))
                <img class="w-40 h-40 object-cover rounded-xl shadow-2xl" src="uploads/produk/{{$item->product->image}}"
                    alt="{{ $item->product->name }}">
                @else
                <div>
                    <img class="w-40 h-40 object-cover rounded-xl shadow-2xl"
                        src="{{ asset('assets/images/no-picture.png') }}" alt="No Picture">
                </div>
                @endif
            </div>
            <div class="mx-auto font-bold">{{ $item->product->name }}</div>
            <div class="mx-auto text-red price"><span>{{ $item->product->price }}</div>
            <div class="flex flex-cols-3">
                <div
                    class="minusBtn justify-center p-2 bg-gradient-to-r from-[#ca8a04] to-[#a16207] h-10 w-10 rounded-full items-center text-center">
                    <i class="mt-1 justify-center text-white fa fa-minus mx-auto"></i>

                </div>
                <div class="mx-3"><span class="counter text-2xl">{{$item->quantity}}</span>
                </div>
                <div
                    class="plusBtn p-2 bg-gradient-to-r from-[#ca8a04] to-[#a16207] h-10 w-10 rounded-full items-center text-center">
                    <i class="mt-1 text-white fa fa-plus mx-auto"></i>
                </div>
            </div>
            <div class="mx-auto text-red total"></div>
            <div class="grid grid-rows-2"><button class="btn btn-warning font-bold rounded-full py-1 px-10 shadow-xl">Order Now</button>
                <form>
                    <button class="btn btn-error font-bold rounded-full py-1 px-10 shadow-xl ">Delete
                        Product</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endforeach

<section class="text-center p-10 mt-10 w-full bg-[#fffbeb] rounded-2xl drop-shadow-md">
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
    // Ambil semua elemen yang dibutuhkan
    const checkboxes = document.querySelectorAll('.myCheckbox');
    const counters = document.querySelectorAll('.counter');
    const plusBtns = document.querySelectorAll('.plusBtn');
    const minusBtns = document.querySelectorAll('.minusBtn');
    const prices = document.querySelectorAll('.price');
    const totals = document.querySelectorAll('.total');

    // Tambahkan event listener untuk setiap item di dalam loop
    checkboxes.forEach((checkbox, index) => {
        let counterValue = 1;
        const priceValue = parseFloat(prices[index].textContent);

        function displayCounter() {
            counters[index].textContent = counterValue;
            calculateTotal(index);
        }

        function calculateTotal(index) {
            const total = counterValue * priceValue;
            totals[index].textContent = total.toFixed(2);
        }

        function increaseCounter() {
            counterValue++;
            displayCounter();
        }

        function decreaseCounter() {
            if (counterValue > 1) {
                counterValue--;
                displayCounter();
            }
        }

        plusBtns[index].addEventListener('click', increaseCounter);
        minusBtns[index].addEventListener('click', decreaseCounter);

        displayCounter();
    });

    function showModal(button) {
        const modal = button.closest('.bg-transparent').querySelector('.modal-box');
        if (modal) {
            modal.showModal();
        }
    }
</script>
@endsection