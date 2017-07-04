<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role, App\Permission;
use Validator, Response, Session, Auth, Hash;

class RoleController extends Controller
{
	/**
	 * Display a list of all roles
	 */
    public function index()
    {
       $data = [
         'roles'=>Role::all(),
         'permissions'=>Permission::all()
       ];
       return view('dashboard.roles',$data)->withTitle('Roles');
    }

    public function attachPermissions(Request $request)
    {
       foreach (Permission::all() as $key => $permit) {
          if($permit->id = $request->input($permit->id)){
             Role::find($request->input('role_id'))->attachPermission($permit);
          }
       }
       Session::flash('success_message','Permissions saved successfully');
       return redirect()->back();
    }

    /**
	 * Store a new created role
	 */
    public function store(Request $request)
    {
        $role = new Role;
        $role->name = $request->input('name');
        $role->key = 'teacher';
        $role->save();
        return redirect()->to('/roles');
    }

    /**
	 * Update the specified role
	 */
    public function update(Request $request)
    {

    }

    /**
	 * Delete the specified role
	 */
    public function delete($id)
    {
       try{
         $role = Role::findOrFail($id);
         $role->delete();
         return redirect()->to('/roles');
       }catch(Exception $e){
         return "Role is not found";
       }
    }
}
