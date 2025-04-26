@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12 welcome_part">
        <p><span>WELCOME   </span>{{Auth::user()->password}}</p>
    </div>
</div>

@endsection