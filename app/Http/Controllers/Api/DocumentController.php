<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class   DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $documents = Document::all();

        if ($documents->isEmpty()) {
            return response()->json(['message' => 'Tidak ada dokumen yang tersedia'], 404);
        }

        return response()->json([
            'message' => 'Success',
            'data' => $documents,
        ], 200);
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
    public function show(Document $document)
    {
        if (!$document) {
            return response()->json(['message' => 'Document pengguna tidak ditemukan'], 404);
        }

        return response()->json([
            'message' => 'Success',
            'data' => $document,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'content' => ['required', 'string'],
        ]);

        $document->update($validated);

        return response()->json([
            'message' => 'Success',
            'data' => $document,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        if (!$document) {
            return response()->json(['message' => 'Dokumen tidak ditemukan'], 404);
        }

        $document->delete();

        return response()->json(['message' => 'Dokumen berhasil dihapus'], 200);
    }
}
