<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herbie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="absolute top-0 left-0 w-full z-50">
        <div class="max-w-4xl mx-auto flex items-center justify-between px-4 py-4">
            <!-- Logo -->
            <a href="/">
                <img src="/images/logo.png" alt="Herbie Logo" class="h-10">
            </a>

            <!-- Login Button -->
            <a href="/login" class="px-4 py-2 bg-green-700 hover:bg-green-800 text-[#F5F5F5] rounded-md">
                Masuk
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative w-full h-screen bg-cover bg-center" style="background-image: url('/images/bg-imgs.svg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-40"></div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full px-4">
            <div class="bg-black bg-opacity-20 p-8 rounded-lg shadow-md max-w-4xl w-full text-left">
                <h1 class="text-5xl md:text-6xl font-bold text-[#F5F5F5] opacity-80 leading-tight">
                    Be Safe Controls Environment
                </h1>
                <p class="mt-6 text-lg text-[#F5F5F5] opacity-80 leading-relaxed">
                    Secara profesional mengoptimalkan praktik terbaik koneksi intelektual yang saling bergantung dan dapat dioperasikan. Secara progresif membuat yang sudah selesai.
                </p>
                <div class="mt-8">
                    <a href="/register" class="px-6 py-3 bg-[#f5f5f5] opacity-50 hover:bg-[#2efaac] text-black text-base rounded-md font-medium">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>