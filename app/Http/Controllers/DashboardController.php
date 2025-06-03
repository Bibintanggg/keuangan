<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use App\Models\Transactions;
use App\Models\Income;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userId = Auth::id();

        $dash = Income::where('user_id', $userId)->sum('total');
        $expDash = Expense::where('user_id', $userId)->sum('total');

        $latestIncome = Income::where('user_id', $userId)->latest()->take(10)->get();
        $latestExpense = Expense::where('user_id', $userId)->latest()->take(10)->get();

        $saldo = $dash - $expDash;
        return view('dashboard', compact('dash', 'expDash', 'saldo', 'latestIncome', 'latestExpense'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $dash = Income::findOrFail($id);
        $expDash = Expense::findOrFail($id);
        return view('dashboard.index', compact('dash', 'expDash'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $dashIncome = Income::findOrFail($id);
        $dashExpense = Expense::findOrFail($id);
        $dashIncome->delete();
        $dashExpense->delete();

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus!');
    }
}