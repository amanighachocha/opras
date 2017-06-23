<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Response;

class RoleController extends Controller
{
	/**
	 * Display a list of all roles
	 */
    public function index()
    {
       $data = [
         'roles'=>Role::all()
       ];
       return response()->json(['results'=>$data['roles']]);
    }

    /**
	 * Store a new created role
	 */
    public function store(Request $request)
    {
        $role = new Role;
        $role->name = 'Teacher';
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
