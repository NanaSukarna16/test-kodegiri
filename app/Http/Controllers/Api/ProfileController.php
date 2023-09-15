<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
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
    public function show(User $profile)
    {
        if (!$profile) {
            return response()->json(['message' => 'Profil pengguna tidak ditemukan'], 404);
        }

        return response()->json([
            'message' => 'Success',
            'data' => $profile,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $profile)
    {
        $validated = $request->validate([
            'nama_lengkap' => ['required', 'string', 'min:3', 'max:255'],
            'company' => ['nullable', 'string', 'min:3', 'max:255'],
            'divisi' => ['nullable', 'string', 'min:3', 'max:255'],
            'nomor_hp' => ['required', 'string', 'min:10', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($profile->id)],
        ]);

        $profile->update($validated);

        return response()->json([
            'message' => 'Success',
            'data' => $profile,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
