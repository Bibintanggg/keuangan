<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $expenses = Expense::all();
        return view('expense.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('expense.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();

        $request -> validate([
            'total' => 'required|numeric|min:1000, max: 1000000',
            'deskripsi' => 'required|string|max:60',
        ]);

        Expense::create($request->all());
        return redirect()->route('expense.index')->with('succes', 'Berhasil! Pengeluaran berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $expenses = Expense::findOrFail($id);
        return view('expense.edit', compact('expenses'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'total' => 'required|numeric|min:1000, max:1000000',
            'deskripsi' => 'required|string|max:60'
        ]);

        $expenses = Expense::findOrFail($id);
        $expenses -> update($request->all());
        return redirect()->route('expense.index')->with('succes', 'Berhasil! Pengeluaran berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $expenses = Expense::findOrFail($id);
        $expenses -> delete();
        return redirect()->route('expense.index')->with('succes', 'Berhasil! Pengeluaran berhasil dihapus!');
        
    }
}
