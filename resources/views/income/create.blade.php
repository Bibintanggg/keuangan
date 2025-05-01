@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Pemasukan</h1>

        <form action="{{ route('income.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nominal</label>
                <input type="number" name="amount" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Deskripsi (opsional)</label>
                <input type="text" name="description" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('income.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection