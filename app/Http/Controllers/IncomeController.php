<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userId = Auth::id();
        $incomes = Transactions::where('user_id', $userId)
            ->where('type', 'income')
            ->latest()
            ->get();

        return view('income.index', compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('income.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'description' => 'nullable|string|max:255',
            'transaction_date' => 'required|date',
            'category_id' => 'required|exists:categories,id',
        ]);

        Transactions::create([
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'type' => 'income',
            'amount' => $request->amount,
            'description' => $request->description,
            'transaction_date' => $request->transaction_date,
        ]);

        return redirect()->route('income.index')->with('Berhasil', "Pemasukanmu Berhasil Ditambahkan!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $income = Transactions::where('id', $id)
            ->where('user_id', Auth::id())
            ->where('type', 'income')
            ->firstOrFail();

        $categories = Categories::all();

        return view('income.edit', compact('income', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'description' => 'nullable|string|max:255',
            'transaction_date' => 'required|date',
            'category_id' => 'required|exists:categories,id',
        ]);

        $income = Transactions::where('id', $id)
            ->where('user_id', Auth::id())
            ->where('type', 'income')
            ->firstOrFail();

        $income->update([
            'amount' => $request->amount,
            'description' => $request->description,
            'transaction_date' => $request->transaction_date,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('income.index')->with('Berhasil', 'Pemasukanmu Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $income = Transactions::where('id', $id)
            ->where('user_id', Auth::id())
            ->where('type', 'income')
            ->firstOrFail();

        $income->delete();

        return redirect()->route('income.index')->with('Berhasil', "Pemasukanmu Berhasil Dihapus!");
    }
}
