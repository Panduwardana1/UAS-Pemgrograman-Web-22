<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&family=Figtree:ital,wght@0,300..900;1,300..900&family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Edit data {{ $mahasiswa->nama_lengkap }}</title>
</head>
<body>

    <x-navbar></x-navbar>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="p-6 max-w-md mx-auto bg-gray-200 text-black rounded-lg shadow-md">
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Nama</label>
                <input type="text" name="nama_lengkap" value="{{ $mahasiswa->nama_lengkap }}"
                    class="p-2 border border-black rounded w-full" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">NIM</label>
                <input type="text" name="NIM" value="{{ $mahasiswa->NIM }}" required
                    class="p-2 border border-black rounded w-full" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Program Studi</label>
                <select name="program_studi" required
                        class="p-2 border border-black rounded w-full">
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Angkatan</label>
                <input type="text" name="angkatan" min="2000" max="2025" value="{{ $mahasiswa->angkatan }}" required
                    class="p-2 border border-black rounded w-full" />
            </div>

            <div>
                <button type="submit"
                        class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-indigo-700 transition">
                    Simpan
                </button>
            </div>
        </div>
    </form>
</body>
</html>
