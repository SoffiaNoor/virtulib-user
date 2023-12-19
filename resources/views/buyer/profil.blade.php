@extends('layouts/buyer')
@section('content')
<div class="grid grid-cols-3 gap-4 h-screen" style="font-family:Poppins">
    <div class="bg-gradient-to-r from-[#ca8a04] to-[#a16207] rounded-2xl shadow-xl p-4 h-1/3">
        <div>
            <ul>
                <li class="mb-2 bg-[#5e4218] py-2 px-10 shadow-xl rounded-full"><a href="#"
                        class="text-white font-bold">My Account</a></li>
                <li class="mb-2 bg-transparent py-2 px-10 rounded-full"><a href="#" class="text-white font-bold">My
                        Order</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-gradient-to-r from-[#e5e7eb] to-[#e7e5e4] rounded-2xl shadow-xl col-span-2 p-4">
        <div class="px-10 pt-2 font-weight-bold">
            <h5 class="mb-2 py-2 font-bold rounded-full text-4xl">MY PROFILE</h5>
            <hr style="background-color:#5e4218;height:10px;border-radius:40px;width:75%">
        </div>
        <div class="px-10 container-fluid py-2">
            <div class="row">
                <div class="grid grid-cols-2">
                    <div>
                        <img class="w-64 mx-auto h-64 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500"
                            src="assets/img/book_login.jpg" alt="Bordered avatar">
                    </div>
                    <div class="self-center	">
                        <div class="mb-2 bg-[#ca8a04] py-2 px-10 shadow-xl rounded-full"><a href="#"
                                class="text-white font-bold">Change Profile Photo</a></div>
                        <div class="mb-2 bg-[#a16207] py-2 px-10 shadow-xl rounded-full"><a href="#"
                                class="text-white font-bold">Delete Profile Photo</a></div>
                    </div>
                </div>
            </div>
            <form>
                <div class="header-card mt-10 text-center">
                    <div class="text-md text-black text-left">Lengkapi Profil Anda</div>
                </div>
                <input class="form-input my-5
                      block w-full rounded-lg leading-none focus:outline-none placeholder-black/50 
                      [ transition-colors duration-200 ] 
                      [ py-3 pr-3 md:py-4 md:pr-4 lg:py-4 lg:pr-4 pl-12 ] 
                      [ bg-black/20 focus:bg-black/25 ] 
                      [ text-[#333] focus:text-black ]" type="email" name="email" id="email" placeholder="Email">

                <input class="form-input my-5
                      block w-full rounded-lg leading-none focus:outline-none placeholder-black/50 
                      [ transition-colors duration-200 ] 
                      [ py-3 pr-3 md:py-4 md:pr-4 lg:py-4 lg:pr-4 pl-12 ] 
                      [ bg-black/20 focus:bg-black/25 ] 
                      [ text-[#333] focus:text-black ]" type="email" name="email" id="email" placeholder="Email">
                <input class="form-input my-5
                      block w-full rounded-lg leading-none focus:outline-none placeholder-black/50 
                      [ transition-colors duration-200 ] 
                      [ py-3 pr-3 md:py-4 md:pr-4 lg:py-4 lg:pr-4 pl-12 ] 
                      [ bg-black/20 focus:bg-black/25 ] 
                      [ text-[#333] focus:text-black ]" type="email" name="email" id="email" placeholder="Email">

                <div class="card-content mr-4 mt-5">
                    <div class="mb-2 w-1/2 bg-[#ca8a04] py-2 px-10 shadow-xl rounded-full"><a href="#"
                            class="text-white font-bold">Simpan</a></div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

</div>
@endsection

@section('jquery')
<script></script>
@endsection