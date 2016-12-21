@extends('layouts.app')

@section('content')

<div class="row">
  <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">

    <h1>@lang('forms_buttons_common.edit') @lang('forms_buttons_common.user') : {{ $user->userName }}</h1>


  {{ Form::open( ['method' => 'PUT', 'route' => ['', 'lang' => App::getLocale(), 'user' => $user->id]] ) }}
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
          @lang('forms_buttons_common.save')
        </button>
    </div>

  {{ Form::close() }}
  </div>
</div>

@endsection
