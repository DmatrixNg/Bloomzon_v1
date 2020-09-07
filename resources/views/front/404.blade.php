@extends('layouts.front')
@section('page_title')
    {{ __("Page Not Found")}}
@endsection
@section('content')

	<div class="error-msg-area display-table">
		<div class="vertical-middle">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="error-msg text-center">

							<img src="{{asset('assets/frontend/images/404/1.png')}}" alt="" >

							<h1>{{ __("Opps! This page Could Not Be Found!")}}</h1>
							@if(isset($message) && $message != null)
							<p>{{$message}}</p>
							@else
							<p>{{ __("Sorry bit the page you are looking for does not exist, have been removed or name changed")}}</p>
							@endif
							<a href="/" class="btn-common mt-75">{{ __("go to homepage")}}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
