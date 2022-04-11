<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;


class UserController extends Controller
{
    function index(){

        $users = User::all();
        $roles = Role::pluck('name','name')->all();
        $user_auth = Auth::user();

        $user_role1 = User::whereHas("roles", function($q) {
            $q->where("name", "super_admin");
        })->count();

        $user_role2 = User::whereHas("roles", function($q) {
            $q->where("name", "admin");
        })->count();

        $user_role3 = User::whereHas("roles", function($q) {
            $q->where("name", "utilisateur");
        })->count();

        return view('admin.pages.user.user',compact('users','roles','user_auth','user_role1','user_role2','user_role3'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_user(Request $request)
    {

        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'genre' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'password' => Hash::make('password')
        ]);

        $input = $request->all();
        //dd($input);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('user.index')
            ->with('success','Utilisateur enregistré avec succès');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user     = User::find($id);
        $roles    = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('admin.utilisateurs._edit',compact('user','roles','userRole'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'fullname' => 'required',
            'contact' => 'required',
            'genre' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input, ['password']);
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('user.index')
            ->with('success','Modification éffectuée avec succèss');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')
            ->with('success','Utilisateur supprimer avec sucèss');
    }


}
