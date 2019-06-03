<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Adminuser;

use App\Menu;

use App\Post;

use App\Kategoripost;

use App\Page;

use App\Galeri;

use App\Kategorigaleri;

class adminaksi extends Controller
{
    //post
    public function addpost(Request $request)
    {
        $namauser = Session::get('nama');
        $tgl = date("Y-m-d");

        $file = $request->file('image');

        $namagambar = $file->getClientOriginalName();

        $lokasi = 'gallery';
        $file->move($lokasi,$file->getClientOriginalName());

        Post::create([
    		'judul' => $request->judul,
            'kategoripost_id' => $request->kategori,
            'tag' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $namagambar,
            'author' => $namauser,
            'tgl_post' => $tgl,
            'publis' => $request->publish,
            'status' => 'reguler',
            'useradd' => $namauser,
            'useredit' => $namauser
    	]);
 
    	return redirect(env('APP_URL').'/admin/addpost');
    }

    public function editpost($id,Request $request)
    {
        $namauser = Session::get('nama');

        $tgl = date("Y-m-d");

        $file = $request->file('imageedit');

        if (empty($file)) {
            $namagambar = $request->image;
        }else {
            $namagambar = $file->getClientOriginalName();
            
            $lokasi = 'gallery';
            $file->move($lokasi,$file->getClientOriginalName());
        }

        $post = Post::find($id);
        $post->judul = $request->judul;
        $post->kategoripost_id = $request->kategori;
        $post->tag = $request->judul;
        $post->isi = $request->isi;
        $post->gambar = $namagambar;
        $post->publis = $request->publish;
        $post->useredit = $namauser;
        $post->save();

        return redirect(env('APP_URL').'/admin/editpost/'.$id);
    }

    public function deletepost($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect( env('APP_URL').'/admin/listpost');
    }

    //kategori post
    public function addkategori(Request $request)
    {
        $tag = str_replace(" ", "-", $request->nama);
        $namauser = Session::get('nama');

        Kategoripost::create([
            'nama' => $request->nama,
            'tag' => $tag,
            'useradd' => $namauser,
            'useredit' => $namauser
        ]);

        return redirect( env('APP_URL').'/admin/addkategori');
    }

    public function editkategori($id,Request $request)
    {
        $namauser = Session::get('nama');

        $tgl = date("Y-m-d");

        $tag = str_replace(" ", "-", $request->nama);

        $kategori = Kategoripost::find($id);
        $kategori->nama = $request->nama;
        $kategori->tag = $tag;
        $kategori->useredit = $namauser;
        $kategori->save();

        return redirect(env('APP_URL').'/admin/editkategori/'.$id);
    }

    public function deletekategori($id)
    {
        $kategori = Kategoripost::find($id);
        $kategori->delete();

        return redirect( env('APP_URL').'/admin/listkategori');
    }

    //page
    public function addpage(Request $request)
    {
        $namauser = Session::get('nama');
        $tgl = date("Y-m-d");

        $file = $request->file('image');

        $namagambar = $file->getClientOriginalName();

        $lokasi = 'gallery';
        $file->move($lokasi,$file->getClientOriginalName());

        Page::create([
    		'judul' => $request->judul,
            'tag' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $namagambar,
            'author' => $namauser,
            'tgl_post' => $tgl,
            'publis' => $request->publish,
            'status' => 'reguler',
            'useradd' => $namauser,
            'useredit' => $namauser
    	]);
 
    	return redirect(env('APP_URL').'/admin/addpost');
    }

    public function editpage($id,Request $request)
    {
        $namauser = Session::get('nama');

        $tgl = date("Y-m-d");

        $file = $request->file('imageedit');

        if (empty($file)) {
            $namagambar = $request->image;
        }else {
            $namagambar = $file->getClientOriginalName();
            
            $lokasi = 'gallery';
            $file->move($lokasi,$file->getClientOriginalName());
        }

        $page = Page::find($id);
        $page->judul = $request->judul;
        $page->tag = $request->judul;
        $page->isi = $request->isi;
        $page->gambar = $namagambar;
        $page->publis = $request->publish;
        $page->useredit = $namauser;
        $page->save();

        return redirect(env('APP_URL').'/admin/editpage/'.$id);
    }

    public function deletepage($id)
    {
        $page = Page::find($id);
        $page->delete();

        return redirect( env('APP_URL').'/admin/listpage');
    }

    //galeri
    public function addgambar(Request $request)
    {
        $namauser = Session::get('nama');
        $tgl = date("Y-m-d");

        $file = $request->file('image');

        $namagambar = $file->getClientOriginalName();

        $lokasi = 'gallery';
        $file->move($lokasi,$file->getClientOriginalName());

        $tag = str_replace(" ", "-", $namagambar);

        Galeri::create([
    		'judul' => $request->judul,
            'kategorigaleri_id' => $request->kategori,
            'tag' => $tag,
            'gambar' => $namagambar,
            'caption' => $request->caption,
            'author' => $namauser,
            'tgl_post' => $tgl,
            'publis' => $request->publish,
            'useradd' => $namauser,
            'useredit' => $namauser
    	]);
 
    	return redirect(env('APP_URL').'/admin/addgambar');
    }

    public function editgambar($id,Request $request)
    {
        $namauser = Session::get('nama');

        $tgl = date("Y-m-d");

        $file = $request->file('imageedit');

        if (empty($file)) {
            $namagambar = $request->image;
        }else {
            $namagambar = $file->getClientOriginalName();
            
            $lokasi = 'gallery';
            $file->move($lokasi,$file->getClientOriginalName());
        }

        $galeri = Galeri::find($id);
        $galeri->judul = $request->judul;
        $galeri->kategorigaleri_id = $request->kategori;
        $galeri->tag = $request->judul;
        $galeri->gambar = $namagambar;
        $galeri->publis = $request->publish;
        $galeri->caption = $request->caption;
        $galeri->useredit = $namauser;
        $galeri->save();

        return redirect(env('APP_URL').'/admin/editgambar/'.$id);
    }

    public function deletegambar($id)
    {
        $galeri = Galeri::find($id);

        File::delete('gallery/' . "$galeri->gambar");

        $galeri->delete();

        return redirect( env('APP_URL').'/admin/listgambar');
    }

    //kategori gambar
    public function addkategorigambar(Request $request)
    {
        $tag = str_replace(" ", "-", $request->nama);
        $namauser = Session::get('nama');

        Kategorigaleri::create([
            'nama' => $request->nama,
            'tag' => $tag,
            'useradd' => $namauser,
            'useredit' => $namauser
        ]);

        return redirect( env('APP_URL').'/admin/addkategorigambar');
    }

    public function editkategorigambar($id,Request $request)
    {
        $namauser = Session::get('nama');

        $tgl = date("Y-m-d");

        $tag = str_replace(" ", "-", $request->nama);

        $kategori = Kategorigaleri::find($id);
        $kategori->nama = $request->nama;
        $kategori->tag = $tag;
        $kategori->useredit = $namauser;
        $kategori->save();

        return redirect(env('APP_URL').'/admin/editkategorigambar/'.$id);
    }

    public function deletekategorigambar($id)
    {
        $kategori = Kategorigaleri::find($id);
        $kategori->delete();

        return redirect( env('APP_URL').'/admin/listkategorigambar');
    }

}