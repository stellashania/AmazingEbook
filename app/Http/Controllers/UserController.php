<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function display_all()
    {
        $allUsers = User::all();

        $data = [
            'users' => $allUsers
        ];

        return view('account-maintenance', $data);
    }

    public function delete_user(Request $request)
    {
        $user_id = $request->id;
        $user = User::where('id', $user_id)->first();
        Storage::delete("public/display_picture/" . $user->display_picture_link);
        $user->delete();

        return redirect()->back();
    }

    public function update_user(Request $request)
    {
        $user_id = $request->id;
        $user = User::where('id', $user_id)->first();
        $roles = Role::all();

        $data = [
            'user' => $user,
            'roles' => $roles
        ];

        return view('update-role', $data);
    }

    public function update_role(Request $request)
    {
        $user_id = $request->id;

        $user = User::find($user_id);
        $user->role_id = $request->role;
        $user->save();

        return redirect('account-maintenance');
    }

    public function display_profile()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $roles = Role::all();

        $data = [
            'user' => $user,
            'roles' => $roles
        ];

        return view('profile', $data);
    }

    public function update_profile(Request $request)
    {
        $user_id = Auth::user()->id;

        $rules = Validator::make($request->all(), [
            'role' => ['required', 'int'],
            'gender' => ['required', 'int'],
            'first_name' => ['required', 'string', 'max:25'],
            'middle_name' => ['nullable', 'string', 'max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users,email,' . $user_id, 'regex:/[@.]/'],
            // 'password' => ['required', 'string', 'regex:/[0-9]/', 'min:8', 'confirmed'],
            'picture' => ['required', 'image'],
        ]);
        $rules->validate();

        $user = User::find($user_id);
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->role_id = $request->role;
        $user->gender_id = $request->gender;
        $user->email = $request->email;

        $file = $request->file("picture");
        if ($file != null) {
            $imageName = time() . "-" . $request->first_name . "." . $file->getClientOriginalExtension();
            Storage::putFileAs("public/display_picture/", $file, $imageName);
            Storage::delete("public/display_picture/" . $user->display_picture_link);
            $user->display_picture_link = $imageName;
        }

        $user->save();

        return redirect('saved');
    }
}
