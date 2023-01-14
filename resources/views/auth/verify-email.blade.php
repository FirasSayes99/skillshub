@extends('web.layouts.master')

@section('content')
    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- login form -->
            <div class="col-md-6 col-md-offset-3">
                <div class="contact-form">
                    <div class="alert alert-success">
                        A verificatin Email Send Successfully!
                    </div>

                    <form method="POST" action="{{ url('email/verification-notification') }}">
                        @csrf
                       <button type="submit" class="main-button icon-button pull-right">ReSend Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
