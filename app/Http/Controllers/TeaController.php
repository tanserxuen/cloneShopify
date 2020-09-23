<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tea;
use App\Http\Resources\Tea as TeaResource;
// use Validator;

class TeaController extends Controller
{
    public function main()
    {
        return view('cust.teapage');
    }

    public function staffmain()
    {
        return view('staff.teapage');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teas = Tea::orderBy('created_at', 'desc')->paginate(8);

        return TeaResource::collection($teas);
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
        //validation
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'description' => 'required',
        //     'price' => 'required|numeric',
        //     'quantity' => 'required|integer|numeric',
        //     'rate' => 'required|integer|between:0-6'
        // ]);

        // if($validator->fails()){
        //     $error = $request->session()->flash('error', $validator->messages()->all()[0]);
        //     return back()->withInput()->with('error', $error);
        // }

        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'price' => 'required|numeric',
        //     'quantity' => 'required|integer|numeric',
        //     'rate' => 'required|integer|between:0-6'
        // ]);
        // \Log::info($request->all());
        \Log::info($request->all());

        // $exploded = explode(',', $request('image'));
        // $decoded= base64_decode($exploded[1]);

        // if(str_contains($exploded[0], 'jpeg'))
        //     $extension = 'jpg';
        // else
        //     $extension = 'png';

        // $filename = str_random().'.'.$extension;

        // $path = public_path(). '.' .$filename;

        // $file_put_contents($path, $decoded);
        
        

        // $image = request()->file('image');
        // $imageName = $image->getClientOriginalName();
        // $imageName = time().'_'.$imageName;

        // $image->move(public_path('/storage/image'), $imageName);

        $tea = new Tea();
        $tea->name = $request['name'];
        // $tea->image = '/storage/image/'.$imageName;
        $tea->description = $request['description'];
        $tea->price = $request['price'];
        $tea->quantity = $request['quantity'];
        $tea->rate = $request['rate'];
        $tea->save();

        // $tea = Tea::create($request->except('image'));
        return new TeaResource($tea);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tea = Tea::findOrFail($id);

        return new TeaResource($tea);
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
        $tea = Tea::find($id);
        $tea->update($request->all());
        return new TeaResource($tea);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tea = Tea::findOrFail($id);

        if($tea->delete()){
            return new TeaResource($tea);
        }
    }


    
}
