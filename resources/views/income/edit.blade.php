<x-app-layout>
    <div class="container">
        <h1>Edit Pemasukan</h1>

        <form action="{{ route('income.update', $income->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nominal</label>
                <input type="number" name="total" value="{{ $income->total }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Deskripsi (opsional)</label>
                <input type="text" name="deskripsi" value="{{ $income->deskripsi }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('income.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    </x-app-layout>