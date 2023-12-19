<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta name="keywords" content="">
    <link rel='icon' type="image/x-icon" href='{{ asset(' assets/images/logo2.ico') }}'>
    <title>Virtulib</title>

    @vite('resources/css/app.css')


    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" /> --}}
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/function.js') }}"></script>
</head>

<body class="" style="font-family: Poppins;background-image:url('assets/img/book_register.jpg');background-size:cover">
    <div class="form-wrapper 
           min-h-screen
           [ p-4 md:p-6 lg:p-8 ]
           [ flex justify-center items-center ]">
        <form method="POST" action="{{ route('register') }}" class="signup-form
                 lg:max-w-md
                 max-w-sm
                 rounded-2xl
                 text-[#1A2421]
                 backdrop-blur-lg
                 [ p-8 md:p-10 lg:p-10 ]
                 [ bg-gradient-to-b from-white/60 to-white/30 ]
                 [ border-[1px] border-solid border-white border-opacity-30 ]
                 [ shadow-black/30 shadow-2xl ]">
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
            <h3 class="mb-1 text-md text-[#1A2421]/80">Daftar Akun</h3>
            <h1 class="mb-6 uppercase font-bold [ text-xl md:text-2xl lg:text-2xl ]">VirtuLib</h1>
            <p class="mb-6 [ text-sm text-[#1A2421]/70 text-opacity-50 ]">Masukkan email dan password yang valid untuk
                memulai mendaftar</p>

            <label for="username" class="form-label relative block mb-4 text-black/50 focus-within:text-[#333]">
                <i class="fa fa-user label-icon 
                            transition pointer-events-none
                            [ w-6 h-6 ] 
                            [ absolute top-1/2 left-3 ] 
                            [ transform -translate-y-1/2 ]" style="text-align-last:center!important"></i>
                <input class="form-input 
                              block w-full rounded-lg leading-none focus:outline-none placeholder-black/50 
                              [ transition-colors duration-200 ] 
                              [ py-3 pr-3 md:py-4 md:pr-4 lg:py-4 lg:pr-4 pl-12 ] 
                              [ bg-black/20 focus:bg-black/25 ] 
                              [ text-[#333] focus:text-black ]" type="text" name="name" id="name"
                    placeholder="Username">
            </label>

            <label for="email" class="form-label relative block mb-4 text-black/50 focus-within:text-[#333]">

                <svg class="label-icon 
                    transition pointer-events-none
                    [ w-6 h-6 ] 
                    [ absolute top-1/2 left-3 ] 
                    [ transform -translate-y-1/2 ]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M12 1.95c-5.52 0-10 4.48-10 10s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8 8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57v-1.43c0-2.76-2.24-5-5-5s-5 2.24-5 5 2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47.65.89 1.77 1.47 2.96 1.47 1.97 0 3.5-1.6 3.5-3.57v-1.43c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z" />
                </svg>
                <input class="form-input 
                      block w-full rounded-lg leading-none focus:outline-none placeholder-black/50 
                      [ transition-colors duration-200 ] 
                      [ py-3 pr-3 md:py-4 md:pr-4 lg:py-4 lg:pr-4 pl-12 ] 
                      [ bg-black/20 focus:bg-black/25 ] 
                      [ text-[#333] focus:text-black ]" type="email" name="email" id="email" placeholder="Email">
            </label>

            <label for="password" class="form-label relative text-black/50 focus-within:text-[#333] block mb-4">
                <svg class="label-icon 
                    transition pointer-events-none
                    [ w-6 h-6 ] 
                    [ absolute top-1/2 left-3 ] 
                    [ transform -translate-y-1/2 ]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor">

                    <g fill="none">
                        <path d="M0 0h24v24H0V0z" />
                        <path d="M0 0h24v24H0V0z" opacity=".87" />
                    </g>
                    <path
                        d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z" />
                </svg>

                <input class="block w-full rounded-lg leading-none focus:outline-none placeholder-black/50 
                      [ transition-colors duration-200 ] 
                      [ py-3 pr-3 md:py-4 md:pr-4 lg:py-4 lg:pr-4 pl-12 ] 
                      [ bg-black/20 focus:bg-black/25 ] 
                      [ text-[#333] focus:text-black ]" type="password" name="password" id="password"
                    placeholder="Password">
            </label>
            <p class="mb-3 [ text-sm text-[#1A2421]/70 text-opacity-50 ]">Gabung Menjadi:</p>
            <ul class="grid w-full gap-6 md:grid-cols-2 mb-6">
                <li>
                    <input type="radio" id="hosting-small" name="role" value="buyer" class="hidden peer"
                        required>
                    <label for="hosting-small"
                        class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-[#ca8a04] peer-checked:text-[#ca8a04] hover:text-gray-600 hover:bg-gray-100">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Pembeli</div>
                        </div>
                        <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </label>
                </li>
                <li>
                    <input type="radio" id="hosting-big" name="role" value="seller" class="hidden peer">
                    <label for="hosting-big"
                        class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-[#ca8a04] peer-checked:text-[#ca8a04] hover:text-gray-600 hover:bg-gray-100">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Penjual</div>
                        </div>
                        <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </label>
                </li>
            </ul>

            <button type="submit" class="form-input w-full rounded-lg font-bold text-white focus:outline-none
                     [ p-3 md:p-4 lg:p-4 ] 
                     [ transition-colors duration-500 ] 
                     [ bg-[#ad7c35] hover:bg-[#e1982d] ]">Daftar</button>
            <div class="form-footer mt-8 text-center">
                <p class="text-xs">Sudah punya akun? <a href="/login" class="font-bold"> Masuk disini</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>