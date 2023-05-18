<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UserModel::all();
        return view("index", ["users" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new UserModel;
        $user->First_name = request("name");
        $user->email = request("email");
        $user->phone_number = request("phone_no");
        $user->save();
        return redirect("/");
    }

    public function delete($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserModel  $UserModel
     * @return \Illuminate\Http\Response
     */
    public function show(UserModel $UserModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserModel  $UserModel
     * @return \Illuminate\Http\Response
     */
    public function edit(UserModel $userModel, $id)
    {
        $user = $userModel->find($id);
        return view("edit", ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserModel  $UserModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = UserModel::find($id);
        $user->First_name = request("name");
        $user->email = request("email");
        $user->phone_number = request("phone_no");
        $user->save();
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserModel  $UserModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserModel $UserModel)
    {
        //
    }
}
