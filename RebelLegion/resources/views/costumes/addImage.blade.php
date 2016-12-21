@extends('layouts.app')

@section('content')

<div class="row">
  <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">

    <h1>@lang('costumes.addImage')</h1>

    {{ Form::open( ['enctype' => 'multipart/form-data', 'method' => 'POST', 'route' => ['costumes.storeImage', 'lang' => App::getLocale(), 'costume' => $costume->id]] ) }}
      <div class="row">
        <input type="file" id="img" name="img" value="{{ old('img') }}" required />
        @if ($errors->has('img'))
          <small class="error">{{ $errors->first('img') }}</small>
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
