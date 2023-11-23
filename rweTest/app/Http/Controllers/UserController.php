<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

    public function edit(User $user)
    {
        dd($user);
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $this->user->name = $request->input('name');
        $this->user->email = $request->input('email');
        $this->user->about = $request->input('about');
        $this->user->social_network = json_encode($request->input('social_network'));
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $randomFileName = $file->hashName();

            $img = Image::make($file);
            $img->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->crop(400, 400);

            $img->save(public_path('usersImages/').$randomFileName, 90);

            $this->user->image_path = 'usersImages/' . $randomFileName;
        }

        $this->user->save();
        return redirect('/');

    }
}
