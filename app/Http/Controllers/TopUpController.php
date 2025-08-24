<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopUpTransaction;
use App\Models\Game;
use App\Models\Diamond;
use Illuminate\Support\Str;

class TopUpController extends Controller
{
    public function index()
    {
        $games = Game::where('is_active', true)->get();
        return view('games.index', compact('games'));
    }

    public function showGame(Game $game)
    {
        $diamonds = $game->activeDiamonds()->orderBy('price')->get();
        return view('games.show', compact('game', 'diamonds'));
    }

    public function create(Diamond $diamond)
    {
        return view('topup.create', compact('diamond'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'diamond_id' => 'required|exists:diamonds,id',
            'game_id' => 'required|string',
            'payment_method' => 'required|in:mbanking,ewallet',
        ], [
            'diamond_id.required' => 'Paket diamond harus dipilih',
            'diamond_id.exists' => 'Paket diamond tidak valid',
            'game_id.required' => 'Game ID harus diisi',
            'payment_method.required' => 'Metode pembayaran harus dipilih',
            'payment_method.in' => 'Metode pembayaran tidak valid',
        ]);

        try {
            $diamond = Diamond::findOrFail($request->diamond_id);
            
            $transaction = TopUpTransaction::create([
                'user_id' => auth()->id() ?? 1, // sementara default 1
                'diamond_id' => $diamond->id,
                'game_id' => $request->game_id,
                'amount' => $diamond->price,
                'status' => 'pending',
                'payment_code' => strtoupper(Str::random(10)),
                'payment_method' => $request->payment_method,
            ]);

            return redirect()->route('topup.show', $transaction->id)
                ->with('success', 'Top up berhasil dibuat! Silakan lakukan pembayaran.');
        } catch (\Exception $e) {
            return back()->withInput()
                ->withErrors(['error' => 'Terjadi kesalahan saat membuat top up. Silakan coba lagi.']);
        }
    }

    public function show($id)
    {
        try {
            $transaction = TopUpTransaction::with(['diamond', 'diamond.game'])->findOrFail($id);
            return view('topup.show', compact('transaction'));
        } catch (\Exception $e) {
            abort(404, 'Transaksi tidak ditemukan');
        }
    }
}
