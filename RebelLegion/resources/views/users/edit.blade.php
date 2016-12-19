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
      <label for="phoneNumber">@lang('users.phoneNumber')</label>
      <input type="tel" id="phoneNumber" name="phoneNumber" value="{{ $user->phoneNumber }}" required/>
      @if ($errors->has('phoneNumber'))
        <small class="error">{{ $errors->first('phoneNumber') }}</small>
      @endif
    </div>

    <div class="row">
      <label for="facebookURL">@lang('users.facebookURL')</label>
      <input type="url" id="facebookURL" name="facebookURL" value="{{ $user->facebookURL }}" required/>
      @if ($errors->has('facebookURL'))
        <small class="error">{{ $errors->first('facebookURL') }}</small>
      @endif
    </div>

    <div class="row">
      <label for="isPersonalDataVisiblle">@lang('users.isPersonalDataVisiblle')</label>
      <input type="number" id="isPersonalDataVisiblle" name="isPersonalDataVisiblle" value="{{ $user->isPersonalDataVisiblle }}" required/>
      @if ($errors->has('isPersonalDataVisiblle'))
        <small class="error">{{ $errors->first('isPersonalDataVisiblle') }}</small>
      @endif
    </div>

    <div class="row">
      <label for="position">@lang('users.position')</label>
      <input type="text" id="position" name="position" value="{{ $user->position }}" required/>
      @if ($errors->has('position'))
        <small class="error">{{ $errors->first('position') }}</small>
      @endif
    </div>

    <div class="row">
      <label for="status">@lang('users.status')</label>
      <input type="text" id="status" name="status" value="{{ $user->status }}" required/>
      @if ($errors->has('status'))
        <small class="error">{{ $errors->first('status') }}</small>
      @endif
    </div>

    <div class="row">
      <label for="internationalRebelLegionURL">@lang('users.internationalRebelLegionURL')</label>
      <input type="url" id="internationalRebelLegionURL" name="internationalRebelLegionURL" value="{{ $user->internationalRebelLegionURL }}" required/>
      @if ($errors->has('internationalRebelLegionURL'))
        <small class="error">{{ $errors->first('internationalRebelLegionURL') }}</small>
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
          @lang('forms_buttons_common.save')
        </button>
    </div>

  {{ Form::close() }}
  </div>
</div>

@endsection
