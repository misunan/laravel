<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music as Music;

class ActionController extends Controller
{
  public function music(Request $request)
  {

    $musics = new Music();
    $musics->artist = $request->artist;
    $musics->album = $request->album;
    $musics->price = $request->price;
    $musics->summary= $request->summary;
    //dd($musics);die;
    $musics->save();
    $request->session()->flash('message', 'Insertion réussie de ' . $musics->artist);
    return redirect('/main');
  }

  public function update(Request $request)
   {
     $musics = Music::find($request->id);
     //dd($request->id);
     return view('update', ['musics' => $musics]);
   }

    public function getUpdate(Request $request)
	  {
	     $musics = Music::find($request->id);
	    //dd($request->id);
      $musics->artist = $request->artist;
      $musics->album = $request->album;
      $musics->price = $request->price;
      $musics->summary= $request->summary;
      //dd($musics);die;
      $musics->save();
      $request->session()->flash('message', 'Insertion réussie de ' . $musics->artist);

      return redirect('/main');
	  }
    public function delete(Request $request)
	  {
	    //Customer::destroy(1);
	    Music::destroy($request->id);
	    return redirect('/main');
	  }

}
