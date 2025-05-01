<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $userId = Auth::id();
        $incomes = Transactions::where('user_id', $userId)
        ->where('type','income')
        ->latest()
        ->get();
        
        return view('income.index', compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('income.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'amount' => 'required|numeric|max:0',
            'description' => 'required|string|max:255'
        ]);

        Transactions::create([
            'user_id' => Auth::id(),
            'type' => 'income',
            'amount' => $request->amount,
            'description' => $request->description
        ]);

        return redirect()->route('income.index')->with('Berhasil', "Pemasukanmu Berhasil Ditambahkan!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $income = Transactions::where('id', $id)
        ->where('user_id', Auth::id())
        ->where('type', 'income')
        ->firstOrFail();

        return view('income.edit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request -> validate([
            'amount' => 'required|numeric|max:00',
            'description' => 'reuired|string|max:200'
        ]);

        $income = Transactions::where('id', $id)
            ->where('user_id', Auth::id())
            ->where('type', 'income')
            ->firstOrFail();

        $income->update([
            'amount' => $request->amount,
            'description' => $request->description,
        ]);

        return redirect()->route('income.update')->with('Berhasil', 'Pemasukanmu Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $income = Transactions::where('id', $id)
        -> where('user_id', Auth::id())
        -> where ('type', 'income')
        -> firstOrFail();

        $income -> delete();

        return redirect()->route('income.index')->with('Berhasil', "Pemasukanmu Berhasil Dihapus!");
    }
}
