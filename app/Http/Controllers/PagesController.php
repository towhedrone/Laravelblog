<?php
namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller{
    Public function getIndex(){
        $posts =Post::orderBy('created_at','desc')->limit(4)->get();
           return view('pages.welcome')->withPosts($posts);
    }
    public function getAbout(){
           $first='Towhed';
        $last='Rhanman';
        $full=$first ." ".$last;
        $email='tohed@gmail.com';
        $data=[];
        $data['fullname']=$full;
        $data['email']=$email;
            return view('pages/about')->withData($data);
    }
    public function getContact(){
            return view('pages/contact');
    }

}








?>