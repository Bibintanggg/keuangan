<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();
        
        $totalIncome  = Transactions::where('user_id', $user->id) 
            -> where('type', 'income')
            -> sum('amount');

        $totalExpense = Transactions::where('user_id', $user->id)
            -> where('type', 'expense')
            -> sum('amount');

        $balance = $totalIncome - $totalExpense;

        return view('dashboard', [
            'income' => $totalIncome,
            'expense' => $totalExpense,
            'balance' => $balance,
        ]);
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
    }
}