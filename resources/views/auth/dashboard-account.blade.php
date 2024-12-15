<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan - Herbie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-neutral-100 m-16 gap-6 font-roboto ">
    <x-sidebar />

    <div class="flex-grow rounded-2xl px-4">
        <h1 class="font-roboto text-2xl p-4 font-bold text-green-600 mb-2">Pengaturan</h1>
        <div class="flex gap-6 h-fit">

            <div class="flex-col flex-grow">
                <div class="flex-shrink w-[960px] bg-neutral-50 rounded-2xl shadow-sm p-4 h-fit">
                    <div class="flex justify-between mb-2">
                        <h1 class="text-lg text-green-600 font-bold">Akun</h1>
                    </div>
                    <form class="space-y-6" method="post" action="">
                        @csrf
                        <!-- Username -->
                        <div class="mb-6">
                            <label for="username" class="block text-gray-700 mb-2">Username</label>
                            <input type="text" id="username" name="username" placeholder="Masukkan username"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                        </div>

                        <!-- Email -->
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" placeholder="Masukkan email"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                        </div>

                        <!-- Password -->
                        <div class="mb-6">
                            <label for="password" class="block text-gray-700 mb-2">Password</label>
                            <input type="password" id="password" name="password" placeholder="Masukkan password"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                        </div>

                        <!-- Foto Profil -->
                        <div class="mb-6">
                            <label for="profile" class="block text-gray-700 mb-2">Foto Profil</label>
                            <div class="flex items-center gap-4">
                                <img class="w-16 h-16 rounded-full" src="https://placehold.co/64" alt="Foto Profil">
                                <input type="file" id="profile" name="profile"
                                    class="text-gray-500 text-sm file:py-2 file:px-4 file:border file:border-gray-300 file:rounded-lg file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button
                            class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition font-semibold">
                            Konfirmasi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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