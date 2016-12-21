@extends('layouts.app')

@section('content')

<div class="row">
  <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">

    <h1>@lang('users.setAvatar')</h1>

    {{ Form::open( ['enctype' => 'multipart/form-data', 'method' => 'POST', 'route' => ['users.storeAvatar', 'lang' => App::getLocale(), 'user' => $user->id]] ) }}
      <div class="row">
        <input type="file" id="avatar" name="avatar" value="{{ old('avatar') }}" required />
        @if ($errors->has('avatar'))
          <small class="error">{{ $errors->first('avatar') }}</small>
        @endif
      </div>

      <div class="row">
        <button type="submit" class="button">
          @lang('forms_buttons_common.submit')
        </button>
      </div>

    {{ Form::close() }}
  </div>
</div>

@endsection
