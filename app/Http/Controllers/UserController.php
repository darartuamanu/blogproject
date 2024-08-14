<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', false)->get();
        return view('users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        // Check if the user is an admin
        if ($user->is_admin) {
            return redirect()->route('users.index')->with('error', 'Admin users cannot be edited.');
        }

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Check if the user is an admin
        if ($user->is_admin) {
            return redirect()->route('users.index')->with('error', 'Admin users cannot be updated.');
        }

        $user->update($request->only(['name', 'email']));
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Check if the user is an admin
        if ($user->is_admin) {
            return redirect()->route('users.index')->with('error', 'Admin users cannot be deleted.');
        }

        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
