<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Information;

class informationController extends Controller
{
    public function index()
    {
        $informations = Information::orderby('id', 'desc')->get();
        return $informations;
    }
}
