<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&family=Figtree:ital,wght@0,300..900;1,300..900&family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Data mahasiswa</title>
</head>
<body>

    <x-navbar>
        <div class="px-4">
            {{-- <a href="">Home</a> --}}
        </div>
    </x-navbar>

    <h1 class=" text-2xl font-bold justify-content-center py-4 text-center">Data mahasiswa</h1>
    <table class="table-auto w-full border-collapse border border-gray-300 rounded-lg shadow-md">
    <thead class="bg-gray-100">
        <tr class="border border-gray-300">
            <th class=" border border-bottom bg-gray-100">No</th>
            <th class=" border border-bottom bg-gray-100">Nama</th>
            <th class=" border border-bottom bg-gray-100">NIM</th>
            <th class=" border border-bottom bg-gray-100">Jurusan</th>
            <th class=" border border-bottom bg-gray-100">Angkatan</th>
            <th class=" border border-bottom bg-gray-100">Option</th>
        </tr>
    </thead>
    <tbody class="border border-gray-300">
        @foreach($mahasiswa as $mhs)
        <tr class="hover:bg-gray-100">
            <td class=" border border-bottom bg-gray-50 p-1 text-center">{{ $mhs->id }}</td>
            <td class=" border border-bottom bg-gray-50 p-1 text-center">{{ $mhs->nama_lengkap }}</td>
            <td class=" border border-bottom bg-gray-50 p-1 text-center">{{ $mhs->NIM }}</td>
            <td class=" border border-bottom bg-gray-50 p-1 text-center">{{ $mhs->program_studi }}</td>
            <td class=" border border-bottom bg-gray-50 p-1 text-center">{{ $mhs->angkatan }}</td>
            <td class="border border-gray-300 px-4 py-2 space-x-2">
                <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="text-blue-600 hover:underline">Show</a>
                <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                        class="text-red-600 hover:underline">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
