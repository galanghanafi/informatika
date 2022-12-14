<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/f77aa15135.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    {{-- header --}}
    <div class="flex flex-col h-screen">
        <div class="w-full">
            <div class="navbar bg-base-100 h-0 bg-blue-800">
                <div class="flex-1">
                    <a class="btn btn-ghost normal-case text-xl  font-medium text-white">Admin</a>
                </div>
                <div class="flex-none">
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img src="https://placeimg.com/80/80/people" />
                            </div>
                        </label>
                        <ul tabindex="0"
                            class="bg-white menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                            <li class="">
                                <a class="justify-between">
                                    Profile
                                    <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-grow bg-red-300">
            {{-- nav --}}
            <div class="bg-white h-full basis-1/5">
                <ul class="bg-base-100 w-scren bg-white">
                    <li><a href="/admin/kompetensi"
                            class="btn btn-ghost w-full text-left justify-start py-6 font-medium bg-white hover:bg-gray-50">Kompetensi</a>
                    </li>
                    <li><a href="/admin/dosen"
                            class="btn btn-ghost w-full text-left justify-start py-6 font-medium bg-white hover:bg-gray-50">Dosen</a>
                    </li>
                    </li>
                </ul>
            </div>
            <!-- content -->
            <div class="basis-4/5 bg-gray-100 w-full p-4 overflow-x-hidden">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
