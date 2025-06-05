@props(['id', 'title', 'action', 'icon' => null])

<div id="{{ $id }}" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
  <div class="bg-white w-full max-w-md p-6 rounded shadow-lg">
    <img src="{{ $icon }}" />
    <h2 class="text-lg font-bold mb-4">{{ $title }}</h2>
    <form action="{{ $action }}" method="POST">
      @csrf
      {{ $slot }}
      <div class="flex justify-end mt-4">
        <button type="button" onclick="toggleModal('{{ $id }}')" class="mr-2 text-gray-600">Batal</button>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
      </div>
    </form>
  </div>
</div>