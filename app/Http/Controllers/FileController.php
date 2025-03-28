<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ilumminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function uploadProfilePicture(Request $request){
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $path = $request->file('profile_picture')->store('public/profiles');

        return back()->with('success','Foto de perfil cargada correctamente.');
    }

    public function uploadResume(Request $request){
        $request->validate([
            'resume' => 'required|mimes:pdf|max:2048',
        ]);

        $path = $request->file('resume')->store('private/resumes');
        return back()->with('success','Hoja de vida cargada correctamente.');
    }
}
