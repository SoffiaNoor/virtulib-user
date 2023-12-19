@extends('layouts/buyer')
@section('content')



    <div class="grid grid-cols-3 gap-4" style="font-family:Poppins">
        <div class="bg-gradient-to-r from-[#ca8a04] to-[#a16207] rounded-2xl shadow-xl p-4 h-full">
            <div>
                <ul>
                    <li class="mb-2 bg-transparent py-2 px-10 rounded-full"><a href="/profile" class="text-white font-bold">My
                            Account</a></li>
                    <li class="mb-2 bg-transparent py-2 px-10 rounded-full"><a href="/order"
                            class="text-white font-bold">My
                            Order</a></li>
                            <li class="mb-2 bg-[#5e4218] py-2 px-10 rounded-full shadow-xl"><a href="#r"
                                class="text-white font-bold">Top Up</a></li>
                </ul>
            </div>
        </div>


        <div class="bg-gradient-to-r from-[#e5e7eb] to-[#e7e5e4] rounded-2xl shadow-xl col-span-2 p-4">
            <div class="p-5 w-full bg-[#fffbeb] rounded-2xl drop-shadow-md my-2">
                <div class="bg-transparent">
                    <div class="text-2xl text-bold my-1">Your current balance:</div>
                    <hr style="background-color:#5e4218;height:10px;border-radius:40px;width:75%">
                    <div class="text-xl my-3">Rp. {{$buyer->balance}}</div>
                </div>
            </div>

            <div class="p-5 w-full bg-[#fffbeb] rounded-2xl drop-shadow-md my-2">
                <div class="bg-transparent">
                    <div class="my-3 text-2xl text-bold">Top Up your Balance:</div>
                    <hr style="background-color:#5e4218;height:10px;border-radius:40px;width:75%">
                    <div class="grid grid-cols-3 text-center my-4">
                        <a href=""><div class="p-3 rounded-lg bg-slate-500 text-white mx-3">BNI</div></a>
                        <a href=""><div class="p-3 rounded-lg bg-slate-500 text-white mx-3">BRI</div></a>
                        <a href=""><div class="p-3 rounded-lg bg-slate-500 text-white mx-3">BCA</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
@endsection

@section('jquery')
    <script></script>
    
@endsection
