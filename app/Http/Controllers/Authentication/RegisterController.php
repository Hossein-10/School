<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function ShowRegister()
    {
        return view('authentication.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RegisterRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function StoreRegister(RegisterRequest $request)
    {
//        $validated = $request->validate([
//            'Name' => 'required|unique:posts|max:50',
//            'Email' => 'required|email',
//            'password' => 'required|password'
//        ]);
        $validated = $request->validated();

        $user = User::create($request->validated());
//        auth()->login($user);

        return redirect('/home');

    }

//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param Request $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//    }
}
