<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('admin',['except'=>'store']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscriber::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.subscriber.index', compact('subscribers'));
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
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        Subscriber::findorFail($id)->delete();
        return redirect()->back()->with('delete','Subscriber Removed Succesfully !!');
    }


    public function subscribe(Request $request){
        $request->validate([
            'email' => 'required|string|email|max:255',

        ]);

        $input = $request->all();

        $subscriber = Subscriber::create($input)->save();
        return redirect()->back()->with('success', 'Subscribe Succesfully! Welcome to the Family');
    }
}
