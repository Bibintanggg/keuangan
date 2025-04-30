@props(['cardTitle', 'amount', 'bgColor', 'textColor'])


<div class="p-4 rounded shadow ">
    <h2 class="text-lg font-semibold text-white">{{ $cardTitle }}</h2>
    <p class="text-2xl {{ $textColor }}">Rp {{ number_format($amount, 0, ',', '.') }}</p>
</div>