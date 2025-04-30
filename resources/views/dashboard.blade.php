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

                <div class="p-6 bg-black w-[90%] mx-auto rounded-lg h-40 ">
                    <h1 class="text-white mx-auto text-center text-2xl">My Wallet</h1>
                    <div class="flex gap-4 justify-between w-full">

                    <x-dashboard-card
                        cardTitle="Total Pemasukan"
                        :amount="$income"
                        bgColor="bg-green-500"
                        textColor="text-white"
                    />
                    <x-dashboard-card
                        cardTitle="Total Pemasukan"
                        :amount="$expense"
                        bgColor="bg-red-500"
                        textColor="text-white"
                    />
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
