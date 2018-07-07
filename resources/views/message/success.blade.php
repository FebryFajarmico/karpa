@extends('layouts.app')
@section('content')
  <div class="row h-100" id="successmessage">
    <div class="col-sm-12 my-auto">
      <h1>Message Sent</h1>
      <p class="lead">We have received your message and our staff will contact you within 24 hour, Thank you for contacting us.</p>
      <button type="button" class="btn btn-primary" onclick="window.location='{{ route("users.home") }}'"> Go Back To Home</button>
    </div>
  </div>
@endsection
