<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Ui\UiServiceProvider;

class UserController extends Controller
{
    public function index(Request $request , User $users){
        $users = null;
        if($request->search){
            $users = User::where('name','LIKE' , '%'.$request->search.'%')->
            orWhere('email','LIKE' , '%'.$request->search.'%')->
            with('role')->get();
        }
        else{
            $users = User::with('role')->get();
        }

        return view('adm.users' ,['users'=>$users , 'roles' => Role::all() ]);
    }
    public function ban(User $user){
        $user->update([
            'is_active' => false,
        ]);
        return back()->withErrors('You are banned! Please call to admin +77715619064');
    }

    public function unban(User $user){
        $user->update([
            'is_active' => true,
        ]);
        return back();
    }

    public function edit(User $users){
        return view('adm.userEdit',['user' => $users , 'roles' => Role::all()]);
    }

    public function update(Request $request , User $users){
        $request->validate([
            'role_id'=>'required',
        ]);
        $users->update([
            'role_id'=>$request->role_id,
        ]);
        return redirect()->route('adm.users.index');
    }
}
