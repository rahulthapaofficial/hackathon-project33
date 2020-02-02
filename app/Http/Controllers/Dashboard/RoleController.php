<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PermissionCategory;
use Gate;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.roles.index');
    }

    public function fetchRoles()
    {
        $result = array('data' => array());
        $roles = Role::where('id', '<>', '1')->get();
        foreach ($roles as $key => $role) {
            if (Gate::check('modify-role')) {
                $buttons = '<a href="' . route('roles.edit', $role->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Modify</a>';
            }

            $result['data'][$key] = array(
                $key + 1,
                $role->name,
                $buttons
            );
        }
        return json_encode($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission_categories = PermissionCategory::all();
        return view('dashboard.roles.create', compact('permission_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $role = Role::create([
                'name' => $request->name,
                'guard_name' => 'web'
            ]);
            foreach ($request->permissions as $permission_id) {
                $permission = Permission::findOrFail($permission_id);
                $role->givePermissionTo($permission->name);
            }
        });
        return redirect('dashboard/roles')->with('successMsg', 'Role Created Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permission_categories = PermissionCategory::all();
        $permission_ids = $role->permissions->pluck('id')->toArray();
        return view('dashboard.roles.edit', compact('role', 'permission_categories', 'permission_ids'));
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
        DB::transaction(function () use ($request, $id) {
            $role = Role::find($id);
            $role->name = $request->name;
            $role->save();
            $attachedPermissions = DB::table('role_has_permissions')->where('role_id', '=', $role->id)->delete();
            foreach ($request->permissions as $permission_id) {
                $permission = Permission::findOrFail($permission_id);
                $role->givePermissionTo($permission->name);
            }
        });
        return redirect('dashboard/roles')->with('successMsg', 'Role Updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
