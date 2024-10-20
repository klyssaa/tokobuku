<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Menampilkan daftar semua buku.
     */
    public function index()
    {
        $bukus = Buku::all();
        return response()->json($bukus);
    }

    /**
     * Menambahkan buku baru ke dalam database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'harga' => 'required|numeric|min:1000',
            'stok' => 'required|integer|min:0',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        $buku = Buku::create($validatedData);
        return response()->json([
            'message' => 'Buku berhasil ditambahkan',
            'data' => $buku
        ], 201);
    }

    /**
     * Menampilkan detail buku berdasarkan id.
     */
    public function show($id)
    {
        $buku = Buku::find($id);
        if (!$buku) {
            return response()->json([
                'message' => 'Buku tidak ditemukan'
            ], 404);
        }
        return response()->json($buku);
    }

    /**
     * Mengupdate data buku yang sudah ada.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'sometimes|required|string|max:255',
            'penulis' => 'sometimes|required|string|max:255',
            'harga' => 'sometimes|required|numeric|min:1000',
            'stok' => 'sometimes|required|integer|min:0',
            'kategori_id' => 'sometimes|required|exists:kategoris,id',
        ]);
        $buku = Buku::find($id);

        if (!$buku) {
            return response()->json([
                'message' => 'Buku tidak ditemukan'
            ], 404);
        }

        $buku->update($validatedData);

        return response()->json([
            'message' => 'Buku berhasil diupdate',
            'data' => $buku
        ]);
    }

    /**
     * Menghapus buku dari database.
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);

        if (!$buku) {
            return response()->json([
                'message' => 'Buku tidak ditemukan'
            ], 404);
        }

        $buku->delete();

        return response()->json([
            'message' => 'Buku berhasil dihapus'
        ]);
    }


 /**
     * mencari buku dengan judul.
     */
    public function searchByTitle($judul)
{
    $buku = Buku::where('judul', 'like', "%{$judul}%")->get();
    
    if ($buku->isEmpty()) {
        return response()->json([
            'message' => 'Buku tidak ditemukan',
        ], 404);
    }

    return response()->json($buku);
}

}