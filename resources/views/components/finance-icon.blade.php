<button class="p-4 {{ $bgColor }} rounded-lg flex items-center gap-3">
    <div class="text-white flex flex-col items-center h-[3.5rem] w-[8rem]">
        {{ $slot }}
        <p class="font-bold">{{ $iconTitle }}</p>
    </div>
    
</button>