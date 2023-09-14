<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
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
    public function show(User $profile)
    {
        return view('Profile.index', [
            'user' => $profile,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $profile)
    {
        return view('Profile.edit', [
            'user' => $profile,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $profile, FileUploader $fileUploader)
    {
        $validated = $request->validate([
            'nama_lengkap' => ['required', 'string', 'min:3', 'max:255'],
            'nomor_hp' => ['required', 'string', 'min:10', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($profile->id)],
        ]);

        $profile->update(
            array_merge(
                $validated,
                [
                    'foto_profil' => $fileUploader->upload($request->file('foto_profile'), 'avatar'),
                ]
            )
        );

        return redirect()
            ->route('profile.show', $profile->id)
            ->with('status', 'Profile successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
