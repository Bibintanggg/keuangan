<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-[200vh] md:min-h-[200vh] bg-dots-darker 
        bg-center bg-gradient-to-br from-blue-600   to-indigo-800 selection:text-white max-w-xl mx-auto">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-1/4 left-1/4 w-20 h-20 bg-white/10 rounded-full"></div>
                <div class="absolute top-3/4 left-1/4 w-32 h-32 bg-white/10 rounded-full"></div>
                <div class="absolute bottom-1/4 left-1/6 w-16 h-16 bg-white/10 rounded-full "></div>
                <div class="absolute top-1/6 right-1/3 w-24 h-24 bg-white/10 rounded-full"></div>
            </div>

            <!-- Main -->
            <div class="translate-y-40 md:translate-y-10">
                <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 text-center ">
                    <h1 class="text-white text-4xl font-bold ">Kelola keuangan <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500  ">dengan mudah ?? </span></h1>
                    <p class="text-white max-w-4xl text-lg py-8 font-semibold  mx-auto">Aplikasi keuangan modern yang membantu anda mengelola pemasukan, pengeluaran, dan mencapai tujaun finansial dengan lebih efektif</p>
                </div>

                <!-- Button -->
                 <div>
                    <div class="flex justify-center items-center gap-4">
                        @auth   
                            <a href={{ url('/dashboard') }} 
                            class="bg-white text-purple-600 hover:bg-gray-100 px-3 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg md:px-8">Dashboard</a>
                            @else 
                            <a href="{{ route('register') }}"   
                            class="bg-white text-purple-600 hover:bg-gray-100 px-3 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg md:px-8">Mulai Sekarang</a>

                            <a href="{{ route('login') }}"
                            class="bg-white text-purple-600 hover:bg-gray-100 px-3 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg md:px-8">Sudah Punya Akun ??</a>
                        @endauth
                    </div>

                    <!-- Ads -->
                    <div>
                            <div>
                                <div class="grid grid-cols-1 md:grid-cols-1 gap-6 mt-32 w-[20rem] mx-auto">
                                    <div class="h-full w-full bg-gray-100  bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-20 p-6 shadow-lg 
                                    hover:-translate-y-2 ease-in-out duration-300 transition-all rounded-xl">
                                        <div class="flex  justify-center ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m-6 0l3-3m-3 3h6a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>                                              
                                            <h2 class="text-2xl font-semibold text-white text-center">Laporan Detail</h2>
                                        </div>
                                        <p class="text-white
                                    <h1 class="text-white "> Dapatkan insight mendalam tentang pola pengeluaran dan pemasukan Anda dengan visualisasi yang mudah dipahami.</h1>
                                </div>

                                    <div class="h-full w-full bg-gray-100 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-20 p-6 shadow-lg 
                                    hover:-translate-y-2 ease-in-out duration-300 transition-all">
                                        <div class="flex  justify-center ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 24 24"><g fill="none" stroke="#ba68d2" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="#ba68d2"><path d="M12.002 9.001c-1.105 0-2 .672-2 1.5s.895 1.5 2 1.5s2 .672 2 1.5s-.896 1.5-2 1.5m0-6c.87 0 1.612.417 1.886 1m-1.886-1v-1m0 7c-.87 0-1.612-.417-1.886-1m1.886 1v1"/><path d="M13.5 2.501H12c-4.478 0-6.718 0-8.109 1.391S2.5 7.522 2.5 12.001c0 4.478 0 6.717 1.391 8.109C5.282 21.5 7.521 21.5 12 21.5c4.478 0 6.718 0 8.109-1.391S21.5 16.48 21.5 12v-1.5m-5-3.001l4.176-4.178m.824 3.656l-.118-3.091c0-.729-.435-1.183-1.228-1.24l-3.124-.147"/></g></svg>
                                            <h2 class="text-2xl font-semibold text-white text-center">Target Keuangan</h2>
                                        </div>
                                    <h1 class="text-white mt-6"> Tetapkan dan pantau progress tujuan finansial Anda, dari dana darurat hingga rencana investasi jangka panjang.</h1>
                                </div>

                                <div class="h-full w-full bg-gray-100 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-20 p-6 shadow-lg 
                                    hover:-translate-y-2 ease-in-out duration-300 transition-all">
                                        <div class="flex  justify-center ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m-6 0l3-3m-3 3h6a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>                                              
                                            <h2 class="text-2xl font-semibold text-white text-center">Aman & Terpercaya</h2>
                                        </div>
                                        <p class="text-white
                                    <h1 class="text-white "> Data keuangan Anda dilindungi dengan enkripsi tingkat bank dan sistem keamanan berlapis.</h1>
                                </div>

                            </div>
                        </div>
            </div>

            <footer class="flex flex-col items-center mx-auto justify-center mt-10 text-white">
                <p>&copy; 2025 KEUANGANKU. Kelola keuangan dengan bijak</p>
                <span>@bintang.ydha_</span>
            </footer>
        </div>
    </body>
</html>
