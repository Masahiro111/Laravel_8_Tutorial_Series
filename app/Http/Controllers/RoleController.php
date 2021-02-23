<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function addRole()
    {
        $roles = [
            ["name" => "Administrator"],
            ["name" => "Editor"],
            ["name" => "Author"],
            ["name" => "Contributor"],
            ["name" => "Subscribers"],
        ];

        Role::insert($roles);
        return "Roles are created successfully";
    }

    public function addUser()
    {
        $user = new User();
        $user->name = "jennifer";
        $user->email = "jennifer@example.com";
        $user->password = encrypt('password');
        $user->save();

        $roleids = [2, 3, 4];
        $user->roles()->attach($roleids);
        return "Record has been created successfully!";
    }

    public function getAllRolesByUser($id)
    {
        $user = User::find($id);
        $roles = $user->roles;
        return $roles;
    }

    public function getAllUsersByRole($id)
    {
        $role = Role::find($id);
        $users = $role->users;
        return $users;
    }
}
