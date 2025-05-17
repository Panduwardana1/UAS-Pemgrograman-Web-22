<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    <div class="p-6 max-w-md mx-auto bg-gray-200 text-black rounded-lg shadow-md">
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Nama</label>
            <input type="text" name="nama_lengkap" required
                class="p-2 border border-black rounded w-full" />
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">NIM</label>
            <input type="text" name="NIM" required
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
            <input type="text" name="angkatan" min="2000" max="2025" required
                class="p-2 border border-black rounded w-full" />
        </div>

        <div>
            <button type="submit"
                    class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-indigo-700 transition">
                Simpan
            </button>
        </div>

        {{ $slot }}
    </div>
</form>
