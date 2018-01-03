<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Filmovi;
use App\Zanr;

class FilmoviController extends Controller
{
   public function submit(Request $request){
     $this->validate($request, [
       'naslov'=>'required',
       'zanr'=>'required',
       'godina'=>'required',
       'trajanje'=>'required',
       'slika'=>'image|nullable|max:1999'
     ]);

     //File upload
     if($request->hasFile('slika')){
       $filenameWithExt=$request->file('slika')->getClientOriginalName();
       $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
       $extension=$request->file('slika')->getClientOriginalExtension();
       $newFilename=$filename.'_'.time().'.'.$extension;
       $path=$request->file('slika')->storeAs('public/slike',$newFilename);
     }
     else {
       $newFilename='noimage.jpg';
     }

     //Create New Film
     $filmovi=new Filmovi;
     $filmovi->naslov = $request->input('naslov');
     $filmovi->id_zanr = $request->input('zanr');
     $filmovi->godina = $request->input('godina');
     $filmovi->trajanje = $request->input('trajanje');
     $filmovi->slika = $newFilename;

     //Save Film
     $filmovi->save();

     //Redirect
     return redirect('/unos')->with('success', 'Podaci su upisani u bazu!');
   }

    //Get Filmovi And Zanr
    public function getFilmoviAndZanr(){
      $filmovi= Filmovi::orderBy('naslov')->get();
      //$zanr=Zanr::all();
      $zanr=Zanr::orderBy('naziv')->get();
      return view ('unos')->with('filmovi', $filmovi)->with('zanr', $zanr);
    }

    //Delete Film
    public function destroy($id){
      $film=Filmovi::find($id);
        if($film->slika != 'noimage.jpg'){
        Storage::delete('public/slike/'.$film->slika);
      }
        $film->delete();
        return redirect ('unos')->with ('success', 'Film je izbrisan iz baze!');
    }


      //Search Filmovi
    public function search(Request $request){
       if(isset($_GET['letter'])){
        $slovo=$request->input('letter');
        $filmovi=Filmovi::where('naslov','LIKE', "$slovo%")->orderBy('naslov')->get();
            return view ('index')->with('filmovi', $filmovi)->with('slovo', $slovo);
          }
          else{
            $filmovi=array();
            $slovo=$request->input('letter');
              return view ('index')->with('filmovi', $filmovi)->with('slovo', $slovo);
          }
        }
}
