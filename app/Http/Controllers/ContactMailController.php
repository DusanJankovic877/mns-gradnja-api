<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactMailRequest;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactMailRequest $request)
    {
        //
        // return request('email');
        $validation =  $request->validated();
        Mail::to('propelerzvizns@gmail.com')->send(new Contact());;
        return [$validation, 'message'=> 'E-mail je uspesno poslat!'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view('contact');
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
