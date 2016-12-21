@extends('layouts.app')

@section('content')

<div class="row">
  <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">
    @if( $costume->thumbnailURL != null)
      <img class="thumbnail" src="{{ asset($costume->thumbnailURL) }}" alt="{{ $costume->name }}'s thumbnail">
    @else
      <img class="thumbnail" src="{{ asset('img/costume.jpg') }}" alt="{{ $costume->name }}'s thumbnail">
    @endif
  </div>
</div>

@if(Auth::check() && Auth::user()->isAdmin)
  <div class="row">
    <div class="large-1 large-centered medium-1 medium-centered small-1 small-centered columns">
      <a href="{{ route('costumes.setThumbnail',  ['lang' => App::getLocale(), 'costume' => $costume->id] ) }}" class="button">@lang('costumes.setThumbnail')</a>
    </div>
  </div>
@endif

<div class="row">
  <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">
    <table>
      <tbody>
        <tr>
          <th>@lang('costumes.name')</th>
          <td>{{ $costume->name }}</td>
        </tr>
        <tr>
          <th>@lang('costumes.position')</th>
          <td>{{ $costume->position }}</td>
        </tr>
        <tr>
          <th>@lang('costumes.descriptionEN')</th>
          <td>{{ $costume->descriptionEN }}</td>
        </tr>
        <tr>
          <th>@lang('costumes.descriptionFR')</th>
          <td>{{ $costume->descriptionFR }}</td>
        </tr>
        <tr>
          <th>@lang('costumes.descriptionDE')</th>
          <td>{{ $costume->descriptionDE }}</td>
        </tr>
        <tr>
          <th>@lang('costumes.internationalRebelLegionURL')</th>
          <td>{{ $costume->internationalRebelLegionURL }}</td>
        </tr>

      </tbody>
    </table>

    @if(Auth::check() && Auth::user()->isAdmin)
      <div class="row">
        {{ Form::open([ 'class' => 'edit_delete_forms', 'method' => 'GET', 'route' => ['costumes.edit', 'lang' => App::getLocale(), 'costume' => $costume->id] ]) }}
          <button type="submit" class="button success">@lang('forms_buttons_common.edit')</button>
        {{ Form::close() }}

        {{ Form::open([ 'class' => 'edit_delete_forms', 'method' => 'DELETE', 'route' => ['costumes.destroy', 'lang' => App::getLocale(), 'costume' => $costume->id] ]) }}
          <button type="submit" class="button alert">@lang('forms_buttons_common.delete')</button>
        {{ Form::close() }}
      </div>
    @endif

  </div>
</div>

@if(Auth::check() && Auth::user()->isAdmin)
  <div class="row">
    <div class="large-1 large-centered medium-1 medium-centered small-1 small-centered columns">
      <a href="{{ route('costumes.addImage',  ['lang' => App::getLocale(), 'costume' => $costume->id] ) }}" class="button">@lang('costumes.addImage')</a>
    </div>
  </div>
@endif

@if( count($costume->images) > 0 )
  <div class="row">
    <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">

      @foreach($costume->images as $img)
        <img class="thumbnail" src="{{ asset($img->url) }}" alt="{{ $costume->name }}'s image">
        @if(Auth::check() && Auth::user()->isAdmin)
          <div class="row">
            <div class="large-1 large-centered medium-1 medium-centered small-1 small-centered columns">
              {{ Form::open([ 'class' => 'edit_delete_forms', 'method' => 'DELETE', 'route' => ['costumes.removeImage', 'lang' => App::getLocale(), 'costume' => $costume->id, 'image' => $img->id] ]) }}
                <button type="submit" class="button alert">@lang('forms_buttons_common.remove')</button>
              {{ Form::close() }}
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
@endif

@endsection
