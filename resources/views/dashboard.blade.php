<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Herbie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body class="container px-24 py-4 bg-slate-100">
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-3 bg-slate-50 h-fit rounded-lg p-4 shadow-md">
            <div class="flex justify-between items-center mb-2">
                <img src="./images/logo.png" alt="Herbie Logo" class="h-4">
                <img src="./images/window.svg" alt="Window" class="h-4">
            </div>
            <hr class="">
            <div class="bg-green-800 p-2 rounded mb-2">
                <div class="flex items-center gap-1 shadow-sm">
                    <img src="https://placehold.co/32" alt="">
                    <div class="font-roboto text-white">
                        <p class="font-bold text-sm">Nama Perusahaan</p>
                        <p class="font-light text-xs">Jenis Perusahaan</p>
                    </div>
                </div>
            </div>
            <p class="font-roboto text-light text-xs text-neutral-400">Main Menu</p>
            <div class="my-1">
                <div class="flex items-center p-2 hover:bg-neutral-200 rounded transition-all duration-300">
                    <img src="./images/dashboard.svg" alt="Dashboard" class="h-5 me-4">
                    <p class="font-roboto font-bold text-sm text-green-800">Dashboard</p>
                </div>
                <div class="flex items-center p-2 hover:bg-neutral-200 rounded transition-all duration-300">
                    <img src="./images/analytic.svg" alt="Dashboard" class="w-6 me-4">
                    <p class="font-roboto font-bold text-sm text-neutral-600">Analisa</p>
                </div>
                <div class="flex items-center p-2 hover:bg-neutral-200 rounded transition-all duration-300">
                    <img src="./images/weather.svg" alt="Dashboard" class="h-5 me-4">
                    <p class="font-roboto font-bold text-sm text-neutral-600">Cuaca</p>
                </div>
                <div class="flex items-center p-2 hover:bg-neutral-200 rounded transition-all duration-300">
                    <img src="./images/setting.svg" alt="Dashboard" class="h-5 me-4">
                    <p class="font-roboto font-bold text-sm text-neutral-600">Pengaturan</p>
                </div>
            </div>
        </div>
        <div class="col-span-9 p-4 h-fit">
            <h1 class="font-roboto text-lg font-bold text-green-800 mb-2">Dashboard Perusahaan</h1>
            <div class="flex items-center">
                <img src="https://placehold.co/48" alt="" class="me-3">
                <div class="text-neutral-950">
                    <p class="text-sm font-roboto font-bold">Nama Perusahaan</p>
                    <p class="text-xs font-roboto font-light text-neutral-600">Deskripsi Perusahan</p>
                </div>
            </div>
        </div>
        <div class="col-span-3 bg-slate-50 rounded-lg p-4 shadow-md h-fit">
            <div class="flex flex-col justify-center items-center mb-4">
                <h1 class="font-roboto text-md font-bold text-neutral-950 mb-2">Pengguna</h1>
                <img src="https://placehold.co/48" alt="" class="rounded-full w-12 outline outline-offset-1 outline-1 outline-neutral-950 mb-2">
                <p class="text-sm font-bold">Nama Pengguna</p>
                <p class="text-xs mb-4">Role Pengguna</p>
                <button class="flex items-center justify-center w-fit px-5 py-1 bg-red-600 rounded hover:bg-red-500 transition-all duration-300">
                    <img src="./images/logout.svg" alt="Log Out" class="w-5 me-2">
                    <p class="font-semibold text-md text-white">Keluar</p>
                </button>
            </div>
        </div>
        <div class="col-span-6 bg-slate-50 rounded-lg p-4 shadow-md h-fit">
            Ini Kelola?
        </div>
    </div>
</body>
</html>