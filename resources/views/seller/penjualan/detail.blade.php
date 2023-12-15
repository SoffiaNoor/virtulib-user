@extends('layouts/buyer')
@section('content')
    <section class="text-center p-10 w-full bg-white rounded-2xl drop-shadow-md">
        <div class="grid grid-cols-2 gap-10">
            <div class="relative pb-48 overflow-hidden rounded-2xl">
                @if (isset($products->image_path) && !empty($products->image_path))
                    <img class="absolute inset-0 h-full w-full object-cover rounded-xl"
                        src="{{ asset($products->image_path) }}" alt="">
                @else
                    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('assets/images/no-picture.png') }}"
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

                        @for ($i = 1; $i <= 5; $i++)
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
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
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt laborum blanditiis doloribus minima,
                    quam voluptatibus ipsum, aut quos facilis enim, dolores odit optio perspiciatis sequi debitis! Numquam
                    doloribus accusamus facilis!</div>
                
                <div class="flex flex-cols-2 my-3 gap-4">
                    <div>
                        <button class="btn" onclick="my_modal_5.showModal()">Beli Sekarang!</button>
                        <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
                          <div class="modal-box">
                            <h3 class="font-bold text-lg">Hello!</h3>
                            <p class="py-4">Press ESC key or click the button below to close</p>
                            <div class="modal-action">
                              <form method="dialog">
                                <button class="btn">Close</button>
                              </form>
                            </div>
                          </div>
                        </dialog>
                    </div>
                    <div>
                        <button class="btn" onclick="my_modal_4.showModal()">Masukkan Keranjang</button>
                        <dialog id="my_modal_4" class="modal modal-bottom sm:modal-middle">
                          <div class="modal-box">
                            <h3 class="font-bold text-lg">Produk telah ditambahkan di keranjang belanja</h3>
                            <p class="py-4">Press ESC key or click the button below to close</p>
                            <div class="modal-action">
                              <form method="dialog">
                                <button class="btn">Close</button>
                              </form>
                            </div>
                          </div>
                        </dialog></div>
                </div>
                               
            </div>
    </section>

    <section class="text-center p-10 mt-10 w-full bg-white rounded-2xl drop-shadow-md">
        <!-- Container for demo purpose -->
        <div class="container my-24 mx-auto md:px-6">
            <section class="mb-32 text-center">
                <h2 class="mb-12 text-3xl font-bold">Testimonials</h2>
                <div class="grid gap-x-6 md:grid-cols-3 lg:gap-x-12">
                    @foreach ($products['review'] as $review)
                        <div class="mb-12 md:mb-0">
                            <div class="mb-6 flex justify-center">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).jpg"
                                    class="w-32 rounded-full shadow-lg dark:shadow-black/20" />
                            </div>
                            <h5 class="mb-2 text-lg font-bold">{{ $review['buyer'] }}</h5>
                            <p class="mb-4">
                                {{ $review['comment'] }}
                            </p>
                            <div class="flex items-center text-center text-sm text-gray-600" style="place-content: center">
                                @php
                                    $rating = $review['rating'];
                                    $roundedRating = round($rating);
                                @endphp

                                @for ($i = 1; $i <= 5; $i++)
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 fill-current @if ($i <= $roundedRating) text-yellow-500 @else text-gray-400 @endif">
                                        <path
                                            d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                        </path>
                                    </svg>
                                @endfor

                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
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
    <script></script>
@endsection
