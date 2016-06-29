@extends('layouts.dashboard')

@section('content')
<!-- Sidebar -->


<!-- Page Content -->
<div id="page-content-wrapper">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $users as $user )
            <tr>
                <td><a href="/user/profile/{{$user->id}}">{{ $user->name }}</a></td>
                <td><a href="/user/profile/{{$user->id}}">{{ $user->email }}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- /#page-content-wrapper -->

@endsection
