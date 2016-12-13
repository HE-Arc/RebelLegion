@extends('layouts.app')

@section('content')

<p>{{ $user->userName }}</p>
<p>{{ $user->firstName }}</p>
<p>{{ $user->lastName }}</p>
<p>{{ $user->email }}</p>

@endsection
