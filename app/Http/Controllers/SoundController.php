<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sound; // pastikan ada model Sound

class SoundController extends Controller
{
    public function index()
    {
        $sounds = Sound::all(); // ambil semua data sound
        return view('sound.index', compact('sounds')); // pastikan view sesuai
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_sound' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'kapasitas' => 'required|integer',
            'harga' => 'required|numeric',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'video' => 'nullable|mimes:mp4,mov,avi|max:10240',
        ]);

        // Simpan data ke database
        Sound::create($validated);

        return redirect()->route('sound.index')->with('success', 'Data berhasil disimpan.');
    }
}