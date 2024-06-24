<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class ProfileController extends Controller
{
     <?php

     namespace App\Http\Controllers;

     use Illuminate\Http\Request;
     use Illuminate\Http\Response;

     class ProfileController extends Controller
     {
         public function index($id)
         {
             // Variables
             $name = "Donald Trump";
             $age = "75";

             // Data array
             $data = [
                 'id' => $id,
                 'name' => $name,
                 'age' => $age
             ];

             // Set cookie
             $response = new Response(view('profile.index', $data));
             $response->cookie('access_token', '123-XYZ', 1, '/', $_SERVER['SERVER_NAME'], false, true);

             return $response->withHeaders([
                 'Content-Type' => 'application/json',
             ])->json($data, 200);
         }
     }


