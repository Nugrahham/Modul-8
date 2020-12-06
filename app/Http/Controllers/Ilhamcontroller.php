<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illumintate\support\facedes\DB;
use App\Models\music;

class Ilhamcontroller extends Controller
{
    public function index(){
        echo "praktikum Pemorgraman WEB <br>";
        echo "Nama      : Ilham Nugraha <br>";
        echo "NPM       : 187006036 <br>";
        echo "Kelas     : A <br>";
        echo "Kelompok  : 5 <br>";
    }
    public function getAllPostsUsingModel()
{
        $posts = music::all();
        return $posts;
    }
}
