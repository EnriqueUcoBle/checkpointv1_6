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
    private $nombre;
    private $tipo;
    private $id;
    public function index()
    {
        //
    }
     public function logout()
    {
        if(isset($_SESSION['id'])){
             session_start();
              $results = Admin::where('usuario_id' ,$_SESSION['id'])->first();
              return view("users.".$_SESSION['tipo'].".inicio_".$_SESSION['tipo'],compact("results"));
        }
        session_start();
        session_destroy();
        return view('login');
    }
    public function nodisponible(){

        if(isset($_SESSION['tipo'])){
            switch ($_SESSION['tipo']) {
                case "admin":
                    session_start();
                    return view('users.admin.no_disponible');
                case "secretario":
                    session_start();
                    return view('users.admin.no_disponible');
                case "tutor":
                     session_start();
                    return view('users.admin.no_disponible');
                case "docente":
                      session_start();
                    return view('users.admin.no_disponible');
                }      
        }
        else{
           
            
            return view("login");
        }
    }
    public function valida(){
        if(isset($_SESSION['tipo'])){
            switch ($_SESSION['tipo']) {
                case "admin":
                     $results = Admin::where('usuario_id' ,$_SESSION['id'])->first();
                     session_start();session_regenerate_id($_SESSION['id']);
                    return view("users.".$consulta->tipo.".inicio_".$consulta->tipo,compact("results"));
                case "secretario":
                     $results = Secretario::where('usuario_id' ,$_SESSION['id'])->first();   
                     session_start();session_regenerate_id($_SESSION['id']);
                    return view("users.".$_SESSION['tipo'].".inicio_".$_SESSION['tipo'],compact("results"));
                case "tutor":
                     $results = Tutor::where('usuario_id' ,$_SESSION['id'])->first();
                     session_start();session_regenerate_id($_SESSION['id']);
                return view("users.".$_SESSION['tipo'].".inicio_".$_SESSION['tipo'],compact("results"));
                case "docente":
                     $results = Docente::where('usuario_id' ,$_SESSION['id'])->first();
                     session_start();session_regenerate_id($_SESSION['id']);
                     return view("users.".$_SESSION['tipo'].".inicio_".$_SESSION['tipo'],compact("results"));
                }          
          
        }
        else{
         return view("login");   
        }
    }
    public function validar(Request $request)
    {
        try{
            $user=$request->input('usuario');
            $pass=$request->input('pass');
            $datos=$this->VerificarUsuario($user,$pass);
            
             $results=  $this->ObtenerUsuario($user); 
             return view("users.".$datos->tipo.".inicio_".$datos->tipo,compact("results"));
            
        } catch (Exception $e) {
            echo "no se pudo iniciar sesion  no existe en la tabla users error: " . $e->getMessage();
        }
    }
    
    public function VerificarUsuario ($user,$pass){
        $consulta= User::where('usuario',$user)->first();
        if (isset($consulta->usuario) && $consulta->pass==$pass){
            $verificado=true;
        }else{
            $verificado=false;
            echo "no se puede validar el usuario";
        }
        $datos =array(
            "tipo"=> $consulta->tipo,
            "valido"=>$verificado
            
        );
        return $consulta;
    }
    public function ObtenerUsuario($user){
         $consulta= User::where('usuario',$user)->first();
         if (isset($consulta->id)){
             if ($consulta->tipo=="admin"){
                    $results = Admin::where('usuario_id' ,$consulta->id)->first();
                }
                if ($consulta->tipo=="secretario"){
                    $results = Secretario::where('usuario_id' ,$consulta->id)->first();
                }
                if ($consulta->tipo=="tutor"){
                    $results = Tutor::where('usuario_id' ,$consulta->id)->first();
                }
                if ($consulta->tipo=="docente"){
                    $results = Docente::where('usuario_id' ,$consulta->id)->first();
                }
         }
         else{
          echo "no se encontro usuarios"     ;
         }
 
         return $results;
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
    public function edit( Request $request)
    {
        $tipo=$request->input('tipo');
        
        if (isset($tipo)){
             if ($tipo=="admin"){
                    
                    $results = Admin::where('usuario_id' ,$request->input('id'))->first();
                   
                }
                if ($tipo=="secretario"){
                    $results = Secretario::where('usuario_id' ,$request->input('id'))->first();
                     
                }
                if ($tipo=="tutor"){
                    $results = Tutor::where('usuario_id' ,$request->input('id'))->first();
                }
                if ($tipo=="docente"){
                    $results = Docente::where('usuario_id' ,$request->input('id'))->first();
                }
                 $user = User::where('id' ,$request->input('id'))->first();
                  return view('users.admin.edit_user',compact('results','user'));
         }
         else{
          echo "no se encontro usuarios"     ;
         }
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        
            if($request->input('option')=='no'){
                \DB::table('usuarios')
                ->where('id', $request->input('id'))
                ->update(['pass' =>  $request->input('pass')]);
            $user = User::where('id' ,$request->input('id'))->first();
            if($user->pass==$request->input('pass')){
                $usuarios=User::all();
                return view('users.admin.administrar_user',compact('usuarios'));
            }else{
                echo "no se cambio la contrase;a";
            }
        }else if($request->input('option')=="si"){
            if($request->input('tipo')=="secretario"){
                 \DB::table('capturista')->where('usuario_id', '=', $request->input('id'))->delete();
            }
             if($request->input('tipo')=="admin"){
                 \DB::table('administradores')->where('usuario_id', '=', $request->input('id'))->delete();
            }
             if($request->input('tipo')=="tutor"){
                 \DB::table('tutores')->where('usuario_id', '=', $request->input('id'))->delete();
            }
             if($request->input('tipo')=="docente"){
                 \DB::table('docentes')->where('usuario_id', '=', $request->input('id'))->delete();
            }
           
            \DB::table('usuarios')->where('id', '=', $request->input('id'))->delete();
             $user = User::where('id' ,$request->input('id'))->first();
             if(isset($user->usuario)){
                 echo "no se pudo borrar el usuario";
             }else{
                 echo "el usuario se borro correctamente";
             }

        }
       
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        //
    }
}
