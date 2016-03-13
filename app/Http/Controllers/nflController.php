<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class nflController extends Controller
{
      public function showTeams () {
        return View::make('nflteams');
    }
}
