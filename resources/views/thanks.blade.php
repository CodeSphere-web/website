@extends('layouts.app')

@section('content')
<div class="container py-5 text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-4">Thank You!</h1>
            <p class="lead">We have received your message and will chat with you soon.</p>
            <hr class="my-4">
            <a href="{{ url('/#projects') }}" class="btn btn-primary btn-lg">
                Back to Projects
            </a>
        </div>
    </div>
</div>
@endsection