<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\partai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PostController extends Controller
{

    public function login(Request $request)
    {


    $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

    if(Auth::attempt($credentials)){
        $request->session()->regenerate();

        return redirect()->intended('/dashboard')->with('success', 'Selamat Datang');;
    }
        return back()->with('loginError', 'Login Gagal');
    }

    public function daftar(){
        $partais = partai::all();
        return view('daftar', compact('partais'));

    }
    public function showEditForm($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        $partais = Partai::all(); // Ambil data partai untuk dropdown (opsional)

        return view('user.edit', compact('user', 'partais')); // Tampilkan halaman edit
    }
    // Tambahkan di bagian atas Controller

    public function edit(Request $request, $id)
    {

            // Validasi input
            $request->validate([
                'username' => 'required|string|max:255',
                'origin_area' => 'required|string|max:255',
                'partai_id' => 'required|exists:partais,id',
                'poto' => 'nullable|mimes:jpg,jpeg,png,gif,bmp,webp|max:10240',
                'dapil' => 'required|string|max:255',
            ]);

            // Cari user berdasarkan ID
            $user = User::findOrFail($id);

            // Handle upload file gambar, jika ada
            if ($request->hasFile('poto')) {
                if ($user->poto) {
                    $this->deleteOldImage($user->poto);
                }

                // Simpan file baru
                $file = $request->file('poto');
                $nama_file = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('storage'), $nama_file);
                $user->poto = $nama_file;
            }

            // Update data pengguna
            $user->update([
                'username' => $request->input('username'),
                'origin_area' => $request->input('origin_area'),
                'partai_id' => $request->input('partai_id'),
                'poto' => $user->poto ?? $user->getOriginal('poto'),
                'dapil' => $request->input('dapil'),
            ]);

            return redirect('/profile')->with('success', 'Akun berhasil diperbarui!');

    }


/**
 * Helper untuk menghapus gambar lama
 */
protected function deleteOldImage($imagePath)
{
    if ($imagePath && file_exists(public_path('storage/' . $imagePath))) {
        unlink(public_path('storage/' . $imagePath));
    }
}







    public function store(Request $request)
    {



        $validatedData = $request->validate([
            'aktivitas' => 'required|max:255',
            'content' => 'required|mimes:jpg,jpeg,png,gif,bmp,webp|max:10240',
        ]);



        try {
            $user = Auth::user()->id;

            // Mengambil file gambar yang diunggah
            $file = $request->file('content');
            // Mendapatkan nama file gambar
            $nama_file = $file->getClientOriginalName();

            // Pindahkan file gambar ke folder penyimpanan (misalnya, public/storage/berita)
            $file->move(public_path('storage/'), $nama_file);

            // Menambahkan nama file ke dalam data yang akan disimpan
            $validatedData['content'] = $nama_file;



            // Membuat berita baru dengan data yang divalidasi
            Post::create([
                'aktivitas' => $validatedData['aktivitas'],
                'content' => $validatedData['content'],
                'user_id' => $user,
            ]);

            return redirect('/dashboard')->with('success', 'Post Berhasil Ditambahkan');
        } catch (\Exception $e) {
            // Tangani kesalahan dan kirim pesan kesalahan kembali ke tampilan
            return back()->withErrors(['error' => 'Download menambahkan galeri: ' . $e->getMessage()]);
        }
    }
}
