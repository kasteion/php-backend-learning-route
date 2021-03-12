<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
//use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        //Vista posts/index.blade.php
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //salvar
        $post = Post::create([
            'user_id' => auth()->user()->id,
        ] + $request->all());
        //var_dump($request->all());

        //imagen
        if ($request->file('file')){
            // Si recibimos un archivo tenemos que guardarlo en nuestro servidor y así crear una ruta hacia el archivo...
            // En la base de datos guardamos la ruta, no el archivo.
            $post->image = $request->file('file')->store('posts', 'public');
            $post->save();
        }

        //retornar
        return back()->with('status', 'Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        //$post->update($request->all());
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'iframe' => $request->iframe
        ]);
        //imagen
        if ($request->file('file')){
            // Necesitamos eliminar la imágen primero
            Storage::disk('public')->delete($post->image);
            $post->image = $request->file('file')->store('posts', 'public');
            $post->save();
        }
        
        return back()->with('status', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // Eliminación de la imagen.
        Storage::disk('public')->delete($post->image);
        $post->delete();
        
        return back()->with('status', 'Deleted Successfully');
    }
}
