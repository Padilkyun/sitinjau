<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\experience;
use App\Models\Post;
use App\Models\edu;
use Illuminate\Support\Facades\Auth;

class pengalaman extends Controller
{
    public function storedu(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'start_year' => 'required|integer|between:2000,2045',
            'expiry_year' => 'required|integer|between:2000,2045',
            'image' => 'required|mimes:jpg,jpeg,png,gif,bmp,webp|max:10240',
        ]);

        $user = Auth::user()->id;
        $file = $request->file('image');

            $nama_file = $file->getClientOriginalName();
            $file->move(public_path('storage/'), $nama_file);
            $validatedData['image'] = $nama_file;


        edu::create([
            'judul' => $request->input('title'),
            'tahun_mulai' => $request->input('start_year'),
            'tahun_berakhir' => $request->input('expiry_year'),
            'user_id' => $user,
            'image' => $validatedData['image'],
        ]);

        return redirect()->back()->with('success', 'Education added successfully!');
    }

    public function storeexp(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'employment_type' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'start_year' => 'required|integer|between:2000,2045',
            'expiry_year' => 'required|integer|between:2000,2045',
            'description' => 'nullable|string',
            'image' => 'required|mimes:jpg,jpeg,png,gif,bmp,webp|max:10240',
        ]);

        $user = Auth::user()->id;
        $file = $request->file('image');

            $nama_file = $file->getClientOriginalName();
            $file->move(public_path('storage/'), $nama_file);
            $validatedData['image'] = $nama_file;


        experience::create([
            'judul' => $request->input('title'),
            'perusahaan' => $request->input('company'),
            'jabatan' => $request->input('employment_type'),
            'lokasi' => $request->input('location'),
            'tahun_mulai' => $request->input('start_year'), // Tambahkan ID partai
            'tahun_berakhir' => $request->input('expiry_year'),
            'deskripsi' => $request['description'],
            'user_id' => $user,
            'lembaga' => $validatedData['image'],
        ]);

        return redirect()->back()->with('success', 'Experience added successfully!');
    }
}
