<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herbie - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-gray-50 shadow py-4">
        <div class="container mx-auto flex items-center justify-between px-6 ">
            <!-- Logo -->
            <a href="/">
                <img src="/images/logo.png" alt="Herbie Logo" class="h-10">
            </a>
        </div>
    </nav>

    <!-- Login Form -->
    <div class="flex items-center justify-center min-h-[80vh]">
        <div class="bg-white p-8 rounded-lg shadow-md w-[400px]">
            <!-- Title -->
            <h2 class="text-center text-green-800 text-xl font-semibold mb-6">Daftar</h2>

            <!-- Username/Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-green-800 text-sm font-medium mb-1">Masukkan Username atau E-mail</label>
                <input id="email" type="text" name="email" required class="w-full px-4 py-2 border border-green-300 rounded focus:outline-none focus:ring-1 focus:ring-green-500" />
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label for="password" class="block text-green-800 text-sm font-medium mb-1">Password</label>
                <input id="password" type="password" name="password" required class="w-full px-4 py-2 border border-green-300 rounded focus:outline-none focus:ring-1 focus:ring-green-500" />
            </div>

            <!-- Konfirmasi Password Input -->
            <div class="mb-6">
                <label for="password" class="block text-green-800 text-sm font-medium mb-1">Konfirmasi Password</label>
                <input id="password" type="password" name="password" required class="w-full px-4 py-2 border border-green-300 rounded focus:outline-none focus:ring-1 focus:ring-green-500" />
            </div>

            <!-- Submit Button -->
            <div class="mb-6">
                <button class="w-full bg-green-600 hover:bg-green-500 text-white font-semibold py-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                    Daftar
                </button>
            </div>

            <!-- Social Login -->
            <p class="text-center text-green-600 text-sm mb-4">atau Daftar dengan</p>
            <div class="flex justify-center space-x-4 mb-6">
                <!-- Google Icon -->
                <a href="#" class="p-2 rounded-full border border-green-300 text-green-600 hover:bg-green-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 11h-6v2h3.594c-.402 2.834-2.68 4-5.594 4-3.313 0-6-2.686-6-6 0-3.314 2.687-6 6-6 1.432 0 2.75.504 3.769 1.333l1.438-1.666c-1.521-1.282-3.501-2.167-5.707-2.167-4.418 0-8 3.581-8 8 0 4.418 3.582 8 8 8 4.063 0 7.429-2.958 7.929-7h2.071v-3z" />
                    </svg>
                </a>
                <!-- Facebook Icon -->
                <a href="#" class="p-2 rounded-full border border-green-300 text-green-600 hover:bg-green-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12c0-5.523-4.477-10-10-10s-10 4.477-10 10c0 5.013 3.675 9.15 8.438 9.877v-6.987h-2.54v-2.894h2.54v-2.206c0-2.514 1.492-3.895 3.777-3.895 1.094 0 2.239.195 2.239.195v2.467h-1.261c-1.244 0-1.63.773-1.63 1.563v1.876h2.773l-.443 2.894h-2.33v6.987c4.763-.727 8.438-4.864 8.438-9.877z" />
                    </svg>
                </a>
                <!-- X Icon -->
                <a href="#" class="p-2 rounded-full border border-green-300 text-green-600 hover:bg-green-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 3L21 21M21 3L3 21" stroke="currentColor" stroke-width="2" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

</body>

</html>