<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\Service;

class TaskController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_service');
    }

    public function newcreate()
    {
        return view('create_class');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            
            ]);  
            
       // DB::table('services')->insert([
         //   'nom' => $request->get('name'),
           // 'description' => $request->get('description'),
            //'created_at' => Carbon::now()
        //]);

        //second way
        //$service= new Service();
        //$service->nom= $request['name'];
        //$service->description= $request['description'];
        //$service->save();

        Service::create([
            'nom'=> $request['name'],
            'description' => $request['description'],
        ]);
       

        return  redirect('/services');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($service_id)
    {
        
        $the_service = Service::where('id', $service_id)->first();


        return view('service_show',compact('the_service'));
        //redirect('/service_show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::where('id', $id)->first();
        return  view('edit_service', compact('service'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->validate(request(),[
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            
            ]);  
        

            
            $service->update($request->all());

         return  
         redirect('/services');
            
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
