@extends('layouts/buyer')
@section('content')



    <div class="grid grid-cols-3 gap-4" style="font-family:Poppins">
        <div class="bg-gradient-to-r from-[#ca8a04] to-[#a16207] rounded-2xl shadow-xl p-4 h-full">
            <div>
                <ul>
                    <li class="mb-2 bg-transparent py-2 px-10 rounded-full"><a href="/profile" class="text-white font-bold">My
                            Account</a></li>
                    <li class="mb-2 bg-[#5e4218] py-2 px-10 rounded-full shadow-xl"><a href="/order"
                            class="text-white font-bold">My
                            Order</a></li>
                            <li class="mb-2 bg-transparent py-2 px-10 rounded-full"><a href="/topup"
                                class="text-white font-bold">Top Up</a></li>
                </ul>
            </div>
        </div>


        <div class="bg-gradient-to-r from-[#e5e7eb] to-[#e7e5e4] rounded-2xl shadow-xl col-span-2 p-4">
            @if (count($order) > 0)
                @foreach ($order as $item)
                    <div class="p-5 w-full bg-[#fffbeb] rounded-2xl drop-shadow-md my-2">
                        <div class="bg-transparent">
                            <div class="p-5">Order ID: {{ $item->_id }}</div>
                            <div class="grid grid-cols-5 gap-3 self-center justify-center items-center p-3 m-3"
                                style="place-items: center;">
                                <div class="w-auto h-auto object-cover">
                                    @if (isset($item->product->image) && !empty($item->product->image))
                                        <img class="w-40 h-40 object-cover rounded-xl shadow-2xl"
                                            src="uploads/produk/{{ $item->product->image }}"
                                            alt="{{ $item->product->name }}">
                                    @else
                                        <div>
                                            <img class="w-40 h-40 object-cover rounded-xl shadow-2xl"
                                                src="{{ asset('assets/images/no-picture.png') }}" alt="No Picture">
                                        </div>
                                    @endif
                                </div>
                                <div class="font-bold">{{ $item->product->name }}</div>
                                <div>{{ $item->total_quantity }}</div>
                                <div>{{ $item->total_price }}</div>
                                <div>
                                    @if ($item->status == 0)
                                        <div class="bg-red-500 p-3 rounded-full shadow-xl text-white">Packed</div>
                                    @elseif ($item->status == 1)
                                        <div class="bg-blue-500 p-3 rounded-full shadow-xl text-white">Sent</div>
                                    @elseif ($item->status == 2)
                                        <div class="bg-green-500 p-3 rounded-full shadow-xl text-white">Done</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center text-black">No purchase history yet.</div>
            @endif
        </div>
    </div>
    </div>

    </div>
@endsection

@section('jquery')
    <script></script>
    <script>
        function showImagePreview(input) {
            const fileInput = input;
            const profileImage = document.getElementById('profileImage');

            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    profileImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
