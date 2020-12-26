<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.all',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_type' => Rule::in(['admin', 'advisor']),
            'national_code' => 'numeric|digits:10',
            'birthdate' => 'max:10|nullable',
            'address' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable',
            'gender' => ['required',Rule::in(['man', 'woman'])],
            'mobile' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
            'phone' => 'numeric|digits:11|nullable',
            'status' => 'boolean'
        ]);
        $request['password'] = Hash::make($request['password']);
        User::create($request->all());
        alert()->success('اطلاعات با موفقیت ثبت شد','متن پیام');
        return back();
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
    public function edit(user $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users','email')->ignore($request->user->id)],
            'user_type' => Rule::in(['admin', 'advisor']),
            'national_code' => 'numeric|digits:10',
            'birthdate' => 'max:10|nullable',
            'address' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable',
            'gender' => ['required',Rule::in(['man', 'woman'])],
            'mobile' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
            'phone' => 'numeric|digits:11|nullable',
            'status' => 'boolean'
        ]);
        if ($request['password']){
            $request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            $data['password'] = Hash::make($request['password']);
        }
        $user->update($data);
        alert()->success('اطلاعات با موفقیت ویرایش شد','متن پیام');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $user->delete();
        alert()->success('کاربر موردنظر با موفقیت حذف گردید','متن پیام');
        return back();
    }
}
