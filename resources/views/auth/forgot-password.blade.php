@extends('web.layouts.master')

@section('content')

		
		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- login form -->
					<div class="col-md-6 col-md-offset-3">
                    @include('inc.message')
						<div class="contact-form">
							<h4>Reset Password</h4>
							<form method="POST" action="{{url('forgot-password')}}">
							@csrf
								<input class="input" type="email" name="email" placeholder="Email">
								<button type="submit" class="main-button icon-button pull-right">Reset Password</button>
							</form>
						</div>
					</div>
					<!-- /login form -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->

@endsection