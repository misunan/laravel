<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music as Music;

class NavController extends Controller
{
    public function main()
    {
      $musics = Music::all();
      return view('main', ['musics' => $musics]);
    }

}
