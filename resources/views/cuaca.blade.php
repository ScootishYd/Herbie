<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuaca Perusahaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="flex bg-neutral-100 m-16 gap-6 font-roboto">
    <x-sidebar />
    <div class="flex-grow p-8">
        <h1 class="text-3xl font-bold text-green-700">Cuaca</h1>
        <p class="text-gray-400 mb-6">Senin, 16 Desember 2024</p>
        <div id="weather-data" class="grid grid-cols-2 lg:grid-cols-4 gap-6 "></div>
        <script>
            // API Key Anda
            const apiKey = 'e5dc526028b64c8e8f945337241512';
            const city = 'Sumatera Selatan';

            // URL API (ganti dengan kota yang diinginkan)
            const apiUrl = `http://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${city}&lang=id`;

            // Fetch data cuaca
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    console.log(data); // Lihat data lengkap di konsol

                    // Parsing data cuaca
                    const location = data.location.name;
                    const temperature = data.current.temp_c;
                    const condition = data.current.condition.text;
                    const icon = data.current.condition.icon;

                    // Menampilkan data cuaca di HTML
                    document.getElementById('weather-data').innerHTML = `
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-lg font-semibold mb-2">Lokasi: ${location}</h2>
                        <p>Suhu: ${temperature} °C</p>
                        <p>Kondisi: ${condition}</p>
                        <img src="https:${icon}" alt="${condition}" class="mt-4">
                    </div>
                `;
                })
                .catch(error => console.error('Gagal mengambil data:', error));
        </script>
</body>

</html>