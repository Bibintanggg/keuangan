@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pemasukan</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('income.create') }}" class="btn btn-primary mb-3">+ Tambah Pemasukan</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nominal</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($incomes as $income)
                <tr>
                    <td>Rp {{ number_format($income->amount, 0, ',', '.') }}</td>
                    <td>{{ $income->description ?? '-' }}</td>
                    <td>{{ $income->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('income.edit', $income->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('income.destroy', $income->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @if($incomes->isEmpty())
                <tr><td colspan="4" class="text-center">Belum ada pemasukan</td></tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
