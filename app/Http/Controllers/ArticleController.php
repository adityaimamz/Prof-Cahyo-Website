<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\article;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = article::all();
        return view('admin.article.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = 'Gambar_Article';
        $file = $request->file('gambar');
        $fileName = $file->getClientOriginalName();

        // Upload the file to the public/uploads directory
        $file->move(public_path('uploads'), $fileName);

        Article::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'meta_judul' => $request->meta_judul,
            'meta_deskripsi' => $request->meta_deskripsi,
            'konten' => $request->konten,
            'gambar' => $path . '/' . $fileName,
        ]);

        return redirect()->route('article.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $path = 'Gambar_Article';
        $file = $request->file('gambar');
        $fileName = $file->getClientOriginalName();

        // Upload the file to the public/uploads directory
        $file->move(public_path('uploads'), $fileName);

        $data = [
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'meta_judul' => $request->meta_judul,
            'meta_deskripsi' => $request->meta_deskripsi,
            'konten' => $request->konten,
            'gambar' => $path . '/' . $fileName,
        ];

        Article::where('id', $id)->update($data);

        return redirect()->route('article.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        article::where('id', $id)->delete();
        return redirect()->route('article.index');
    }
}
