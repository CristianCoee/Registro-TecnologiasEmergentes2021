<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grados;

class gradosController extends Controller

    {
        public function __construct(){
            $this->middleware('auth');
        }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            $data['grados']=Grados::paginate(15);
            return view('grados.index', $data);
            /*$grados = Grados::all();
            return view('grados.index', $grados);*/
    
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('grados.create');
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

            
        
            $datagrados = $request->except('_token','saveitem');
            Grados::insert($datagrados);
            //return response()->json($datagrados);
            return redirect('grados/');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Grados  $grados
         * @return \Illuminate\Http\Response
         */
        public function show(Grados $grados)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Grados  $grados
         * @return \Illuminate\Http\Response
         */
        /*public function edit(Grados $grados)
        {
            //
            return view('grados.edit');
        }*/
        public function edit($id) {
            $grados = grados::findOrFail($id);
            return view('grados.edit', compact('grados'));
         }
    
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Grados  $grados
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id){
    
            $grados = Grados::findOrFail($id);
            $grados->update($request->all());
            return redirect('grados');
        }
        /*public function update(Request $request, Alumnos $alumnos)
        {
            //
        }*/
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Grados $grados
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
            Grados::destroy($id);
            return redirect('grados');
        }
    }
