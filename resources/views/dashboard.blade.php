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

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-6">
                    <x-dashboard-card
                        title="Total Pendapatan"
                        :amount= "$totalIncome"
                        bgColor="bg-green-500"
                        textColor="text-white"
                    />
                    <x-dashboard-card
                        title="Total Pengeluaran"
                        :amount="$totalIncome"
                        bgColor="bg-red-500"
                        textColor="text-white"
                    />
                    <x-dashboard-card
                        title="Sisa Saldo"
                        :amount="$balance"
                        bgColor="bg-blue-500"
                        textColor="text-white"
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
