<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorClientes;

class clienteController extends Controller
{
    /**
     * Nos sirve para la consulta del crud.
     */
    public function index()
    {
        $consultaClientes = DB::table('clientes')->get();
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorClientes $request)
    {
        Db::table('clientes')->insert([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);
            return to_route('rutaformulario');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        
    $cliente = DB::table('clientes')->where('id', $id)->first();

    return view('edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorClientes $request, $id)
    {
        
        

       // Actualiza el nuevo cambio de en la base de datos
        DB::table('clientes')->where('id', $id)->update([
        'nombre' => $request->input('txtnombre'),
        'apellido' => $request->input('txtapellido'),
        'correo' => $request->input('txtcorreo'),
        'telefono' => $request->input('txttelefono'),
        'updated_at' => Carbon::now(),
    ]);
    
    $usuario = $request->input('txtnombre');
    session()->flash('exito', 'Se Modifico El Usuario: ' . $usuario);
    return to_route('rutaclientes');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();

        DB::table('clientes')->where('id', $id)->delete();
        session()->flash('exito', 'El cliente ' . $cliente->nombre . ' ha sido eliminado exitosamente.');
        return to_route('rutaclientes');
    

        return to_route('rutaclientes');
    }


}
