<?php
namespace App\Http\Controllers;

use Theme;

class IndexController extends Controller {

    public function getIndex()
    {
        return Theme::view('index');
    }
}