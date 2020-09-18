<?php

namespace App\Http\Controllers;

use App\Payment;
use Paystack;
use Illuminate\Http\Request;
use App\Helpers\GuardCheck;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


class PaymentController extends Controller
{


  public function __construct()
  {
    $this->user = auth()->guard(GuardCheck::get())->user();
  }

  /**
    * Redirect the User to Paystack Payment Page
    * @return Url
    */
   public function redirectToGateway()
   {
       try{
           return Paystack::getAuthorizationUrl()->redirectNow();
       }catch(\Exception $e) {
         // dd($e->getMessage());
           return back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
       }
   }

   /**
    * Obtain Paystack payment information
    * @return void
    */
   public function handleGatewayCallback()
   {
       $paymentDetails = Paystack::getPaymentData();
       // dd($this->user->cards()->get());
       if ($paymentDetails['data']['status'] == 'success'){
         // dump($this->user);
         // dump($this->user->cards());
         // dd($this->user->cards()->where(['user_id' => $this->user->id, 'last4' => $paymentDetails['data']['authorization']['last4']])->get());
         if($paymentDetails['data']['metadata']['action'] == "addCard") {


           $createOrNew = $this->user->cards()->updateOrCreate(['user_id' => $this->user->id, 'last4' => $paymentDetails['data']['authorization']['last4']], ["authorization_code" => $paymentDetails['data']['authorization']['authorization_code'],
           "bin" => $paymentDetails['data']['authorization']['bin'],
           "last4" => $paymentDetails['data']['authorization']['last4'],
           "exp_month" => $paymentDetails['data']['authorization']['exp_month'],
           "exp_year" => $paymentDetails['data']['authorization']['exp_year'],
           "channel" => $paymentDetails['data']['authorization']['channel'],
           "card_type" => $paymentDetails['data']['authorization']['card_type'],
           "bank" => $paymentDetails['data']['authorization']['bank'] ?? null,
           "country_code" => $paymentDetails['data']['authorization']['country_code'] ?? null,
           "brand" => $paymentDetails['data']['authorization']['brand'] ?? null,
           "reusable" => $paymentDetails['data']['authorization']['reusable'] ?? null,
           "signature" => $paymentDetails['data']['authorization']['signature'] ?? null,
           "account_name" => $paymentDetails['data']['authorization']['account_name'] ?? null,
           "receiver_bank_account_number" => $paymentDetails['data']['authorization']['receiver_bank_account_number'] ?? null,
           "receiver_bank" => $paymentDetails['data']['authorization']['receiver_bank'] ?? null
         ]);
         $response = Http::withHeaders([
           "Authorization" => "Bearer " . config('paystack.secretKey'),
           "Cache-Control" => "no-cache",
           ])->post('https://api.paystack.co/refund',
           [

             'transaction' => $paymentDetails['data']['id']
           ]);

           $this->user->payments()->create(
             [
               'id' => Str::uuid()->toString(),
               'type' => 'paystack',
               'transaction_id' => $paymentDetails['data']['id'],
               'data' =>  json_encode($paymentDetails['data'])
             ]
           );

                      // dd($response->body());
           return back()->with([
             'message' => 'Card Added Successfull',
             'type' => 'success'
           ]);

         }

       }
       return back()->with([
         'message' => $paymentDetails['data']['status'],
         'type' => 'failed'
       ]);

   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
