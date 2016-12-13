@extends('layouts.app')

@section('content')


  {{ Form::open( ['method' => 'POST', 'route' => ['users.store', 'lang' => App::getLocale()]] ) }}
    <div class="row">
      <div class="large-6 columns">
        <label for="userName">@lang('users.userName')</label>
        <input type="text" id="userName" name="userName" value="{{ old('userName') }}" required autofocus/>
        @if ($errors->has('userName'))
          <small class="error">{{ $errors->first('userName') }}</small>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <label for="firstName">@lang('users.firstName')</label>
        <input type="text" id="firstName" name="firstName" value="{{ old('firstName') }}" required/>
        @if ($errors->has('firstName'))
          <small class="error">{{ $errors->first('firstName') }}</small>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <label for="lastName">@lang('users.lastName')</label>
        <input type="text" id="lastName" name="lastName" value="{{ old('lastName') }}" required/>
        @if ($errors->has('lastName'))
          <small class="error">{{ $errors->first('lastName') }}</small>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <label for="email">@lang('users.email')</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required/>
        @if ($errors->has('email'))
          <small class="error">{{ $errors->first('email') }}</small>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <label for="password">@lang('users.password')</label>
        <input type="password" id="password" name="password" required/>
        @if ($errors->has('password'))
          <small class="error">{{ $errors->first('password') }}</small>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <label for="passwordConfirmation">@lang('users.passwordConfirmation')</label>
        <input type="password" id="passwordConfirmation" name="passwordConfirmation" required />
        @if ($errors->has('passwordConfirmation'))
          <small class="error">{{ $errors->first('passwordConfirmation') }}</small>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <button type="submit" class="button">
          @lang('forms_buttons_common.create')
        </button>
      </div>
    </div>

  {{ Form::close() }}

@endsection
