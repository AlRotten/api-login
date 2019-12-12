<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Firebase\JWT\JWT;

class UsersController extends Controller
{
    public function postData(Request $request) {
        // $jwt = $request->getContent();
        // $key = 'pepeniño';
        // $decoded = JWT::decode($jwt, $key, array('HS256'));
        // print($decoded);
        // return json_encode($decoded); 
        return $request->get('decoded');
    }
}
