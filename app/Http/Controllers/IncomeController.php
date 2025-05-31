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
        $incomes = Income::all();
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
            'total' => 'required|numeric|max:1',
            'deskripsi' => 'required|string|max:60',
        ]);

        Income::create($request->all());
        return redirect()->route('income.index')->with('succes,', ' Pemasuka berhasil ditambahkan!');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $incomes = Income::findOrFail($id);
        return view('income.edit', compact('incomes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'total' => 'required|numeric|max:0',
            'deskripsi' => 'required|string|max:60'
        ]);

        $income = Income::findOrFail($id);
        $income -> update($request -> all());
        return redirect()->route('income.index')->with('succes', 'Pemasukan berhasil di perbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tugas = Income::findOrFail($id);
        $tugas->delete();
        return redirect()->route('tugas.index');
    }
}
