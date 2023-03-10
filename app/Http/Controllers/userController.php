<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fakultas;

/**
 * Summary of userController
 */
class userController extends Controller
{
    /**
     * Summary of fakultas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function fakultas(){
        $fs['modelFakultas']=fakultas::all();
        return view ('fakultas',$fs);
    }

    /**
     */
    public function __construct() {
    }
}
