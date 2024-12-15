<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisa Perusahaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="flex bg-neutral-100 m-16 gap-6 font-roboto">
    <x-sidebar />
    <div class="flex-grow p-8">
        <h1 class="text-3xl font-bold text-green-700">Analisa</h1>
        <p class="text-gray-400 mb-6">Senin, 16 Desember 2024</p>

        <div class="grid grid-cols-12 gap-6">
            <!-- Kartu Penjualan & Pengiriman -->
            <div class="col-span-8">
                <div class="grid grid-cols-2 gap-6 mb-6">
                    <!-- Kartu Penjualan -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="font-semibold text-green-700">Stok Penjualan Bulan Ini</h2>
                        <p class="text-2xl font-bold">Rp. 21,532,300</p>
                        <p class="text-gray-400">Bulan Kemarin: <b>Rp. 19,873,700</b></p>
                    </div>
                    <!-- Kartu Pengiriman -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="font-semibold text-green-700">Stok Pengiriman Bulan Ini</h2>
                        <p class="text-2xl font-bold">124,4 Ton</p>
                        <p class="text-gray-400">Bulan Kemarin: <b>113,7 Ton</b></p>
                    </div>
                </div>
                <!-- Grafik Panen -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="font-semibold text-green-700 mb-4">Grafik Panen</h2>
                    <canvas id="grafikPanen"></canvas>
                </div>
            </div>

            <!-- Harga Pasar Harian -->
            <div class="col-span-4 bg-white rounded-lg shadow p-6">
                <h2 class="text-green-700 font-bold text-2xl mb-4">Harga Pasar Harian</h2>
                <div class="space-y-6">
                    <!-- Harga per Komoditas -->
                    <div>
                        <h3 class="text-gray-700 font-medium">Kelapa Sawit</h3>
                        <canvas id="chart1" height="40"></canvas>
                        <p class="text-green-700 font-semibold mt-1">Rp. 1,220/Kg</p>
                    </div>
                    <div>
                        <h3 class="text-gray-700 font-medium">Karet</h3>
                        <canvas id="chart2" height="40"></canvas>
                        <p class="text-green-700 font-semibold mt-1">Rp. 9,300/Kg</p>
                    </div>
                    <div>
                        <h3 class="text-gray-700 font-medium">Tebu</h3>
                        <canvas id="chart3" height="40"></canvas>
                        <p class="text-green-700 font-semibold mt-1">Rp. 550/Kg</p>
                    </div>
                    <div>
                        <h3 class="text-gray-700 font-medium">Teh</h3>
                        <canvas id="chart4" height="40"></canvas>
                        <p class="text-green-700 font-semibold mt-1">Rp. 4,000/Kg</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Chart.js -->
    <script>
        // Grafik Panen
        const ctxPanen = document.getElementById('grafikPanen').getContext('2d');
        new Chart(ctxPanen, {
            type: 'bar',
            data: {
                labels: ['Lahan A', 'Lahan B', 'Lahan C', 'Lahan D', 'Lahan E', 'Lahan F', 'Lahan G', 'Lahan H'],
                datasets: [{
                    label: 'Produksi Panen (ton)',
                    data: [25, 28, 18, 22, 30, 24, 26, 27],
                    backgroundColor: '#4CAF50',
                    borderRadius: 5
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Dummy Data Harga Harian
        const chartIds = ['chart1', 'chart2', 'chart3', 'chart4'];
        const dummyData = [12, 10, 14, 13, 15, 11, 12];

        chartIds.forEach(id => {
            new Chart(document.getElementById(id), {
                type: 'line',
                data: {
                    labels: ['', '', '', '', '', '', ''],
                    datasets: [{
                        data: dummyData,
                        borderColor: '#4CAF50',
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        x: {
                            display: false
                        },
                        y: {
                            display: false
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>