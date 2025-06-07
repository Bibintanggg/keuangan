<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Income;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $expenses = Expense::where('user_id', auth()->id())->get();
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
        
        $totalIncome = Income::where('user_id', auth()->id())->sum('total');
        $totalExpense = Expense::where('user_id', auth()->id())->sum('total');
        $saldo = $totalIncome - $totalExpense;
        if ($saldo < $request->total) {
            return redirect()->back()->with('error', 'Saldo tidak mencukupi untuk pengeluaran ini.');
        }

        Expense::create([
            'total' => $request->total,
            'deskripsi' => $request->deskripsi,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('succes', 'Berhasil! Pengeluaran berhasil ditambahkan');

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
        $expenses = Expense::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
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
        return redirect()->back()->with('succes', 'Berhasil! Pengeluaran berhasil dihapus!');
        
    }
}
