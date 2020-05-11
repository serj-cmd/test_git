<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Sushi;

class SushiController extends Controller
{
     /**
     * Show the profile for the given user. //exemplu din documntatia laravel
     *
     * @return View
     */
    public function index()
    {
    	//$ingredient = request('ingredient');
    	//dd('here');               m-am asigurat ca am fost prin controller
       // $sushi = ['Sushi 1','Sushi 2' ]; //am definit o variabila cu o lista de doua sushi 1 si shusi 2

        //$sushies = DB::table('_sushies')->get();  nu e frumoasa sintaxa si se sinlocuieste cu modelul din providrs
        $sushies = Sushi::get();

        return view('/welcome', [
            'sushi'=> $sushies,           //trimitem variabila de mai sus $sushi catre view  'sushi'-este cheia
        ]);
              //'ingredient'=> $ingredient,

    }

}



