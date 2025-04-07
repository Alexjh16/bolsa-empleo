<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ilumminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class FileController extends Controller
{
    public function uploadResume(Request $request, User $user){
        $request->validate([
            'resume' => 'nullable|mimes:pdf|max:2048',
            'profile_picture' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = [];

        if ($request->hasFile('resume')) {
            $data['resume'] = $request->file('resume')->store('resumes');
        }

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('photo_profile');
        }
        
        // Solo se actualizarán los campos que tengan valores
        if (!empty($data)) {
            User::where('id', Auth::id())->update($data);
        }

        return redirect()->route('jobs.index')->with('success', 'Archivo enviado correntamnente');    
    }
}
