<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ControlpanelController extends Controller
{
    public function controlpanel()
    {
        return view('controlpanel');
    }
}
