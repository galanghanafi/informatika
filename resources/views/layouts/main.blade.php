<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatika</title>
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/f77aa15135.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="bg-white">
    <div class="py-6 px-4 bg-yellow-300 flex justify-between">
        <div class="flex space-x-4">
            <a href="http://www.youtube.com" target="_blank"><i class="mr-2 fa-solid fa-globe"></i>Website
                Universitas</a>
            <a href="http://www.youtube.com" target="_blank"><i
                    class="mr-2 fa-solid fa-envelope"></i>informatika@respati.ac.id</a>
        </div>
        <div class="flex space-x-4">
            <a href="http://www.youtube.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="http://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </div>
    <!-- Navigation Bar -->
    <div>
        <!-- Mobile -->
        <div class="navbar bg-base-100 lg:hidden bg-blue-800">
            <div class="mx-auto">
                <a href="/" class="cursor-pointer">
                    <img src='https://informatika.respati.ac.id/assets_frontend/images/logo_informatika.png'
                        class="h-16">
                </a>
            </div>
            <div class="dropdown dropdown-end absolute right-0">
                <label tabindex="0" class="">
                    <button class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-5 h-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-white"
                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                            </path>
                        </svg>
                    </button>
                </label>
                <ul tabindex="0"
                    class="text-white font-extralight dropdown-content menu shadow bg-base-100 rounded-lg mt-2">
                    <a href="/profil">
                        <li class="btn btn-ghost font-medium normal-case text-left">Profil</li>
                    </a>
                    <a href="/akademik">
                        <li class="btn btn-ghost font-medium normal-case text-left">Akademik</li>
                    </a>
                    <a href="/media">
                        <li class="btn btn-ghost font-medium normal-case text-left">Media Publik</li>
                    </a>
                    <a href="/penelitian">
                        <li class="btn btn-ghost font-medium normal-case text-left">Penelitian</li>
                    </a>
                    <a href="/pengabdian">
                        <li class="btn btn-ghost font-medium normal-case text-left">Pengabdian</li>
                    </a>
                    <a href="/kemahasiswaan">
                        <li class="btn btn-ghost font-medium normal-case text-left">Kemahasiswaan</li>
                    </a>
                    <a href="/admisi">
                        <li class="btn btn-ghost font-medium normal-case text-left">Admisi</li>
                    </a>
                </ul>
            </div>
        </div>
        <!-- end mobile -->
        <!-- Desktop -->
        <div class="navbar bg-base-100 hidden lg:block bg-blue-800">
            <div class="navbar-center flex justify-between">
                <a href="/" class="cursor-pointer">
                    <img src='https://informatika.respati.ac.id/assets_frontend/images/logo_informatika.png'
                        class="h-16">
                </a>
                <ul class="p-0 text-white">
                    <a href="/profil">
                        <li class="btn btn-ghost font-medium">Profil</li>
                    </a>
                    <a href="/akademik">
                        <li class="btn btn-ghost font-medium">Akademik</li>
                    </a>
                    <a href="/media">
                        <li class="btn btn-ghost font-medium">Media Publik</li>
                    </a>
                    <a href="/penelitian">
                        <li class="btn btn-ghost font-medium">Penelitian</li>
                    </a>
                    <a href="/pengabdian">
                        <li class="btn btn-ghost font-medium">Pengabdian</li>
                    </a>
                    <a href="/kemahasiswaan">
                        <li class="btn btn-ghost font-medium">Kemahasiswaan</li>
                    </a>
                    <a href="/admisi">
                        <li class="btn btn-ghost font-medium">Admisi</li>
                    </a>
                </ul>
            </div>
        </div>
        <!-- end desktop -->
    </div>
    <!-- end navigation bar -->

    <!-- content -->
    <div class="mx-12">@yield('content')</div>

    <!-- footer -->
    <div class="flex justify-center bg-gradient-to-r from-cyan-600 to-cyan-800 py-12 px-4">
        <div class="font-roboto text-white">© 2021 INFORMATIKA UNRIYO - Biro Teknologi Informasi dan Komunikasi</div>
    </div>
    <!-- end footer -->

    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
