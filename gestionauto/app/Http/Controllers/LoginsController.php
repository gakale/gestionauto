<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login\login');
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
        try {
            $user = User::where('name', $request->name)
                ->orWhere('email', $request->email)
                ->first();

            if ($user) {
                if (\Hash::check($request->password, $user->password)) {
                    auth()->login($user, $request->has('remember'));

                    if (auth()->user()->isAdmin())
                        return redirect('dashboard/dashboard');

                    return redirect('/dashboard');
                }
                return $this->messageError($request);
            }
            return $this->messageError($request);
        } catch (Exception $e) {
            echo 'Exception reçue : ', $e->getMessage(), "\n";

        }
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
       
        auth()->logout();


        return redirect('/');
    }

    public function messageError($request)
    {
        return back()->with([
            'color' => 'red',
            'message' => "Identifiant incorrect!"
        ])->withInput([
            'name' => $request->name,
        ]);
    }
}
