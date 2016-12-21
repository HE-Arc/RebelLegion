@extends('layouts.app')

@section('content')

<div class="row">
  <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">
    @if( $user->avatarURL != null)
      <img class="thumbnail" src="{{ asset($user->avatarURL) }}" alt="{{ $user->userName }}'s avatar'">
    @else
      <img class="thumbnail" src="{{ asset('img/user.png') }}" alt="{{ $user->userName }}'s avatar'">
    @endif
  </div>
</div>

@if((Auth::check() && Auth::user()->isAdmin) || (Auth::check() && Auth::user()->id == $user->id))
  <div class="row">
    <div class="large-1 large-centered medium-1 medium-centered small-1 small-centered columns">
      <a href="{{ route('users.setAvatar',  ['lang' => App::getLocale(), 'user' => $user->id] ) }}" class="button">@lang('users.setAvatar')</a>
    </div>
  </div>
@endif

<div class="row">
  <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">
    <table>
      <tbody>
        <tr>
          <th>@lang('users.userName')</th>
          <td>{{ $user->userName }}</td>
        </tr>
        @if((Auth::check() && Auth::user()->isAdmin) || (Auth::check() && Auth::user()->id == $user->id))
          <tr>
            <th>@lang('users.firstName')</th>
            <td>{{ $user->firstName }}</td>
          </tr>
          <tr>
            <th>@lang('users.lastName')</th>
            <td>{{ $user->lastName }}</td>
          </tr>
          <tr>
            <th>@lang('users.email')</th>
            <td>{{ $user->email }}</td>
          </tr>

          <tr>
            <th>@lang('users.phoneNumber')</th>
            <td>{{ $user->phoneNumber }}</td>
          </tr>
          <tr>
            <th>@lang('users.facebookURL')</th>
            <td><a href="{{ $user->facebookURL }}">{{ $user->facebookURL }}</a></td>
          </tr>
          <tr>
            <th>@lang('users.internationalRebelLegionURL')</th>
            <td><a href="{{ $user->internationalRebelLegionURL }}">{{ $user->internationalRebelLegionURL }}</a></td>
          </tr>
          <tr>
            <th>@lang('users.isPersonalDataVisiblle')</th>
            <td>
              @if($user->isPersonalDataVisiblle == true)
                @lang('forms_buttons_common.yes')
              @else
                @lang('forms_buttons_common.no')
              @endif
            </td>
          </tr>
        @endif

        @if(Auth::check() && Auth::user()->isAdmin)
          <tr>
            <th>@lang('users.isAdmin')</th>
            <td>
              @if($user->isAdmin == true)
                @lang('forms_buttons_common.yes')
              @else
                @lang('forms_buttons_common.no')
              @endif
            </td>
          </tr>
          <tr>
            <th>@lang('users.position')</th>
            <td>{{ $user->position }}</td>
          </tr>
          <tr>
            <th>@lang('users.status')</th>
            <td>{{ $user->status }}</td>
          </tr>
        @endif
      </tbody>
    </table>

    @if((Auth::check() && Auth::user()->isAdmin) || (Auth::check() && Auth::user()->id == $user->id))

      <div class="row">
        {{ Form::open([ 'class' => 'edit_delete_forms', 'method' => 'GET', 'route' => ['users.edit', 'lang' => App::getLocale(), 'user' => $user->id] ]) }}
          <button type="submit" class="button success">@lang('forms_buttons_common.edit')</button>
        {{ Form::close() }}
    @endif
    @if(Auth::check() && Auth::user()->isAdmin)
        {{ Form::open([ 'class' => 'edit_delete_forms', 'method' => 'DELETE', 'route' => ['users.destroy', 'lang' => App::getLocale(), 'user' => $user->id] ]) }}
          <button type="submit" class="button alert">@lang('forms_buttons_common.delete')</button>
        {{ Form::close() }}
      </div>

      <div class="large-1 large-centered medium-1 medium-centered small-1 small-centered columns">
        <a href="{{ route('users.addCostume', [ 'lang' => App::getLocale(), 'user' => $user->id] ) }}" class="button">@lang('forms_buttons_common.add') @lang('forms_buttons_common.costume')</a>
      </div>
    @endif
    <div class="row">
      @foreach($user->costumes as $costume)
        <p>
          @if( $costume->thumbnailURL != null)
            <img class="thumbnail" src="{{ asset($costume->thumbnailURL) }}" alt="{{ $costume->name }}'s thumbnail">
          @else
            <img class="thumbnail" src="{{ asset('img/costume.jpg') }}" alt="{{ $costume->name }}'s thumbnail">
          @endif
          {{ $costume->name }}

          @if(Auth::check() && Auth::user()->isAdmin)
            {{ Form::open([ 'class' => 'edit_delete_forms', 'method' => 'POST', 'route' => ['users.removeCostume', 'lang' => App::getLocale(), 'user' => $user->id, 'costume' => $costume->id] ]) }}
              <button type="submit" class="button alert">@lang('forms_buttons_common.remove')</button>
            {{ Form::close() }}
          @endif
        </p>
      @endforeach
    </div>

  </div>
</div>

@endsection
