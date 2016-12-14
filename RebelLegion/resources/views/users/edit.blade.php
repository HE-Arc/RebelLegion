@extends('layouts.app')

@section('content')

<div class="row">
  <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">

    <h1>@lang('forms_buttons_common.edit') @lang('forms_buttons_common.user') : {{ $user->userName }}</h1>


  {{ Form::open( ['method' => 'PUT', 'route' => ['users.update', 'lang' => App::getLocale(), 'user' => $user->id]] ) }}
    <div class="row">
        <label for="userName">@lang('users.userName')</label>
        <input type="text" id="userName" name="userName" value="{{ $user->userName }}" required autofocus/>
        @if ($errors->has('userName'))
          <small class="error">{{ $errors->first('userName') }}</small>
        @endif
    </div>

    <div class="row">
        <label for="firstName">@lang('users.firstName')</label>
        <input type="text" id="firstName" name="firstName" value="{{ $user->firstName }}" required/>
        @if ($errors->has('firstName'))
          <small class="error">{{ $errors->first('firstName') }}</small>
        @endif
    </div>

    <div class="row">
        <label for="lastName">@lang('users.lastName')</label>
        <input type="text" id="lastName" name="lastName" value="{{ $user->lastName }}" required/>
        @if ($errors->has('lastName'))
          <small class="error">{{ $errors->first('lastName') }}</small>
        @endif
    </div>

    <div class="row">
        <label for="email">@lang('users.email')</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required/>
        @if ($errors->has('email'))
          <small class="error">{{ $errors->first('email') }}</small>
        @endif
    </div>

    <div class="row">
        <label for="password">@lang('users.password')</label>
        <input type="password" id="password" name="password" required/>
        @if ($errors->has('password'))
          <small class="error">{{ $errors->first('password') }}</small>
        @endif
    </div>

    <div class="row">
        <label for="passwordConfirmation">@lang('users.passwordConfirmation')</label>
        <input type="password" id="passwordConfirmation" name="passwordConfirmation" required />
        @if ($errors->has('passwordConfirmation'))
          <small class="error">{{ $errors->first('passwordConfirmation') }}</small>
        @endif
    </div>

    <div class="row">
        <button type="submit" class="button">
          @lang('forms_buttons_common.create')
        </button>
    </div>

  {{ Form::close() }}
  </div>
</div>

@endsection
