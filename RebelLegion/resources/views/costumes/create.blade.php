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
        <label for="position">@lang('costumes.position')</label>
        <input type="text" id="position" name="position" value="{{ old('position') }}" required/>
        @if ($errors->has('position'))
          <small class="error">{{ $errors->first('position') }}</small>
        @endif
      </div>

      <div class="row">
        <label for="descriptionEN">@lang('costumes.descriptionEN')</label>
        <textarea rows="4" cols="50" id="descriptionEN" name="descriptionEN" required>
          {{ old('descriptionEN') }}
        </textarea>
        @if ($errors->has('descriptionEN'))
          <small class="error">{{ $errors->first('descriptionEN') }}</small>
        @endif
      </div>

      <div class="row">
        <label for="descriptionFR">@lang('costumes.descriptionFR')</label>
        <textarea rows="4" cols="50" id="descriptionFR" name="descriptionFR">
          {{ old('descriptionFR') }}
        </textarea>
        @if ($errors->has('descriptionFR'))
          <small class="error">{{ $errors->first('descriptionFR') }}</small>
        @endif
      </div>

      <div class="row">
        <label for="descriptionDE">@lang('costumes.descriptionDE')</label>
        <textarea rows="4" cols="50" id="descriptionDE" name="descriptionDE">
          {{ old('descriptionDE') }}
        </textarea>
        @if ($errors->has('descriptionDE'))
          <small class="error">{{ $errors->first('descriptionDE') }}</small>
        @endif
      </div>

      <div class="row">
        <label for="internationalRebelLegionURL">@lang('costumes.internationalRebelLegionURL')</label>
        <input type="url" id="internationalRebelLegionURL" name="internationalRebelLegionURL" value="{{ old('internationalRebelLegionURL') }}" required/>
        @if ($errors->has('internationalRebelLegionURL'))
          <small class="error">{{ $errors->first('internationalRebelLegionURL') }}</small>
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
