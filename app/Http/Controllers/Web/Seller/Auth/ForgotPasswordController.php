<?php

namespace App\Http\Controllers\Web\Seller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Password Reset Controller
  |--------------------------------------------------------------------------
  |
  | This controller is responsible for handling password reset emails and
  | includes a trait which assists in sending these notifications from
  | your application to your users. Feel free to explore this trait.
  |
  */
  // dd("here");
  use SendsPasswordResetEmails;

  /**
   * Only guests for "seller" guard are allowed except
   * for logout.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware(['guest:admin','guest:buyer','guest:fast_food_grocery','guest:manufacturer','guest:networking_agent','guest:professional','guest:seller','guest:shopper']);
  }

  /**
  * Get the guard to be used during password reset.
  *
  * @return \Illuminate\Contracts\Auth\StatefulGuard
  */


  /**
   * Show the reset email form.
   *
   * @return \Illuminate\Http\Response
   */
  public function showLinkRequestForm(){
      return view('front.auth.seller.passwords.email');
  }

  /**
   * password broker for seller guard.
   *
   * @return \Illuminate\Contracts\Auth\PasswordBroker
   */
  public function broker(){
      return Password::broker('sellers');
  }

  /**
   * Get the guard to be used during authentication
   * after password reset.
   *
   * @return \Illuminate\Contracts\Auth\StatefulGuard
   */
  public function guard(){
      return Auth::guard('seller');
  }

}
