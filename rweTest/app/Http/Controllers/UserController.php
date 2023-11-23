<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public User $user;

    public function __construct()
    {
        $this->user = new User();
    }
    public function index()
    {
        $users = $this->user->all();
        return view('Users/index', ['users' => $users]);
    }

    public function create()
    {
        return view('Users/create');
    }

    public function teste()
    {
        return view('Users/teste');
    }


    public function store(Request $request)
    {
        dd($request);
    }
}
