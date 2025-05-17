<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Show {{ $mahasiswa->nama_lengkap }} </title>
</head>
<body class=" bg-white">

    <x-navbar></x-navbar>

<div class="p-6 max-w-md mx-auto bg-white rounded-lg bg-gray-200 pt-4 mt-4">
    <p class="p-1"><span class="font-semibold text-gray-950">Nama Lengkap :</span> {{ $mahasiswa->nama_lengkap }}</p>
    <p class="p-1"><span class="font-semibold text-gray-950">NIM :</span> {{ $mahasiswa->NIM }}</p>
    <p class="p-1"><span class="font-semibold text-gray-950">Program Studi :</span> {{ $mahasiswa->program_studi }}</p>
    <p class="p-1"><span class="font-semibold text-gray-950">Angkatan :</span> {{ $mahasiswa->angkatan }}</p>
</div>

</body>
</html>
