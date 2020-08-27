@extends('layouts.front')
@section('page_title')
    Agents
@endsection
@section('content')

<div class="container text-center mt-5">


    <p class="text-left"><a href="index.html">Home</a> <i class="fa fa-chevron-right"></i> <a style="color:grey;" href="agent.html">Networking Associates</a></p>

    <h4 class="text-left">NETWORKING ASSOCIATES</h4>
    
    <div class="row mt-5">

        @if(count($agents))
        @foreach($agents as $agent)
        <div class="col-md-3">
            <div class="card" style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">

                <div class="card-up white lighten-1"></div>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Avatar -->
                        <div class="avatar mx-auto white">
                            <img src="{{asset('storage/assets/networking_agent/avatar/'.$agent->avatar)}}" class="rounded-circle" alt="" width="200" height="200">
                        </div>

                        <!-- Content -->

                    </div>

                </div>

                <div class="card-body">

                    <div class="text-center">
                        <h3 class="testimonial_heading font-weight-bold">{{ucwords($agent->full_name)}}</h3>
                        <p class="testimonial_heading2">{{$agent->street_address}}</p>
                    <a href="{{url('/networkingagent-details/'.$agent->id)}}" class="btn btn-outline-primary">View Services</a>

                    </div>
                    <br>
                    <!-- Quotation -->
                    {{-- <p class="testimonial_text">Sells different all day groceries and provisions for all classes.</p> --}}
                </div>

            </div>
        </div>
        @endforeach
        @else
        <div class="alert alert-warning">
            No Associate on the system
        </div>
        @endif
      


    </div>
</div>


@endsection
