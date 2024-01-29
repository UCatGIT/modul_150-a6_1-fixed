@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel-body pt-5">
            <h1>Hello, World!</h1>
            <!-- Display Validation Errors -->
            @include('common.errors')

            
        </div>     
    </div>

@endsection

