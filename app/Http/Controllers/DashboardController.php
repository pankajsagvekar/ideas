<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $users = [
            ['name' => 'Pankaj', 'age' => '21'],
            ['name' => 'Alex', 'age' => '30'],
            ['name' => 'John', 'age' => '17']
        ];
        return view(
            'dashboard',
            ['users' => $users]
        );
    }
}
