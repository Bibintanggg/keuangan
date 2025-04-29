<x-app-layout>

    <div class="py">
        <div class="max-w-xl mx-auto -mt-10">
            <div class="bg-white overflow-hidden shadow-sm min-h-screen">
                <div class="bg-black"></div>
                <div class="p-6 text-gray-900">
                    <h1 class="text-xl font-bold mt-10 px-2">
                        Hi, {{  Auth::user()->name }}!! !
                    </h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
