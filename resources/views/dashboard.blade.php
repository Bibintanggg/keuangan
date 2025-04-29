<x-app-layout>

    <div class="py">
        <div class="max-w-xl mx-auto px-8">
            <div class="bg-white overflow-hidden shadow-sm min-h-screen">
                <div style="background-color: blue; width: 50%; height: 50%;"></div>
                <div class="p-6 text-gray-900">
                    <h1 class="text-xl font-bold py-4 px-2">
                        Hi, {{  Auth::user()->name }}!!
                    </h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
