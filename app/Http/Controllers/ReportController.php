<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Menampilkan daftar laporan
     */
    public function index()
    {
        // nanti bisa ambil data dari model, misal: $reports = Report::all();
        return view('report.index'); // resources/views/report/index.blade.php
    }

    /**
     * Tampilkan form untuk membuat laporan baru
     */
    public function create()
    {
        return view('report.create'); // resources/views/report/create.blade.php
    }

    /**
     * Simpan laporan baru ke database
     */
    public function store(Request $request)
    {
        // validasi input
        $validated = $request->validate([
            // contoh: 'title' => 'required|string|max:255',
            // 'description' => 'nullable|string',
        ]);

        // simpan data, contoh:
        // Report::create($validated);

        return redirect()->route('report.index')->with('success', 'Laporan berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail laporan
     */
    public function show($id)
    {
        // ambil data laporan berdasarkan id
        // $report = Report::findOrFail($id);
        return view('report.show', compact('id')); // resources/views/report/show.blade.php
    }

    /**
     * Hapus laporan
     */
    public function destroy($id)
    {
        // hapus laporan, contoh:
        // $report = Report::findOrFail($id);
        // $report->delete();

        return redirect()->route('report.index')->with('success', 'Laporan berhasil dihapus.');
    }
}
