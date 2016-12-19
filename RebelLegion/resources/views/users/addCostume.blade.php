@extends('layouts.app')

@section('content')

<div class="row">
  <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">

    <h1>@lang('forms_buttons_common.add') @lang('forms_buttons_common.costume') @lang('forms_buttons_common.to') {{ $user->userName }}</h1>

    {{ Form::open( ['method' => 'POST', 'route' => ['users.storeCostume', 'lang' => App::getLocale(), 'user' => $user->id]] ) }}
      <div class="row">
        <label for="costume">@lang('forms_buttons_common.costume')</label>

        <select name="name">
          @foreach( $costumes as $c)
            <option value="{{ $c->name }}">{{ $c->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="row">
        <button type="submit" class="button">
          @lang('forms_buttons_common.add')
        </button>
      </div>

    {{ Form::close() }}
  </div>
</div>

@endsection
