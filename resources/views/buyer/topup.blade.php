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
                            <li class="mb-2 bg-transparent py-2 px-10 rounded-full shadow-xl"><a href="#r"
                                class="text-white font-bold">Top Up</a></li>
                </ul>
            </div>
        </div>


        <div class="bg-gradient-to-r from-[#e5e7eb] to-[#e7e5e4] rounded-2xl shadow-xl col-span-2 p-4">
            
        </div>
    </div>
    </div>

    </div>
@endsection

@section('jquery')
    <script></script>
    
@endsection
