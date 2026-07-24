<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return "Hello World Dari controller";
    }
}

{
    public function hello()
    {
        return view('blog.hello', [
            'name' => 'Andi'
        ]);
    }
}

return view('hello')
        ->with('name', 'Andi')
        ->with('occupation', 'Astronout');