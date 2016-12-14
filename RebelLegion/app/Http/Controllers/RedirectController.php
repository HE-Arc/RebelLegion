<?php

namespace App\Http\Controllers;

use App;
use Redirect;
use Session;

class RedirectController extends Controller
{

    public static function redirectWithLang($routeName)
    {
        return Redirect::route($routeName, Session::get('lang'));
    }

    public static function redirectWithLangParam($routePath, $parameter)
    {
        return Redirect::to(Session::get('lang').$routePath.$parameter);
    }
}
