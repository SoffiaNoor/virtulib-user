@extends('layouts/buyer')
@section('content')
    <div class="grid grid-cols-3 gap-4" style="font-family:Poppins">
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
                <form class="p-3" method="POST" action="{{route('updatePhotoProfile', ['id' => $login])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="grid grid-cols-2">
                            <div>
                                <img class="w-64 mx-auto h-64 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500"
                                    src="assets/img/book_login.jpg" alt="Bordered avatar">
                            </div>
                            <div class="self-center">
                                <div class="mb-2 bg-[#ca8a04] py-2 px-10 shadow-xl rounded-full text-white">
                                    <label>Update Photo Profile:</label>
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>
                                <button type=""
                                    class="form-input my-2 w-full rounded-lg font-bold text-white focus:outline-none
                     [ p-3 md:p-4 lg:p-4 ] 
                     [ transition-colors duration-500 ] 
                     [ bg-[#ad7c35] hover:bg-[#e1982d] ]">Change
                                    Profile Photo</button>
                                <button type=""
                                    class="form-input my-2 w-full rounded-lg font-bold text-white focus:outline-none
                     [ p-3 md:p-4 lg:p-4 ] 
                     [ transition-colors duration-500 ] 
                     [ bg-[#ad7c35] hover:bg-[#e1982d] ]">Delete
                                    Profile Photo</button>

                            </div>
                        </div>
                    </div>
                </form>
                <form method="POST" action="{{ route('updateProfile', ['id' => $login]) }}">
                    @csrf
                    @if (session('success'))
                        <div class="alert alert-success mb-3" style="color:white;font-weight:bold" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-warning mb-3" style="color:white;font-weight:bold" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="header-card mt-10 text-center mb-5">
                        <div class="text-md text-black text-left">Your Profile : </div>
                    </div>
                    <label for="name" class="form-label relative text-black/50 focus-within:text-[#333] block mb-4">Full
                        Name</label>
                    <input
                        class="form-input my-5
                      block w-full rounded-lg leading-none focus:outline-none placeholder-black/50 
                      [ transition-colors duration-200 ] 
                      [ py-3 pr-3 md:py-4 md:pr-4 lg:py-4 lg:pr-4 pl-12 ] 
                      [ bg-black/20 focus:bg-black/25 ] 
                      [ text-[#333] focus:text-black ]"
                        type="text" name="name" id="name" placeholder="Name" value="{{ $profil->full_name }}">
                    <label for="phone_number"
                        class="form-label relative text-black/50 focus-within:text-[#333] block mb-4">Phone Number</label>
                    <input
                        class="form-input my-5
                      block w-full rounded-lg leading-none focus:outline-none placeholder-black/50 
                      [ transition-colors duration-200 ] 
                      [ py-3 pr-3 md:py-4 md:pr-4 lg:py-4 lg:pr-4 pl-12 ] 
                      [ bg-black/20 focus:bg-black/25 ] 
                      [ text-[#333] focus:text-black ]"
                        type="text" name="phone_number" id="phone_number" placeholder="Phone Number"
                        value="{{ $profil->phone_number }}">
                    <label for="address"
                        class="form-label relative text-black/50 focus-within:text-[#333] block mb-4">Address</label>
                    <input
                        class="form-input my-5
                      block w-full rounded-lg leading-none focus:outline-none placeholder-black/50 
                      [ transition-colors duration-200 ] 
                      [ py-3 pr-3 md:py-4 md:pr-4 lg:py-4 lg:pr-4 pl-12 ] 
                      [ bg-black/20 focus:bg-black/25 ] 
                      [ text-[#333] focus:text-black ]"
                        type="text" name="address" id="address" placeholder="Address" value="{{ $profil->address }}">

                    <div class="mb-4">
                        <label for="gender"
                            class="form-label relative text-black/50 focus-within:text-[#333] block mb-2">Gender</label>
                        <div class="flex items-center">
                            <input
                                class="form-radio text-[#333] accent-orange-500 focus:outline-none focus:text-black w-5 h-5"
                                type="radio" name="gender" id="male" value="male"
                                {{ $profil->gender === 'male' ? 'checked' : '' }}>
                            <span class="ml-2">Male</span>

                            <input
                                class="form-radio text-[#333] accent-orange-500 focus:outline-none focus:text-black ml-10 w-5 h-5"
                                type="radio" name="gender" id="female" value="female"
                                {{ $profil->gender === 'female' ? 'checked' : '' }}>
                            <span class="ml-2">Female</span>
                        </div>
                    </div>

                    <div class="mb-4 mt-2">
                        <label for="birthdate"
                            class="form-label relative text-black/50 focus-within:text-[#333] block mb-2">Birthday</label>
                        <input
                            class="form-input my-5
                        block w-full rounded-lg leading-none focus:outline-none placeholder-black/50 
                        [ transition-colors duration-200 ] 
                        [ py-3 pr-3 md:py-4 md:pr-4 lg:py-4 lg:pr-4 pl-12 ] 
                        [ bg-black/20 focus:bg-black/25 ] 
                        [ text-[#333] focus:text-black ]"
                            type="date" name="birthdate" id="birthdate" value="{{ $profil->birthdate }}">
                    </div>


                    <button type="submit"
                        class="form-input w-full rounded-lg font-bold text-white focus:outline-none
                     [ p-3 md:p-4 lg:p-4 ] 
                     [ transition-colors duration-500 ] 
                     [ bg-[#ad7c35] hover:bg-[#e1982d] ]">Simpan</button>
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
