<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Herbie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-neutral-100 m-16 gap-6 font-roboto">
    <x-sidebar/>
    {{-- <div class="hidden">    {{ $lahan = 0 }}</div> --}}

    <div class="flex-grow w-full p-4 rounded-2xl">
        <h1 class="font-roboto text-2xl font-bold text-green-600 mb-2">Dashboard Perusahaan</h1>
        <div class="flex gap-2 mb-2">
            <img src="https://placehold.co/48" alt="">
            <div class="text-neutral-950">
                <h1 class="font-bold">Nama Perusahaan</h1>
                <p class="text-sm font-light">Deskripsi Perusahaan</p>
            </div>
        </div>

        <div class="flex items-center mb-6">
            <div class="flex items-center gap-2 me-8">
                <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.28578 3.42861C5.72068 3.42861 5.16828 3.59618 4.69842 3.91013C4.22856 4.22408 3.86235 4.67031 3.64609 5.19239C3.42984 5.71447 3.37326 6.28895 3.48351 6.84318C3.59375 7.39742 3.86587 7.90652 4.26545 8.3061C4.66503 8.70569 5.17413 8.97781 5.72837 9.08805C6.28261 9.19829 6.85709 9.14171 7.37917 8.92546C7.90125 8.70921 8.34748 8.343 8.66143 7.87314C8.97538 7.40328 9.14295 6.85087 9.14295 6.28578C9.14295 5.52801 8.84193 4.80128 8.3061 4.26545C7.77028 3.72963 7.04355 3.42861 6.28578 3.42861ZM6.28578 8.00008C5.94672 8.00008 5.61528 7.89954 5.33336 7.71117C5.05145 7.5228 4.83172 7.25506 4.70197 6.94181C4.57222 6.62856 4.53827 6.28388 4.60441 5.95133C4.67056 5.61879 4.83383 5.31333 5.07358 5.07358C5.31333 4.83383 5.61879 4.67056 5.95133 4.60441C6.28387 4.53827 6.62856 4.57222 6.94181 4.70197C7.25506 4.83172 7.5228 5.05145 7.71117 5.33336C7.89954 5.61528 8.00008 5.94672 8.00008 6.28578C8.00008 6.74044 7.81947 7.17648 7.49797 7.49797C7.17648 7.81947 6.74044 8.00008 6.28578 8.00008ZM6.28578 0C4.61927 0.00189054 3.02155 0.664747 1.84315 1.84315C0.664747 3.02155 0.00189054 4.61927 0 6.28578C0 8.52866 1.03644 10.9058 3.00003 13.1608C3.88234 14.1798 4.87537 15.0974 5.96077 15.8966C6.05685 15.9639 6.17132 16 6.28863 16C6.40594 16 6.52041 15.9639 6.61649 15.8966C7.6999 15.0971 8.691 14.1795 9.57152 13.1608C11.5323 10.9058 12.5716 8.52866 12.5716 6.28578C12.5697 4.61927 11.9068 3.02155 10.7284 1.84315C9.55 0.664747 7.95229 0.00189054 6.28578 0ZM6.28578 14.7144C5.10505 13.7859 1.14287 10.3751 1.14287 6.28578C1.14287 4.92179 1.68471 3.61367 2.64919 2.64919C3.61367 1.68471 4.92179 1.14287 6.28578 1.14287C7.64976 1.14287 8.95788 1.68471 9.92236 2.64919C10.8868 3.61367 11.4287 4.92179 11.4287 6.28578C11.4287 10.3737 7.4665 13.7859 6.28578 14.7144Z" fill="#0A0A0A"/>
                </svg>
                <p class="text-sm font-light">Alamat Perusahaan</p>
            </div>
            <div class="flex items-center gap-2">
                <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5718 0H1.17178C1.01265 0 0.860035 0.0632142 0.747513 0.175736C0.634991 0.288258 0.571777 0.44087 0.571777 0.6V10.8C0.571777 11.1183 0.698206 11.4235 0.923249 11.6485C1.14829 11.8736 1.45352 12 1.77178 12H14.9718C15.29 12 15.5953 11.8736 15.8203 11.6485C16.0453 11.4235 16.1718 11.1183 16.1718 10.8V0.6C16.1718 0.44087 16.1086 0.288258 15.996 0.175736C15.8835 0.0632142 15.7309 0 15.5718 0ZM8.37178 6.38625L2.71453 1.2H14.029L8.37178 6.38625ZM6.17503 6L1.77178 10.0358V1.96425L6.17503 6ZM7.06303 6.81375L7.96303 7.6425C8.07372 7.74411 8.21851 7.8005 8.36878 7.8005C8.51904 7.8005 8.66383 7.74411 8.77453 7.6425L9.67453 6.81375L14.0245 10.8H2.71453L7.06303 6.81375ZM10.5685 6L14.9718 1.9635V10.0365L10.5685 6Z" fill="#0A0A0A"/>
                    </svg>
                <p class="text-sm font-light">Email Perusahaan</p>
            </div>
        </div>

        <div class="flex gap-6 h-fit">
            <div class="flex-col flex-grow">
                <div class="flex-shrink w-full bg-neutral-50 rounded-2xl shadow-sm p-4 h-fit">
                    <div class="flex justify-between mb-2">
                        <h1 class="text-xl text-green-600 font-bold">Dashboard Lahan</h1>
                        <button id="add-lahan-modal" class="px-4 py-1 text-sm shadow-sm outline outline-1 outline-blue-600 rounded-md text-blue-600 hover:bg-neutral-200 hover:transition-all hover:duration-300">Tambah Lahan</button>
                    </div>
                    <div class="grid grid-cols-3 2xl:grid-cols-6 gap-1 overflow-y-auto">
                        @foreach($dataLahan as $index => $lahan)
                            <div class="lg:col-span-1 md:col-span-3 2xl:col-span-1 p-2 rounded-sm shadow-sm">
                                @if($lahan->foto)
                                    <img src="{{ asset($lahan->foto) }}" alt="Foto Lahan" class="w-48 h-16 rounded object-cover">
                                @else
                                    <p class="font-light text-sm text-neutral-600">Foto tidak Tersedia</p>
                                @endif
                                <h1 class="text-sm font-bold">{{ $lahan->nama_lahan }}</h1>
                                <div class="flex justify-between text-neutral-600">
                                    <p class="font-light" style="font-size: 0.75rem">{{ $lahan->lokasi }}</p>
                                    <p class="text-sm font-light" style="font-size: 0.75rem">{{ $lahan->luas }} hA</p>
                                </div>
                                <div class="flex justify-end gap-1">
                                    <button class="text-sm px-2 py-1 bg-red-600 hover:bg-red-500 rounded-md">
                                        <svg width="18" height="22" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.1646 3.81396H14.4146V3.06396C14.4146 2.46723 14.1775 1.89493 13.7555 1.47297C13.3336 1.05102 12.7613 0.813965 12.1646 0.813965H7.66455C7.06781 0.813965 6.49552 1.05102 6.07356 1.47297C5.6516 1.89493 5.41455 2.46723 5.41455 3.06396V3.81396H1.66455C1.46564 3.81396 1.27487 3.89298 1.13422 4.03363C0.993569 4.17429 0.914551 4.36505 0.914551 4.56396C0.914551 4.76288 0.993569 4.95364 1.13422 5.09429C1.27487 5.23495 1.46564 5.31396 1.66455 5.31396H2.41455V18.814C2.41455 19.2118 2.57259 19.5933 2.85389 19.8746C3.1352 20.1559 3.51673 20.314 3.91455 20.314H15.9146C16.3124 20.314 16.6939 20.1559 16.9752 19.8746C17.2565 19.5933 17.4146 19.2118 17.4146 18.814V5.31396H18.1646C18.3635 5.31396 18.5542 5.23495 18.6949 5.09429C18.8355 4.95364 18.9146 4.76288 18.9146 4.56396C18.9146 4.36505 18.8355 4.17429 18.6949 4.03363C18.5542 3.89298 18.3635 3.81396 18.1646 3.81396ZM6.91455 3.06396C6.91455 2.86505 6.99357 2.67429 7.13422 2.53363C7.27487 2.39298 7.46564 2.31396 7.66455 2.31396H12.1646C12.3635 2.31396 12.5542 2.39298 12.6949 2.53363C12.8355 2.67429 12.9146 2.86505 12.9146 3.06396V3.81396H6.91455V3.06396ZM15.9146 18.814H3.91455V5.31396H15.9146V18.814ZM8.41455 9.06396V15.064C8.41455 15.2629 8.33553 15.4536 8.19488 15.5943C8.05423 15.7349 7.86346 15.814 7.66455 15.814C7.46564 15.814 7.27487 15.7349 7.13422 15.5943C6.99357 15.4536 6.91455 15.2629 6.91455 15.064V9.06396C6.91455 8.86505 6.99357 8.67429 7.13422 8.53363C7.27487 8.39298 7.46564 8.31396 7.66455 8.31396C7.86346 8.31396 8.05423 8.39298 8.19488 8.53363C8.33553 8.67429 8.41455 8.86505 8.41455 9.06396ZM12.9146 9.06396V15.064C12.9146 15.2629 12.8355 15.4536 12.6949 15.5943C12.5542 15.7349 12.3635 15.814 12.1646 15.814C11.9656 15.814 11.7749 15.7349 11.6342 15.5943C11.4936 15.4536 11.4146 15.2629 11.4146 15.064V9.06396C11.4146 8.86505 11.4936 8.67429 11.6342 8.53363C11.7749 8.39298 11.9656 8.31396 12.1646 8.31396C12.3635 8.31396 12.5542 8.39298 12.6949 8.53363C12.8355 8.67429 12.9146 8.86505 12.9146 9.06396Z" fill="white"/>
                                        </svg>
                                    </button>
                                    <button onclick="openEditModal({{ $lahan->id }})"
                                    class="text-sm px-1 py-0.5 bg-yellow-400 hover:bg-yellow-300 rounded-md">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2258 5.19242L15.0361 1.00367C14.8968 0.864346 14.7315 0.753826 14.5494 0.678422C14.3674 0.603019 14.1723 0.564209 13.9753 0.564209C13.7783 0.564209 13.5832 0.603019 13.4012 0.678422C13.2192 0.753826 13.0538 0.864346 12.9146 1.00367L1.35425 12.564C1.21435 12.7028 1.10344 12.868 1.02796 13.05C0.952475 13.232 0.913929 13.4272 0.914558 13.6243V17.814C0.914558 18.2118 1.07259 18.5933 1.3539 18.8746C1.6352 19.1559 2.01673 19.314 2.41456 19.314H18.1646C18.3635 19.314 18.5542 19.235 18.6949 19.0943C18.8355 18.9537 18.9146 18.7629 18.9146 18.564C18.9146 18.3651 18.8355 18.1743 18.6949 18.0337C18.5542 17.893 18.3635 17.814 18.1646 17.814H8.72581L19.2258 7.31398C19.3651 7.17469 19.4757 7.00932 19.5511 6.82731C19.6265 6.64529 19.6653 6.45021 19.6653 6.2532C19.6653 6.05619 19.6265 5.86111 19.5511 5.6791C19.4757 5.49709 19.3651 5.33171 19.2258 5.19242ZM6.60425 17.814H2.41456V13.6243L10.6646 5.37429L14.8542 9.56398L6.60425 17.814ZM15.9146 8.50367L11.7258 4.31398L13.9758 2.06398L18.1646 6.25367L15.9146 8.50367Z" fill="white"/>
                                        </svg>                                            
                                    </button>
                                </div>
                            </div>
                            {{-- @if(!$dataLahan)
                            <div class="col-span-3">
                                <p class="font-light text-center text-neutral-600">404 | Data Kosong</p>
                            </div> --}}
                        @endforeach
                    </div>
                </div>
                <div class="p-4 shadow-sm bg-neutral-50 rounded-2xl mt-4">
                    <div class="flex justify-between mb-2">
                        <h1 class="text-xl text-green-600 font-bold">Dashboard Stok</h1>
                        <button id="add-stok-modal" class="px-4 py-1 text-sm shadow-sm outline outline-1 outline-blue-600 rounded-md text-blue-600 hover:bg-neutral-200 hover:transition-all hover:duration-300">Tambah Stok</button>
                    </div>
                    <div class="relative p-1 overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="table-auto text-sm w-full text-center">
                        <thead>
                            <tr>
                                <th class="py-1 bg-neutral-100 rounded">ID</th>
                                <th class="py-1 bg-neutral-100 rounded">Nama Barang</th>
                                <th class="py-1 bg-neutral-100 rounded">Persediaan</th>
                                <th class="py-1 bg-neutral-100 rounded">Satuan</th>
                                <th class="py-1 bg-neutral-100 rounded">Keterangan</th>
                                <th class="py-1 bg-neutral-100 rounded">Kelola</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($dataStok as $index => $stok)
                            <tr class="odd:bg-green-100">
                                <td class="py-1">{{ $index+1 }}</td>
                                <td class="py-1">{{ $stok->nama_barang }}</td>
                                <td class="py-1">{{ $stok->persediaan }}</td>
                                <td class="py-1">{{ $stok->satuan }}</td>
                                <td class="py-1"><p class="px-1 bg-green-600 rounded text-white">{{ $stok->keterangan }}</p></td>
                                <td class="py-1">
                                    <a href="/" class=" px-2 outline outline-1 outline-yellow-400 rounded-md text-yellow-400 hover:bg-neutral-200 hover:transition-all hover:duration-300">Edit</a>
                                    <a href="/" class=" px-2 outline outline-1 outline-red-400 rounded-md text-red-400 hover:bg-neutral-200 hover:transition-all hover:duration-300">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

            <div class="flex-none w-[300px]">
                <div class="p-4 bg-neutral-50 shadow-sm rounded-2xl h-fit">
                    <h1 class="text-xl text-green-600 font-bold mb-2">Tumbuhan Ditanam</h1>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="col-span-1">
                            <img src="https://placehold.co/134x84" alt="">
                            <p class="text-sm text-center">Kelapa Sawit</p>
                        </div>
                        <div class="col-span-1">
                            <img src="https://placehold.co/134x84" alt="">
                            <p class="text-sm text-center">Karet</p>
                        </div>
                        <div class="col-span-1">
                            <img src="https://placehold.co/134x84" alt="">
                            <p class="text-sm text-center">Tebu</p>
                        </div>
                        <div class="col-span-1">
                            <img src="https://placehold.co/134x84" alt="">
                            <p class="text-sm text-center">Teh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div id="add-modal-lahan" class="fixed z-10 inset-0 hidden">
        <div class="flex justify-center items-center h-fit bg-neutral-50 shadow-sm mt-12 rounded-xl w-1/3 h-fit mx-auto bg-opacity-75 shadow-md outline outline-1 outline-neutral-600">
            <div class="flex flex-col p-4">
                <h1 class="text-lg font-bold text-green-600">Tambah Data Lahan</h1>
                <form action="{{ route('dashboard.submitLahan') }}" method="POST" enctype="multipart/form-data" class="flex flex-col w-full">
                    @csrf
                    <label for="nama_lahan" class="text-sm text-neutral-600">Nama Lahan</label>
                    <input type="text" name="nama_lahan" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-md shadow-sm focus:outline-green-600 mb-2">
                    <label for="pemilik" class="text-sm text-neutral-600">Pemilik Lahan</label>
                    <input type="text" name="pemilik" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-md shadow-sm focus:outline-green-600 mb-2">
                    <label for="lokasi" class="text-sm text-neutral-600">Lokasi Lahan</label>
                    <input type="text" name="lokasi" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-md shadow-sm focus:outline-green-600 mb-2">
                    <label for="luas" class="text-sm text-neutral-600">Luas Lahan <i class="text-italic">(Hektar)</i></label>
                    <input type="number" name="luas" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-sm shadow-sm focus:outline-green-600 mb-2">
                    <label for="foto" class="text-sm text-neutral-600">Foto Lahan</label>
                    <input type="file" name="foto" enctype="multipart/form-data" class="bg-neutral-50 px-2 py-1 outline outline-1 outline-neutral-600 rounded-sm shadow-sm focus:outline-green-600 mb-2">
                    <label for="tgl_mulai_tanam" class="text-sm text-neutral-600">Tanggal Tanam Lahan</label>
                    <input type="date" name="tgl_mulai_tanam" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-sm shadow-sm focus:outline-green-600 mb-2">
                    <div class="flex justify-end mt-2 gap-4">
                        <button type="submit" class="px-4 py-1 bg-green-600 hover:bg-green-500 hover:transition-all hover:duration-300 rounded-md shadow-sm text-white">Tambah</button>
                        <a href="dashboard" class="px-4 py-1 bg-red-600 rounded-md shadow-sm text-white hover:bg-red-500 hover:transition-all hover:duration-300">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if($lahan)
    <div id="editModal" class="fixed z-10 inset-0 hidden">
        <div class="flex justify-center items-center h-fit bg-neutral-50 shadow-sm mt-12 rounded-xl w-1/3 h-fit mx-auto bg-opacity-75 shadow-md outline outline-1 outline-neutral-600">
            <div class="flex flex-col p-4">
                <h1 class="text-lg font-bold text-green-600">Ubah Data Lahan</h1>
                <form action="{{ route('dashboard.updateLahan', $lahan->id) }}" method="POST" id="editForm" enctype="multipart/form-data" class="flex flex-col w-full">
                    @csrf
                    <input type="text" id="id" name="id" disabled class="text-sm text-neutral-200"/>
                    <label for="nama_lahan" class="text-sm text-neutral-600">Nama Lahan</label>
                    <input type="text" id="namaLahan" name="nama_lahan" value="{{ $lahan->nama_lahan }}" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-md shadow-sm focus:outline-green-600 mb-2">
                    <label for="pemilik" class="text-sm text-neutral-600">Pemilik Lahan</label>
                    <input type="text" name="pemilik" value="{{ $lahan->pemilik }}" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-md shadow-sm focus:outline-green-600 mb-2">
                    <label for="lokasi" id="pemilik" class="text-sm text-neutral-600">Lokasi Lahan</label>
                    <input type="text" name="lokasi" value="{{ $lahan->lokasi }}" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-md shadow-sm focus:outline-green-600 mb-2">
                    <label for="luas" id="lokasi" class="text-sm text-neutral-600">Luas Lahan <i class="text-italic">(Hektar)</i></label>
                    <input type="number" id="luas" name="luas" value="{{ $lahan->luas }}" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-sm shadow-sm focus:outline-green-600 mb-2">
                    <label for="foto" class="text-sm text-neutral-600">Foto Lahan</label>
                    <img src="" id="fotoLamaPath" alt="" class="w-12 object-cover">
                    <input type="file" id="foto" name="foto" class="bg-neutral-50 px-2 py-1 outline outline-1 outline-neutral-600 rounded-sm shadow-sm focus:outline-green-600 mb-2">
                    <label for="tgl_mulai_tanam" class="text-sm text-neutral-600">Tanggal Tanam Lahan</label>
                    <input type="date" id="tglMulaiTanam" name="tgl_mulai_tanam" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-sm shadow-sm focus:outline-green-600 mb-2">
                    <div class="flex justify-end mt-2 gap-4">
                        <button type="submit" class="px-4 py-1 bg-green-600 hover:bg-green-500 hover:transition-all hover:duration-300 rounded-md shadow-sm text-white">Tambah</button>
                        <button type="button" onclick="closeModal()" class="px-4 py-1 bg-red-600 rounded-md shadow-sm text-white hover:bg-red-500 hover:transition-all hover:duration-300">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif

    <div id="add-modal-stok" class="fixed z-10 inset-0 hidden">
        <div class="flex justify-center items-center h-fit bg-neutral-50 shadow-sm mt-12 rounded-xl w-1/3 h-fit mx-auto bg-opacity-75 shadow-md outline outline-1 outline-neutral-600">
            <div class="flex flex-col p-4">
                <h1 class="text-lg font-bold text-green-600">Tambah Data Lahan</h1>
                <form action="{{ route('dashboard.submitStok') }}" method="POST" class="flex flex-col w-full">
                    @csrf
                    <label for="nama_barang" class="text-sm text-neutral-600">Nama Barang</label>
                    <input type="text" name="nama_barang" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-md shadow-sm focus:outline-green-600 mb-2">
                    <label for="persediaan" class="text-sm text-neutral-600">Persediaan</label>
                    <input type="number" name="persediaan" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-md shadow-sm focus:outline-green-600 mb-2">
                    <label for="satuan" class="text-sm text-neutral-600">Satuan</label>
                    <input type="text" name="satuan" class="px-2 py-1 outline outline-1 outline-neutral-600 rounded-sm shadow-sm focus:outline-green-600 mb-2">
                    <label for="keterangan" class="text-sm text-neutral-600">Keterangan</label>
                    {{-- <input type="text" name="keterangan" class="bg-neutral-50 px-2 py-1 outline outline-1 outline-neutral-600 rounded-sm shadow-sm focus:outline-green-600 mb-2"> --}}
                    <select name="keterangan" id="keterangan" class="bg-neutral-50 px-2 py-1 outline outline-1 outline-neutral-600 rounded-sm shadow-sm focus:outline-green-600 mb-2">
                        <option value="stok aman">Stok Aman</option>
                        <option value="stok menipis">Stok Menipis</option>
                        <option value="stok habis">Stok Habis</option>
                    </select>
                    <div class="flex justify-end mt-2 gap-4">
                        <button type="submit" class="px-4 py-1 bg-green-600 hover:bg-green-500 hover:transition-all hover:duration-300 rounded-md shadow-sm text-white">Tambah</button>
                        <a href="dashboard" class="px-4 py-1 bg-red-600 rounded-md shadow-sm text-white hover:bg-red-500 hover:transition-all hover:duration-300">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("add-lahan-modal").addEventListener("click", ()=>(document.getElementById("add-modal-lahan")).classList.remove("hidden"));
        
        function openEditModal($lahan->id) {
        fetch(`dashboard/update-lahan/${id}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('id').value = data.id;
                document.getElementById('nama_lahan').value = data.name;
                document.getElementById('editModal').classList.remove('hidden');
            });
    }

        function closeModal() {
        const modal = document.getElementById('editModal');
        modal.classList.add('hidden');
        }
    </script>
</body>
</html>