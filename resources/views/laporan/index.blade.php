<x-app-layout>
    <div class="py-12 min-h-screen bg-white max-w-xl px-4 sm:px-6 lg:px-8 mx-auto -mt-4">
        <div class="max-w-4xl mx-auto">
            @if(session('Berhasil'))
                <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                    {{ session('Berhasil') }}
                </div>
            @endif

            
            <div class="bg-white rounded-lg shadow overflow-x-auto">
                <table class="min-w-[640px] w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Nominal</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Deskripsi</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Tanggal</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($latestIncomeLaporan as $income)
                            <tr>
                                <td class="px-4 py-3 whitespace-nowrap">Rp {{ number_format($income->total, 0, ',', '.') }}</td>
                                <td class="px-4 py-3 whitespace-nowrap">{{ $income->deskripsi ?? '-' }}</td>
                                <td class="px-4 py-3 whitespace-nowrap">{{ $income->transaction_date->format('d M Y') }}</td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <a href="{{ route('income.edit', $income->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                                    <form action="{{ route('income.destroy', $income->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Yakin ingin menghapus?')" class="text-red-500 hover:underline ml-2">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="4" class="text-center py-4">Belum ada pemasukan</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="flex gap-5">
                    <a href="{{ route('income.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block mt-10">+ Tambah Pemasukan</a>
                    <a href="{{ url('dashboard')}}" class="bg-gray-500 text-white px-4 py-2 rounded mb-4 inline-block mt-10">Kembali</a>
                </div>
        </div>
    </div>
</x-app-layout>
