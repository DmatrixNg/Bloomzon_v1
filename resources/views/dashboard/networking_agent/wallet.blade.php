

@extends('layouts.dashboard.networking_agent')
@section('page_title')
    Networking Agent Dashboard
@endsection

        @section('content')
        <div class="col-md-10" style="padding: 20px;">
            <div class="card" style="background-color: #707070; border-radius: 20px; padding: 40px;">
                <div class="row">
                    <div class="col-md-1"></div>
                    {{-- <div class="col-md-2 text-center">
                        <img src="{{asset('assets/dashboard/img/percent.png')}}" width="80" height="80">
                        <br><br>
                        <p class="text-white" style="margin-left: 15px; margin-top: 10px;">Total Sales</p>
                    </div> --}}
                    <div class="col-md-2 text-center">
                        <img src="{{asset('assets/dashboard/img/chart.png')}}" width="80" height="80">
                        <br><br>
                    <h4 class="text-white">{{count($active_sales)}}</h4>
                        <p class="text-white">Active Sales</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="{{asset('assets/dashboard/img/stage.png')}}" width="80" height="80">
                        <br><br>

                        <p class="text-white">Stage</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="{{asset('assets/dashboard/img/sigma.png')}}" width="80" height="80">
                        <br>
                        <br>
                        <p class="text-white"></p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img style="margin-left: 25px;" src="{{asset('assets/dashboard/img/net.png')}}" width="80" height="80">
                        <br><br>
                    <h4 class="text-white">{{$balance}}</h4>
                        <p style="margin-left: 15px;" class="text-white">Net Balance</p>
                    </div>
                </div>
            </div>

             <div class="container" style="width: 500px;">
                 <h4 class=" text-center mt-5 mb-5">Request Cash-out</h4>
                 <form name="paymentRequestForm">
                     <div class="form-group mt-5">
                         <label class="" for="account-number">Amount</label>
                         <input id="amount" name="amount" class="form-control" type="text" placeholder="Enter Amount">
                     </div>
                     <div class="form-group mt-5">
                         <label class="" for="service">Narration</label>
                         <input id="service" name="narration" class="form-control" type="text" placeholder="">
                     </div>

                     <input type="hidden" value="{{$networking_agent->id}}" name="user_id">
                     <input type="hidden" value="networking_agent" name="user_type">

                     <div class="form-group mt-5 text-center">
                         <ul id="error_list"></ul>
                         <button class="btn" type="button" id="sub" onclick="amountCheck()" style="border: 1px solid white;  width: 150px; background-color:#02499B; border-radius: 20px; color: white;">SEND</button>
                     </div>

                 </form>
             </div>
            <br><br>

        </div>
        @endsection

@push('scripts')
    <script>
   var ballance = @json($balance)

function amountCheck(){
    ballance = parseInt(ballance)
    var amt = parseInt(document.getElementById('amount').value)
    console.log(amt)
    var btn = document.getElementById('sub');
    console.log(btn);
    if(document.getElementById('amount').value == ''){
        return swal("PLease enter a valid amount to withdraw ")
    }
    if(amt > ballance)
    {
           btn.setAttribute('type','button')
           return swal("Insufficient Fund")
        }
        else{
    document.getElementById('sub').setAttribute('type','submit').click()

        }
}
const options = {
    requestUrl: '/networking_agent/cashout',
    cb: response => {
        if(response.success){
            return swal({
                title: 'Success!',
                text: 'Payment Request sent successfully!',
                icon: 'success',
                button: 'Ok'
            }).then((e)=>{
                window.location.reload()
            })
        }
        ErrorHandler(response.errors ?? {})
        return swal({
            title: 'Error!',
            text: 'Error occurred sending payment request, please try again',
            icon: 'error',
            button: 'Try Again'
        })
    }
};

FormHandler('paymentRequestForm', options)

     

    </script>
    @endpush
