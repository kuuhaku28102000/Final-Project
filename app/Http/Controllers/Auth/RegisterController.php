<?php

namespace App\Http\Controllers\Auth;
    
    
    use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Company;
use App\Student;
use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    
    use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:company');
        $this->middleware('guest:student');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }
    public function showCompanyRegisterForm()
    {
        return view('auth.register', ['url' => 'company']);
    }

    public function showStudentRegisterForm()
    {
        return view('auth.register', ['url' => 'student']);
    }

    
    protected function createCompany(Request $request)
    {
        $this->validator($request->all())->validate();
        $Company = Company::create([
            'name' => $request['name'],
            'email' => $request['email'],
            
            'password' => Hash::make($request['password'])
        ]);
        $Company->logo="de.png";
        $Company->save();
        return redirect()->intended('login/company');
    }
    protected function createStudent(Request $request)
    {
        $this->validator($request->all())->validate();
        $Student = Student::create([
            'name' => $request['name'],
            'email' => $request['email'],
            
            'password' => Hash::make($request['password'])
        ]);
        $Student->avatar='avatar.jpg';
        $Student->save();
        return redirect()->intended('login/student');
    }
 

    /**
     * Create a new user instance after a valid registration.
     *
     * 
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
}
