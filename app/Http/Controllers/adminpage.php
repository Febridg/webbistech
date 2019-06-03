<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Adminuser;

use App\Menu;

use App\Post;

use App\Kategoripost;

use App\Page;

use App\Galeri;

use App\Kategorigaleri;

class adminpage extends Controller
{

    //function login
    public function home()
    {
        if (Session::has('username')){
            $menu = Menu::all();
            
            return view('admin.home.home', ['menu' => $menu]);
        }else{
            return view('admin.login.login');
        }
        
    }

    public function login(Request $request)
    {
        $password = md5($request->password);

        $adminuser = Adminuser::where('username',$request->username)
                                ->where('password',$password)
                                ->first();

        $cek = $adminuser->count();

        if ($cek>0) {
            Session::put('username',$adminuser->username);
            Session::put('nama',$adminuser->nama_lengkap);
            Session::put('level',$adminuser->id_level);
        }

        return redirect('/admin');
    }

    //function logout
    public function logout()
    {
        Session::flush();

        return redirect('/admin');
    }

    //function post
    public function addpost()
    {
        $menu = Menu::all();
        $kategori = Kategoripost::all();
            
        return view('admin.post.addpost', ['menu' => $menu,'kategori' => $kategori]);
    }

    public function listpost()
    {
        $menu = Menu::all();
        $post = Post::orderBy('id','desc')->get();

        return view('admin.post.listpost', ['menu' => $menu,'post' => $post]);
    }

    public function editpost($id)
    {
        $menu = Menu::all();
        $post = Post::find($id);
        $kategori = Kategoripost::all();

        return view('admin.post.editpost', ['menu' => $menu,'post' => $post,'kategori' => $kategori]);
    }

    //function kategori
    public function addkategori()
    {
        $menu = Menu::all();

        return view('admin.post.addkategori', ['menu' => $menu]);
    }

    public function listkategori()
    {
        $menu = Menu::all();
        $kategori = Kategoripost::orderBy('id','desc')->get();

        return view('admin.post.listkategori', ['menu' => $menu,'kategori' => $kategori]);
    }

    public function editkategori($id)
    {
        $menu = Menu::all();
        $kategori = Kategoripost::find($id);

        return view('admin.post.editkategori', ['menu' => $menu,'kategori' => $kategori]);
    }

    //function page
    public function addpage()
    {
        $menu = Menu::all();
            
        return view('admin.page.addpage', ['menu' => $menu]);
    }

    public function listpage()
    {
        $menu = Menu::all();
        $page = Page::orderBy('id','desc')->get();

        return view('admin.page.listpage', ['menu' => $menu,'page' => $page]);
    }

    public function editpage($id)
    {
        $menu = Menu::all();
        $page = Page::find($id);

        return view('admin.page.editpage', ['menu' => $menu,'page' => $page]);
    }

    //function gambar
    public function addgambar()
    {
        $menu = Menu::all();
        $kategori = Kategorigaleri::all();
            
        return view('admin.gambar.addgambar', ['menu' => $menu,'kategori' => $kategori]);
    }

    public function listgambar()
    {
        $menu = Menu::all();
        $galeri = Galeri::orderBy('id','desc')->get();

        return view('admin.gambar.listgambar', ['menu' => $menu,'galeri' => $galeri]);
    }

    public function editgambar($id)
    {
        $menu = Menu::all();
        $galeri = Galeri::find($id);
        $kategori = Kategorigaleri::all();

        return view('admin.gambar.editgambar', ['menu' => $menu,'galeri' => $galeri,'kategori' => $kategori]);
    }

    public function addkategorigambar()
    {
        $menu = Menu::all();

        return view('admin.gambar.addkategorigambar', ['menu' => $menu]);
    }

    public function listkategorigambar()
    {
        $menu = Menu::all();
        $kategori = Kategorigaleri::orderBy('id','desc')->get();

        return view('admin.gambar.listkategorigambar', ['menu' => $menu,'kategori' => $kategori]);
    }

    public function editkategorigambar($id)
    {
        $menu = Menu::all();
        $kategori = Kategorigaleri::find($id);

        return view('admin.gambar.editkategorigambar', ['menu' => $menu,'kategori' => $kategori]);
    }
}