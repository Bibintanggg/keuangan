<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Categories;  
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $incomes = Income::where('user_id', Auth::id())->get();
        return view('income.index', compact('incomes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('income.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $request -> validate([
            'total' => 'required|numeric|min:1000, max:1000000',
            'deskripsi' => 'required|string|max:60',
        ]);

        Income::create([
            'total' => $request->total,
            'deskripsi' => $request->deskripsi,
            'user_id' => auth()->id(),
        ]);
        return redirect()->route('income.index')->with('succes,', ' Pemasuka berhasil ditambahkan!');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $income = Income::findOrFail($id);
        return view('income.edit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'total' => 'required|numeric|min:1000,max:1000000',
            'deskripsi' => 'required|string|max:60'
        ]);

        $income = Income::findOrFail($id);
        $income -> update(attributes: $request -> all());
        return redirect()->route('income.index')->with('succes', 'Pemasukan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tugas = Income::findOrFail($id);
        $tugas->delete();
        return redirect()->route('income.index')->with('succes', 'Berhasil! Pemasukan berhasil dihapus!');
    }
}
