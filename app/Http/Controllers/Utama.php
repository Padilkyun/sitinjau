<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\edu;
use App\Models\experience;
use App\Models\partai;
use App\Models\follow;
use Illuminate\Support\Facades\Auth;
use jcobhams\NewsApi\NewsApi;

class Utama extends Controller
{
    public function dashboard()
    {
        // Get all posts
        $post = Post::with('user')->get();

        // Get the authenticated user
        $user = Auth::user(); // Returns the authenticated user or null if no user is logged in
        $partai = $user ? $user->partai : null;

        $response = Http::withOptions(['verify' => false])->get('https://newsapi.org/v2/top-headlines', [
            'apiKey' => '201979a8f0d24803a0919b973729ac25', 
            'country' => 'us',
            'category' => 'technology',
        ]);


        // Check if the response is successful
        if ($response->successful()) {
            $news = $response->json()['articles']; // Accessing the articles from the response
        } else {
            $news = [];
            // Optionally handle the error or log it
            \Log::error('News API request failed with status: ' . $response->status());
        }

        // Pass posts, user, partai, and news to the view
        return view('index', compact('post', 'user', 'partai', 'news'));
    }


    public function profile()
    {

        $user = Auth::user();
        $edu = edu::where('user_id', $user->id)->with('user')->get();
        $post = Post::where('user_id', $user->id)->with('user')->get();
        $exp = experience::where('user_id', $user->id)->with('user')->get();
        $partai = $user ? $user->partai : null;
        $partais = partai::all();
        $follow = follow::with('follower')->where('followed_id', $user->id)->get();
        $follows = follow::with('follower')->where('follower_id', $user->id)->get();

        $followingCount = follow::where('follower_id', $user->id)->count();

        return view('/profile',compact('user','exp', 'post','edu','partai','partais','follow','follows', 'followingCount'));
    }
    public function caleg()
    {
        $user = User::all();
        return view('/calegLain', compact('user'));
    }
    public function help()
    {
        return view('/bantuan');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'aktivitas' => 'required|max:255',
            'content' => 'required|mimes:jpg,jpeg,png,gif,bmp,webp|max:10240',
        ]);


        try {
            // Mengambil file gambar yang diunggah
            $file = $request->file('content');
            // Mendapatkan nama file gambar
            $nama_file = $file->getClientOriginalName();

            // Pindahkan file gambar ke folder penyimpanan (misalnya, public/storage/berita)
            $file->move(public_path('storage/'), $nama_file);

            // Menambahkan nama file ke dalam data yang akan disimpan
            $validatedData['content'] = $nama_file;

            dd('$validatedData');

            // Membuat berita baru dengan data yang divalidasi
            Post::create([
                'aktivitas' => $validatedData['aktivitas'],
                'content' => $validatedData['content'],
            ]);

            return redirect('/profile')->with('success', 'Download Berhasil Ditambahkan');
        } catch (\Exception $e) {
            // Tangani kesalahan dan kirim pesan kesalahan kembali ke tampilan
            return back()->withErrors(['error' => 'Download menambahkan galeri: ' . $e->getMessage()]);
        }
    }

    public function logout(Request $request)
    {

        // Logout user
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token to ensure security
        $request->session()->regenerateToken();

        // Redirect to the home or login page
        return redirect('/')->with('message', 'You have been logged out successfully.');
    }

}
