<?php
namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return Transaction::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tipe' => 'required|string',
            'tanggal' => 'required|date',
            'kategori' => 'required|string',
            'nominal' => 'required|integer',
            'catatan' => 'nullable|string',
        ]);

        return Transaction::create($request->all());
    }
}

