<x-app-layout>
    <div class="py-12 min-h-screen bg-white max-w-xl px-4 sm:px-6 lg:px-8 mx-auto -mt-4">
        <div class="max-w-4xl mx-auto">
            @if(session('Berhasil'))
                <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                    {{ session('Berhasil') }}
                </div>
            @endif

            
            
            <div class="overflow-y-auto max-h-[30rem]">
                            <div class="mt-5">
                                @forelse($latestIncomeLaporan as $income)
                                    <p>
                                        <span class="text-lg font-semibold">{{ Auth::user()->name }},</span> 
                                    menabung sebesar Rp. "{{ number_format($income->total, 0, ',', '.') }}"</p>
                                    <p>pada tanggal {{ $income->transaction_date }}</p>
                                    <div class="flex justify-between">
                                        <p>Keterangan :  {{ $income->deskripsi }}</p>

                                        <form action="{{ route('income.destroy', $income->id) }}" confirm="Yakin ingin menghapus data ini??" method="POST" 
                                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline ml-2">
                                                Hapus
                                            </button>                               
                                        </form>
                                    </div>

                                    <hr class="bg-black w-[30rem] h-0.5 mt-2 mb-2">


                                @empty
                            <tr><td colspan="4" class="text-center py-4">Belum ada pemasukan</td></tr>
                            @endforelse
                            </div>

                            <hr class="bg-black w-[30rem] h-0.5 mt-10 mb-2">

                            <div class="mt-5">
                                @forelse($latestExpenseLaporan as $expense)
                                    <p>
                                        <span class="text-lg font-semibold">{{ Auth::user()->name }},</span>
                                        menabung sebesar Rp. "{{ number_format($expense->total, 0, ',', '.') }}"
                                    </p>
                                    <p>pada tanggal {{ $expense->transaction_date }}</p>
                                    <div class="flex justify-between">
                                        <p>Keterangan : {{ $expense->deskripsi }}</p>

                                        <form action="{{ route('expense.destroy', $expense->id) }}" confirm="Yakin ingin menghapus data ini??"
                                            method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline ml-2">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>

                                    <hr class="bg-black w-[30rem] h-0.5 mt-2 mb-2">


                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4">Belum ada pengeluaran</td>
                                    </tr>
                                @endforelse
                            </div>

                            <a href="{{ url('dashboard')}}" class="bg-gray-500 text-white px-4 py-2 rounded mb-4 inline-block mt-10">Kembali</a>
                        </div>
        </div>
    </div>
</x-app-layout>
