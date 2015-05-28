<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller {

    public function loginPage()
    {
        return '<form method="post"><input type="hidden" name="_token" value="'.csrf_token().'"><input type="text" name="username" value=""><input type="text" name="password" value=""><input type="submit" value="submit"></form>';
    }

    public function login(Request $req)
    {
		$user = DB::select('select * from users where username = ?', [$req->input('username')]);

		if (!empty($user)) {
			if ( Hash::check($req->input('password'), $user[0]->password) ) {
				Session::flush();
				Session::regenerate();
				Session::put('user', $user[0]);
				return redirect('/');
			}
		}

		return redirect()->route('user_login_page');
    }

    public function signupPage()
    {
        return '<form method="post"><input type="hidden" name="_token" value="'.csrf_token().'"><input type="text" name="username" value=""><input type="text" name="password" value=""><input type="text" name="email" value""><input type="submit" value="submit"></form>';
    }

    public function signup(Request $req)
    {
		$this->validate($req, [
			'username' => 'required|unique:users|max:255',
			'password' => 'required|min:8',
			'email' => 'required|email|unique:users|max:63'
		]);

		$user = DB::insert(
			'insert into users (username, password, email) values (?, ?, ?)',
			[$req->input('username'), Hash::make($req->input('password')), $req->input('email')]
		);

        return redirect()->route('user_login_page');
    }

    public function logout()
    {
		Session::flush();
		Session::regenerate();
        return redirect('/');
    }

    public function show()
    {
        return var_dump(Session::get('user'));
    }

    public function update(Request $req)
    {
		$this->validate($req, [
            'password' => 'required|min:8',
        ]);

		$user = DB::update(
            'update users set password = ? where id = ?',
            [Hash::make($req->input('password')), Session::get('user')->id]
        );

        return redirect()->route('user_me_show');
    }

}
