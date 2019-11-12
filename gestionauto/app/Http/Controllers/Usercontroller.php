<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->orderBy('created_at','DESC')->paginate(10);


        
        return view('admin\operateur', [

            'users'=> $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\operateurcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Carbon::Now();

        $data = request()->validate([

         'name' => ['required', 'min:3'],
         'prenom'=> ['required','min:3'],
         'login'=> ['required','min:6'],
         'email' => ['required', 'email'],
         'password' => ['required' ,],
         'fonction' => ['required'],
         'telephone' => ['required'],
         'cni' => ['required', 'image'],
         'date' => ['required','date'],
         'role' => ['required']
         ]);



         $cniPath = request('cni')->store('uploads','public');


         $officialDate = Carbon::now();


            User::create([
             'name' => $data['name'],
             'prenom'=> $data['prenom'],
             'login'=> $data['login'],
             'email' => $data['email'],
             'password' => bcrypt($data['password']),
             'fonction'=> $data['fonction'],
             'telephone' => $data['telephone'],
             'cni' => $cniPath,
             'date'=> $data['date'],
             'role' => $data['role'],

             'at_year'=> $officialDate


         ]);

         
                

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id',$id)->first();

        return view('admin\operateurview',[

            'user'=> $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin\operateuredit', compact('user'));
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
