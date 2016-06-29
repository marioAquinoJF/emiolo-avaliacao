@extends('layouts.dashboard')



@section('content')

<!-- Page Content -->
<div id="page-content-wrapper">

    <!-- Foto -->
    <div class="row" >
        <div class="col-sm-4 text-center" style="margin-bottom: 50px; width: 150px;">
            @if(!is_null($user->url_image))
            <img src="{{ url($user->url_image) }}" 
                 name="imgProfile" style="max-height: 150px;width: 150px;box-shadow: 0px 0px 20px #ccc; border-radius:50px;"
                 class="imgProfile"/>
            @else
            <h3 class="imageProfile text-center"><i class="fa fa-user" style="font-size: 5em;"></i></h3>
            @endif
            <h3 class="text-center"> {{ $user->name }}</h3>
        </div>
        @if($user->id == 1)
        @include('users.stackoverflow')
        @endif
    </div>

    <!-- Apresentação -->
    <div class="row">
        <h2 class="text-center"> Apresentação</h2>
        <h3 class="text-right" >Por: {{ $user->name }}</h3>
        {!! $user->presentation !!}

    </div>
</div>

<!-- /#page-content-wrapper -->
@endsection




