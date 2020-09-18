<?php

namespace App\Http\Controllers\Web\FastFoodGrocery\Auth;

use App\FastFoodGrocery;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Shopper;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Traits\JsonResponse;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    use JsonResponse;
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo() {
        return '/fast_food_grocery/dashboard';
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest:admin','guest:buyer','guest:fast_food_grocery','guest:manufacturer','guest:networking_agent','guest:professional','guest:seller','guest:shopper']);
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
            'phone_number'    => ['required', 'string', 'max:255'],
            'company_name'    => ['required', 'string', 'max:255'],
            'full_name'    => ['required', 'string', 'max:255'],
            'delivery_agent'  => ['required', Rule::in(['Bloomzon Rider', 'Personal'])],
            'delivery_method' => ['required', Rule::in(['Bike', 'Car'])],
            'email'           => ['required', 'string', 'email', 'max:255', 'unique:fast_food_groceries'],
            'password'        => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return FastFoodGrocery::create([
            'company_name' => $data['company_name'],
            'full_name' => $data['full_name'],
            'phone_number' => $data['phone_number'],
            'email'        => $data['email'],
            'password'     => Hash::make($data['password']),
        ]);
    }


    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('front.auth.fast_food_grocery.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? $this->send_response(true,$user, 200,'Registered added')
                    : redirect('/fast_food_grocery/dashboard');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('fast_food_grocery');
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }

}
