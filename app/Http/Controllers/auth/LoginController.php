<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers; //
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //use AuthenticatesUsers;

    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }

    // Handle the logout request
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
    protected function credentials(Request $request)
{
    $credentials = $request->only('email', 'password');

    // Custom logic for admin
    if ($credentials['email'] == 'isadmin@gmail.com') {
        $credentials['is_admin'] = true;
    }

    return $credentials;
}

}
