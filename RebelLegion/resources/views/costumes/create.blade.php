@extends('layouts.app')

@section('content')

<div class="row">
  <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">

    <h1>@lang('forms_buttons_common.create') @lang('forms_buttons_common.costume')</h1>

    {{ Form::open( ['method' => 'POST', 'route' => ['costumes.store', 'lang' => App::getLocale()]] ) }}
      <div class="row">
        <label for="name">@lang('costumes.name')</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus/>
        @if ($errors->has('name'))
          <small class="error">{{ $errors->first('name') }}</small>
        @endif
      </div>

      <div class="row">
        <label for="size">@lang('costumes.size')</label>
        <input type="text" id="size" name="size" value="{{ old('size') }}" required/>
        @if ($errors->has('size'))
          <small class="error">{{ $errors->first('size') }}</small>
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
