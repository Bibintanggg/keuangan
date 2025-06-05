<x-app-layout>

    <div class="py">
        <div class="max-w-xl mx-auto -mt-10">
            <div class="bg-white overflow-hidden shadow-sm min-h-screen">
                <div class="flex items-center justify-between p-6 text-gray-900">
                    <h1 class="text-xl font-bold mt-10 px-2">
                        Hi, {{ Auth::user()->name }}!!
                    </h1>
                    <h2 id="ucapan-waktu" class="text-xl font-bold mt-10 px-2"></h2>
                </div>

                <div class="p-6 bg-gray-700 w-[90%] mx-auto rounded-lg h-[17rem]">
                    <h1 class="text-white mx-auto text-center text-2xl">Dompet Saya</h1>
                    <div class="flex mt-5">
                        <div class="flex justify-center text-white mx-auto gap-12">
                            <div>
                                <h1 class="text-2xl text-nowrap">Total Pemasukan</h1>
                                <p class="text-xl">
                                    Rp {{ number_format($dash, 0, ',', '.') }}
                                </p>
                            </div>
                            <hr class="w-0.5 h-16 bg-white">
                            <div>
                                <h1 class="text-2xl text-nowrap">Total Pengeluaran</h1>
                                <p class="text-xl">
                                    Rp {{ number_format($expDash, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="flex items-center text-white mt-5 gap-20 justify-center">
                        <h1 class="text-xl">Saldo kamu sekarang : </h1>
                        <p class="text-lg">
                            Rp {{ number_format($saldo, 0, ',', '.') }}
                        </p>
                    </div>

                    <div class="w-10 flex gap-1 bg-white justify-center mx-auto mt-5">
                        <x-finance-icon 
                        iconTitle="Pemasukan" 
                        bgColor="bg-green-500" 
                        textColor="text-white"
                        hoverColor="bg-black"
                        route="{{ '/income' }}"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 48 48">
                                <g fill="currentColor">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                        <g fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M14.953 16.63c4.816 1.86 10.603 1.86 15.418-.002a29.3 29.3 0 0 1 5.153 7.487c.872.134 1.707.38 2.49.723c-1.427-3.644-3.841-7.186-6.436-9.838l3.694-5.4a16 16 0 0 0-1.886-1.054C30.946 7.361 27.027 6 22.711 6c-4.406 0-8.431 1.42-10.886 2.621q-.366.18-.684.35c-.427.23-.787.444-1.069.629L13.74 15c-8.59 9.038-14.99 26.997 8.971 26.997a37 37 0 0 0 4.906-.3a10 10 0 0 1-1.713-1.826q-1.472.124-3.193.126c-5.785 0-9.413-1.091-11.58-2.591c-2.075-1.437-2.986-3.37-3.115-5.632c-.134-2.35.585-5.093 1.932-7.87c1.285-2.648 3.079-5.197 5.005-7.274m14.251-1.702l2.958-4.323c-2.75.198-6.023.844-9.173 1.756c-2.25.65-4.749.551-7.065.124a25 25 0 0 1-1.737-.386l1.92 2.827c4.116 1.465 8.982 1.465 13.097.002m-15.4-5.012c.8.238 1.635.445 2.483.602c2.15.396 4.307.454 6.146-.079a54 54 0 0 1 6.53-1.471C27.123 8.414 24.972 8 22.71 8c-3.445 0-6.658.961-8.907 1.916"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M22.67 28c1.021 0 1.953.383 2.66 1.013a10 10 0 0 0-.892 2.051A2 2 0 0 0 22.67 30v4c.517 0 .988-.196 1.343-.518a10 10 0 0 0 .134 2.236A4 4 0 0 1 22.67 36v1h-2v-1a4 4 0 0 1-3.772-2.667a1 1 0 1 1 1.886-.666A2 2 0 0 0 20.67 34v-4a4 4 0 0 1 0-8v-1h2v1a4 4 0 0 1 3.772 2.667a1 1 0 1 1-1.886.666A2 2 0 0 0 22.67 24zm-2-4a2 2 0 0 0 0 4z"
                                                clip-rule="evenodd" />
                                            <path d="m35 34.42l1.19-1.067l1.335 1.49L34 38.001l-3.524-3.16l1.335-1.489L33 34.419V30h2z" />
                                            <path fill-rule="evenodd" d="M34 42a8 8 0 1 0 0-16a8 8 0 0 0 0 16m0-2a6 6 0 1 0 0-12a6 6 0 0 0 0 12"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                </g>
                            </svg>
                        </x-finance-icon>
                        <x-finance-icon 
                        iconTitle="Pengeluaran" 
                        bgColor="bg-green-500" 
                        textColor="text-white"
                        hoverColor="#022c22"
                        route="{{'/expense' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                <g fill="currentColor">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="42" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M14.325 3.75h-4.65A3.75 3.75 0 0 1 6.75 6.675v.65a3.75 3.75 0 0 1 2.925 2.925h4.65a3.75 3.75 0 0 1 2.925-2.925v-.65a3.75 3.75 0 0 1-2.925-2.925m.605-1.497q-.412-.004-.878-.003H9.948q-.466 0-.877.003a1 1 0 0 0-.164.003c-.452.008-.853.027-1.201.074c-.628.084-1.195.27-1.65.725c-.456.456-.642 1.023-.726 1.65c-.047.349-.066.75-.074 1.202a1 1 0 0 0-.003.163q-.004.413-.003.878v.104q0 .465.003.878a1 1 0 0 0 .003.163c.008.453.027.853.074 1.201c.084.628.27 1.195.726 1.65c.455.456 1.022.642 1.65.726c.348.047.749.066 1.201.074a1 1 0 0 0 .164.003q.411.004.877.003h4.104q.465 0 .878-.003a1 1 0 0 0 .163-.003c.453-.008.854-.027 1.201-.074c.628-.084 1.195-.27 1.65-.726c.456-.455.642-1.022.726-1.65a11 11 0 0 0 .074-1.201a1 1 0 0 0 .003-.163q.004-.413.003-.878v-.104q0-.465-.003-.878a1 1 0 0 0-.003-.163a11 11 0 0 0-.074-1.201c-.084-.628-.27-1.195-.725-1.65c-.456-.456-1.023-.642-1.65-.726a11 11 0 0 0-1.202-.074a1 1 0 0 0-.163-.003m.964 1.541a2.26 2.26 0 0 0 1.312 1.312a5 5 0 0 0-.023-.2c-.061-.462-.169-.66-.3-.79s-.327-.237-.788-.3a5 5 0 0 0-.2-.022m1.312 5.1a2.26 2.26 0 0 0-1.312 1.312q.105-.01.2-.022c.462-.063.66-.17.79-.3s.238-.328.3-.79q.012-.095.022-.2m-9.1 1.312a2.26 2.26 0 0 0-1.312-1.312q.01.105.023.2c.062.462.169.66.3.79s.327.237.788.3q.096.012.201.022m-1.312-5.1a2.26 2.26 0 0 0 1.312-1.312q-.105.01-.2.023c-.462.062-.66.169-.79.3s-.237.327-.3.788zM12 6.75a.25.25 0 1 0 0 .5a.25.25 0 0 0 0-.5M10.25 7a1.75 1.75 0 1 1 3.5 0a1.75 1.75 0 0 1-3.5 0m-1.566 7.448c1.866-.361 3.863-.28 5.48.684c.226.135.44.304.625.512c.376.423.57.947.579 1.473q.286-.186.577-.407l1.808-1.365a2.64 2.64 0 0 1 3.124 0c.835.63 1.169 1.763.57 2.723c-.425.681-1.065 1.624-1.717 2.228c-.66.61-1.597 1.124-2.306 1.466c-.862.416-1.792.646-2.697.792c-1.85.3-3.774.254-5.602-.123a14.3 14.3 0 0 0-2.865-.293H4a.75.75 0 0 1 0-1.5h2.26c1.062 0 2.135.111 3.168.324a14.1 14.1 0 0 0 5.06.111c.828-.134 1.602-.333 2.284-.662c.683-.33 1.451-.764 1.938-1.215c.493-.457 1.044-1.248 1.465-1.922c.127-.204.109-.497-.202-.732c-.37-.28-.947-.28-1.316 0l-1.807 1.365c-.722.545-1.61 1.128-2.711 1.304a9 9 0 0 1-.347.048q-.086.015-.179.02a10 10 0 0 1-1.932 0a.75.75 0 1 1 .141-1.493a8.5 8.5 0 0 0 1.668-.003l.03-.003a.742.742 0 0 0 .15-1.138a1.2 1.2 0 0 0-.275-.222c-1.181-.705-2.759-.822-4.426-.5a12.1 12.1 0 0 0-4.535 1.935a.75.75 0 0 1-.868-1.224a13.6 13.6 0 0 1 5.118-2.183"
                                            clip-rule="evenodd" />
                                    </svg>
                                </g>
                            </svg>
                        </x-finance-icon>
                        <x-finance-icon 
                        iconTitle="Informasi" 
                        bgColor="bg-green-500" 
                        textColor="text-white"
                        hoverColor="bg-white"
                        route="{{ '/laporan' }}"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                <g fill="currentColor">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="42" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9 17H7v-7h2zm4 0h-2V7h2zm4 0h-2v-4h2zm2 2H5V5h14v14.1M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2" />
                                    </svg>
                                </g>
                            </svg>
                        </x-finance-icon>

                    </div>

                    <hr class="bg-black w-[30rem] h-0.5 mt-10 mx-auto">

                    <div>
                        <div class="mt-5 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="42" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M9 17H7v-7h2zm4 0h-2V7h2zm4 0h-2v-4h2zm2 2H5V5h14v14.1M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2" />
                            </svg>
                            <p class="font-bold text-xl">Informasi</p>
                        </div>
                        
                        <div class="overflow-y-auto max-h-[30rem]">
                            <div class="mt-5">
                                @forelse($latestIncome as $income)
                                    <p>
                                        <span class="text-lg font-semibold">{{ Auth::user()->name }},</span> 
                                    menabung sebesar Rp. "{{ number_format($income->total, 0, ',', '.') }}"</p>
                                    <p>pada tanggal {{ $income->transaction_date }}</p>
                                    <div class="flex justify-between">
                                        <p>Keterangan :  {{ $income->deskripsi }}</p>

                                        <form action="{{ route('income.destroy', $income->id) }}" method="POST" class="inline"
                                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline ml-2">
                                                Hapus
                                            </button>                               </form>
                                    </div>

                                    <hr class="bg-black w-[30rem] h-0.5 mt-2 mb-2">


                                @empty
                            <tr><td colspan="4" class="text-center py-4">Belum ada pemasukan</td></tr>
                            @endforelse
                            </div>

                            <hr class="bg-black w-[30rem] h-0.5 mt-10 mb-2">

                            <div>
                                @forelse($latestExpense as $expense)
                                <p>
                                    <span class="text-lg font-semibold">{{ Auth::user()->name }},</span> 
                                mengeluarkan uangnya sebesar Rp. {{ number_format($expense->total, 0, ',', '.') }}</p>
                                <p>pada tanggal {{ $expense->transaction_date }}</p>
                                <hr class="bg-black w-[30rem] h-0.5 mt-2 mb-2">
                            @empty
                            <tr><td colspan="4" class="text-center py-4">Belum ada pemasukan</td></tr>
                            @endforelse
                            </div>
                        </div>
                        
                        <button onclick="toggleModal('modalPemasukan')" class="bg-blue-600 text-white px-4 py-2 rounded">Pemasukan</button>
                    <button onclick="toggleModal('modalPengeluaran')" class="bg-red-600 text-white px-4 py-2 rounded">Pengeluaran</button>

                    <x-modal-form
                    id="modalPemasukan"
                    title="Pemasukan"
                    action="{{ route('dashboard') }}"
                    icon="{{ asset('image/income.svg') }}">
                        
                    </x-modal-form>

                    <x-modal-form id="modalPengeluaran" title="Tambah Pengeluaran" action="{{ route('dashboard') }}">
                    <input type="number" name="total" class="w-full border p-2 rounded mb-2" placeholder="Nominal" required>
                    <textarea name="deskripsi" class="w-full border p-2 rounded mb-2" placeholder="Deskripsi"></textarea>
                    </x-modal-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
