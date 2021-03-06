<?php

namespace App\Http\Controllers;
use App\Annonce;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Symfony\Component\Yaml\Tests\A;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::all();

        // load the view and pass the nerds
        return view('annonces.index')
            ->with('annonces', $annonces);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'price' => 'required',
            'img' => 'required|mimes:png'
        ]);
        $imageName = $request->file('img')->getClientOriginalName();
        $request->merge(array('id_user' => Auth::id()));
        $request->file('img')->move(
            base_path() . '/public/images/catalog/',$imageName
        );
        //var_dump(Auth::id());
        $annonce = Annonce::create($request->all());
        $imageName = 'test.png';

        /*$request->file('img')->move(
            base_path() . public_path('images'), $imageName
        );*/

        return redirect()->route('annonces.index')
            ->with('success','Ads created successfully');//
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
