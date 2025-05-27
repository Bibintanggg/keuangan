<a href={{ $route }} class="p-4 {{ $bgColor }} rounded-lg flex items-center gap-3 hover:{{ $hoverColor }} transition-all duration-100">
    <div class="text-white flex flex-col items-center h-[3rem] w-[5rem]">
        {{ $slot }}
        <p class="font-bold">{{ $iconTitle }}</p>
    </div>
    
</a>