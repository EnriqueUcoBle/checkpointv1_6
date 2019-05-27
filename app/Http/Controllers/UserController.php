<?php

namespace App\Http\Controllers;

use App\User;
use App\Admin;
use App\Tutor;
use App\Secretario;
use App\Docente;

use Illuminate\Http\Request;

class UserController extends Controller
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
     public function logout()
    {
        if(isset($_SESSION['id'])){
             session_start();
              return view("users.".$_SESSION['tipo'].".inicio_".$_SESSION['tipo'],compact("results"));
        }
       
        session_destroy();
        return view('login');
    }
    public function valida(){
        if(isset($_SESSION['usuario'])){
            return view("users.".$_SESSION['tipo'].".inicio_".$_SESSION['tipo'],compact("results"));
        }
        else{
         return view("login");   
        }
    }
    public function validar(Request $request)
    {
        try{
        
        $user = $request->input('usuario');$pass = $request->input('pass'); 
        $consulta= User::where('usuario',$user)->first(); 
        $user_db=$consulta->usuario;$pass_db=$consulta->pass;    
       
        if( $user== $consulta->usuario and $pass  ==$consulta->pass){
                switch ($consulta->tipo) {
                case "admin":
                     $results = Admin::where('usuario_id' ,$consulta->id)->first();
                     session_start();
                        $_SESSION['usuario']   =  $consulta->usuario ;
                        $_SESSION['tipo']      = $consulta->tipo;
                        $_SESSION['id']        = $consulta->id;
                        return view("users.".$consulta->tipo.".inicio_".$consulta->tipo,compact("results"));
                case "secretario":
                     $results = Secretario::where('usuario_id' ,$consulta->id)->first();
                     
                     session_start();
                        $_SESSION['usuario']   =  $consulta->usuario ;
                        $_SESSION['tipo']      = $consulta->tipo;
                        $_SESSION['id']        = $consulta->id;
                        return view("users.".$consulta->tipo.".inicio_".$consulta->tipo,compact("results"));
                case "tutor":
                     $results = Tutor::where('usuario_id' ,$consulta->id)->first();
                     
                     session_start();
                        $_SESSION['usuario']   =  $consulta->usuario ;
                        $_SESSION['tipo']      = $consulta->tipo;
                        $_SESSION['id']        = $consulta->id;
                return view("users.".$consulta->tipo.".inicio_".$consulta->tipo,compact("results"));
                case "docente":
                     $results = Docente::where('usuario_id' ,$consulta->id)->first();
                    
                     session_start();
                        $_SESSION['usuario']   =  $consulta->usuario ;
                        $_SESSION['tipo']      = $consulta->tipo;
                        $_SESSION['id']        = $consulta->id;
                        return view("users.".$consulta->tipo.".inicio_".$consulta->tipo,compact("results"));
                }             
                      
        }else{
        echo "usuario invalido";
        return view("login");
        }
     
        } catch (Exception $e) {
            echo "no se pudo iniciar sesion  no existe en la tabla users error: " . $e->getMessage();
            
        }
    }
    
    
        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $table->string('usuario');
        $table->string('pass');
        $table->string('tipo');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return User::get();
    }
    public function showonly()
    {
        $usuarios=User::all();
        return view('users.admin.administrar_user',compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $user = User::find($id);
        return view('users.admin.edit_user',compact('user'));
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
