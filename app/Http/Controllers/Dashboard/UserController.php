<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.users.index');
    }

    public function fetchUsers()
    {
        $result = array('data' => array());

        if (Auth::user()->roles->first()->name == 'Super Administrator') {
            $users = User::where('id', '<>', Auth::user()->id)->orderBy('id', 'desc')->get();
        } else {
            $users = User::where([['id', '<>', Auth::user()->id], ['branch_id', '<>', NULL]])->orderBy('id', 'desc')->get();
        }
        foreach ($users as $key => $user) {
            if ($user->status == 1) {
                $status = '<span class="label label-success userStatusBtn" data-id="' . $user->id . '" data-value="1">Active</span>';
            } else {
                $status = '<span class="label label-warning  userStatusBtn" data-id="' . $user->id . '" data-value="0">Inactive</span>';
            }
            $buttons = '';
            if (Gate::check('suspend-user')) {
                if ($user->status == 0) {
                    $buttons .= '<a class="btn btn-xs btn-success userStatusModifyBtn" data-id="' . $user->id . '" data-value="1"><i class="fa fa-thumbs-up"></i> Activate</a>';
                } else {
                    $buttons .= '<a class="btn btn-xs btn-danger userStatusModifyBtn" data-id="' . $user->id . '" data-value="0"><i class="fa fa-ban"></i> Suspend</a>';
                }
            }
            if (Gate::check('modify-user')) {
                $buttons .= '&nbsp;<a href="' . route('users.edit', $user->id) . '" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Modify</a>';
            }
            if (!Gate::check('suspend-user') && !Gate::check('modify-user')) {
                $buttons .= '<i class="fa fa-exclamation-triangle" style="color: orange"></i> No Permission';
            }

            if ($user->id == 2) {
                $result['data'][$key] = array(
                    $key + 1,
                    $user->first_name . ' ' . $user->last_name,
                    'Null',
                    $user->email,
                    $user->phone_no,
                    $user->address,
                    $status,
                    $buttons
                );
            } else {
                $result['data'][$key] = array(
                    $key + 1,
                    $user->first_name . ' ' . $user->last_name,
                    $user->branch->name,
                    $user->email,
                    $user->phone_no,
                    $user->address,
                    $status,
                    $buttons
                );
            }
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
