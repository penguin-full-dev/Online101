<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class ArticleController extends BaseController
{
    public function index()
    {
        return view('article');
    }
}
