<?php  ///controller pentru dirijarea la toate restul, daca vrem sa schimbam ceva comun la toate ,schimbam aici

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;  //Straituri din laravel pentru autorizatie ...
}
