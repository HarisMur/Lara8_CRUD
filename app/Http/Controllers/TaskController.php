<?php

namespace App\Http\Controllers;
use App\Models\Dummy;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->get('search')!=null){
            $search= $request->get('search');
            $data=Dummy::where('name','LIKE','%'.$search.'%')->paginate(5);
        }
        else{
            //
            $data = Dummy::all();//sql select all tapi ni eloquent
            
        }
        return view('employees.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('\employees.create');
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
        $request->validate([
            'name' =>'required',
            'contact' => 'required',
        ]);

        //execute saving record to database
        Dummy::create($request->all());
        return redirect()->route('employees.index')
        ->with('Success','New record created successfully.');
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
        $data = Dummy::find($id);  
        return view('employees.edit')->with(compact('data'));
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
        $data=Dummy::find($id);
        $data->update(
            $request->only('name','contact')
        );

        return redirect('/employees')->with('Success','Record has been update');
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
        $data=Dummy::find($id);
        $data->delete();
        return redirect('/employees')->with('Success',"Record id:$id has been deleted");
    }
}
