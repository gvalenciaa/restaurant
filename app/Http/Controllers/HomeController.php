<?php

namespace App\Http\Controllers;

use App\PersonProvider;
use App\PersonStudent;
use App\PersonWorkForce;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * @var PersonProvider
     */
    private $personProvider;
    /**
     * @var PersonWorkForce
     */
    private $personWorkForce;
    /**
     * @var PersonStudent
     */
    private $personStudent;
    /**
     * @var User
     */
    private $user;

    /**
     * Create a new controller instance.
     *
     * @param PersonProvider $personProvider
     * @param PersonWorkForce $personWorkForce
     * @param PersonStudent $personStudent
     * @param User $user
     */
    public function __construct(
        PersonProvider $personProvider,
        PersonWorkForce $personWorkForce,
        PersonStudent $personStudent,
        User $user
    ){
        $this->middleware('auth');

        $this->personProvider = $personProvider;
        $this->personWorkForce = $personWorkForce;
        $this->personStudent = $personStudent;
        $this->user = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $flag = null;

        if (is_null($flag)){ $flag = $this->validateProvider($user);}
        if (is_null($flag)){ $flag = $this->validateStuden($user);}
        if (is_null($flag)){ $flag = $this->validateWorkForce($user);}

        if (is_null($flag)){ $flag = 'No se encontro un perfil para su usuario '.$user->name.'. Por favor comuniquese que un administrador';}

        return view('home')->with('welcome',$flag);
    }

    /**
     * @param User $user
     * @return string|null
     */
    private function validateStuden(User $user)
    {
        return ($this->validatePersonType($this->personStudent,$user->id)) ? 'Bienvenido Estudiante: '.$user->name : null;
    }

    /**
     * @param User $user
     * @return string|null
     */
    private function validateProvider(User $user)
    {
        return ($this->validatePersonType($this->personProvider,$user->id)) ? 'Bienvenido Proveedor: '.$user->name : null;
    }

    /**
     * @param User $user
     * @return string|null
     */
    private function validateWorkForce(User $user)
    {
        return ($this->validatePersonType($this->personWorkForce,$user->id)) ? 'Bienvenido Colaborador: '.$user->name : null;
    }

    /**
     * @param Model $model
     * @param $user_id
     * @return mixed
     */
    private function validatePersonType(Model $model, $user_id)
    {
       return ($model->where('id_user',$user_id)->first());
    }
}
