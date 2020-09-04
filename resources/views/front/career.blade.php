@extends('layouts.front')
@section('page_title')
   Career
@endsection
@section('content')

<div class="card container my-5 py-5 z-depth-1">

	<h2 class="text-center">Career</h2>

	<br>

	<section class=" px-md-5 mx-md-5 dark-grey-text">


		<div class="row d-flex text-left">


			<div class="col-lg-12">
				<p>
					{{\App\SiteConfig::find(1)->career}}
				</p>

			</div>


		</div>

	</section>


</div>
@endsection

