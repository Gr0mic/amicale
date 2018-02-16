<?php
namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function index() {
        $users = User::paginate(20);

        return view('users.index', ['users' => $users]);
    }
}
