<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming you are using a User model
use App\Models\Partai; // Assuming you have a Partai model for partai options
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StoreDaftarController extends Controller
{

    public function store(Request $request)
{

    $validatedData = $request->validate([
        'nama-lengkap' => 'required|string|max:255',
        'tempat-lahir' => 'required|string|max:255',
        'daerah' => 'required|string|max:255',
        'umur' => 'required|integer|min:1',
        'partai_id' => 'required|exists:partais,id', // Ensure partai_id exists in the partais table
        'password' => 'required|string|min:8', // Assuming you have a password confirmation field
    ]);

    $user = new User();
    $user->username = $validatedData['nama-lengkap']; // Accessing validated data directly
    $user->birth_place = $validatedData['tempat-lahir'];
    $user->origin_area = $validatedData['daerah'];
    $user->age = $validatedData['umur'];
    $user->partai_id = $validatedData['partai_id'];
    $user->password = Hash::make($validatedData['password']);


    $user->save();


    return redirect('/')
        ->with('success', 'Pendaftaran Berhasil');
}

}
