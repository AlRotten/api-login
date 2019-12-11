<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{(
    public function postData(Request $request) {
        return $request->getContent(); 
    }
}
