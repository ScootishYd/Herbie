<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan - Herbie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-neutral-100 m-16 gap-6 font-roboto w-full ">
    <div class="flex w-full">
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <!-- Main Content -->
        <div class="flex-grow w-full p-4 rounded-2xl">
            <h1 class="font-roboto text-2xl font-bold text-green-600 mb-2">Dashboard Perusahaan</h1>
            <div class="flex gap-2 mb-2">
                <!-- Navbar -->
                <x-navbar></x-navbar>
            </div>

            <div class="flex gap-6 h-fit">
                <div class="flex-col flex-grow">
                    <div class="flex-shrink w-full bg-neutral-50 rounded-2xl shadow-sm p-4 h-fit">
                        <div class="flex justify-between mb-2">
                            <h1 class="text-xl text-green-600 font-bold">Akun</h1>
                        </div>
                        <form action="{{ route('account.update', ['id' => $account->id]) }}" method="POST" class="space-y-6">
                            @csrf
                            @method('PUT') <!-- Menggunakan metode PUT untuk pembaruan -->
                            <div class="mb-6">
                                <label for="username" class="block font-medium text-gray-700 mb-2">Username</label>
                                <input type="text" id="username" name="username" value="{{ old('username', $account->username) }}" placeholder="Masukkan username"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                            </div>

                            <div class="mb-6">
                                <label for="email" class="block font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email', $account->email) }}" placeholder="Masukkan email"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                            </div>

                            <div class="mb-6">
                                <label for="password" class="block font-medium text-gray-700 mb-2">Password</label>
                                <input type="password" id="password" name="password" placeholder="Masukkan password"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                            </div>

                            <div class="mb-6">
                                <label for="profile" class="block font-medium text-gray-700 mb-2">Foto Profil</label>
                                <div class="flex items-center gap-4">
                                    <img class="w-16 h-16 rounded-full" src="{{ asset('storage/' . $account->profile_picture_url) }}" alt="Foto Profil">
                                    <input type="file" id="profile" name="profile"
                                        class="text-gray-500 text-sm file:py-2 file:px-4 file:border file:border-gray-300 file:rounded-lg file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200">
                                </div>
                            </div>

                            <button type="submit" class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition font-semibold">
                                Update Akun
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>


        <!-- Template Sidebar -->
        <template id="x-sidebar">
            <aside class="bg-white w-64 h-screen shadow-lg p-6">
                <div class="flex items-center gap-2 mb-8">
                    <span class="font-bold text-green-600 text-2xl">herbie</span>
                </div>
                <div class="mb-6">
                    <div class="bg-green-100 text-green-600 p-4 rounded-lg">
                        <h1 class="font-bold">Nama Perusahaan</h1>
                        <p class="text-sm font-light">Jenis Perusahaan</p>
                    </div>
                </div>
                <nav class="space-y-4">
                    <a href="#" class="flex items-center gap-2 text-gray-600 hover:text-green-600">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h11m-5-5h5m-5 10h5m-5 5h5M7 5v14M17 10h3" />
                        </svg>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center gap-2 text-gray-600 hover:text-green-600">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 12H4" />
                        </svg>
                        Analisa
                    </a>
                    <a href="#" class="flex items-center gap-2 text-gray-600 hover:text-green-600">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 21V3m4 18V3m-7 7h10" />
                        </svg>
                        Cuaca
                    </a>
                    <a href="#" class="flex items-center gap-2 text-gray-600 hover:text-green-600">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        Pengaturan
                    </a>
                </nav>
            </aside>
        </template>
        @if ($errors->any())
        <div class="bg-red-100 text-red-600 p-4 rounded-lg mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('success'))
        <div class="bg-green-100 text-green-600 p-4 rounded-lg mb-6">
            {{ session('success') }}
        </div>
        @endif

        <!-- Rendering Components -->
        <script>
            // Render Sidebar
            document.querySelectorAll('x-sidebar').forEach(el => {
                const template = document.getElementById('x-sidebar');
                el.replaceWith(template.content.cloneNode(true));
            });

            // Render Navbar
            document.querySelectorAll('y-navbar').forEach(el => {
                const template = document.getElementById('y-navbar');
                el.replaceWith(template.content.cloneNode(true));
            });
        </script>
</body>

</html>