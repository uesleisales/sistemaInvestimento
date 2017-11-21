<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage(){
    	$string = "Home page";
    	
    	return view('welcome',[
    		'title'=>$string
    	]);
    }

    public function cadastrar(){
    	echo "Cadastrar";
    }

    /**
    * method to user login VIEW
    * =======================================================
    */

    public function fazerLogin(){
    	
        $dados['title'] = "Login | InvestidorLegal";
        
        return view('user.login',$dados);    

    }

    public function login(Request $request){
        echo "noob";
    }

}
