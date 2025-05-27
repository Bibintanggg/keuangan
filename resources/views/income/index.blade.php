<x-app-layout>
    <div class="py-12 min-h-screen bg-white w-[36rem] mx-auto -mt-10">
        <div class="max-w-[38rem] mx-auto px-6">
            @if(session('Berhasil'))
                <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                    {{ session('Berhasil') }}
                </div>
            @endif

            <a href="{{ route('income.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Pemasukan</a>

            <div class="bg-white shadow overflow-hidden sm:rounded-lg overflow-x-auto">
                <table class="min-w-4 divide-y divide-gray-200 -translate-x-5">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nominal</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deskripsi</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($incomes as $income)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($income->amount, 0, ',', '.') }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $income->description ?? '-' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $income->created_at->format('d M Y') }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
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
        </div>
    </div>
</x-app-layout>