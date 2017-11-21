<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;

class DashboardController extends Controller
{	
	private $repository;
	private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function index(){
        return view('user.dashboard');
    }

    public function auth(Request $request){

        $data = [
            'email'    => $request->get('username'), 
            'password' => $request->get('password')
        ];

        try{

            if(env('PASSWORD_HASH')){

                \Auth:: attempt($data , false); //o segundo parâmetro refere-se a relembrar os dados de login  
            }
            
            else{

                $user = $this->repository->findWhere(['email' => $request->get('username') ])->first(); //trás o primeiro

                if(!$user){
                     throw new \Exception("Email informado é inválido");
                }


                if($user->password != $request->get('password')){ //SE o usuário não existir cria uma exceção
                    
                    throw new \Exception("A senha informada é inválida");             
                }

                \Auth::login($user); //faz a autenticação
                
            }

            return redirect()->route('user.dashboard');
        }
        catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
