<div class="flex bg-black text-white">
    <div class="flex p-4 justify-content-center">
        <a href="{{ route('mahasiswa.index') }}" class="px-4 p-1 hover:text-gray-400 font-bold">Index</a>
        <a href="{{ route('mahasiswa.create') }}" class="px-4 bg-yellow-700 p-1 rounded-sm hover:bg-white hover:text-black">Create</a>
        {{ $slot }}
    </div>
</div>
