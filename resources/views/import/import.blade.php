@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if (!empty($success))
        <div class="alert alert-success">
            {{ $success }} 
        </div>
        @endif
        @if (!empty($error))
        <div class="alert alert-danger">
            {{ $error }} 
        </div>
        @endif
    </div>
</div>
@endsection
