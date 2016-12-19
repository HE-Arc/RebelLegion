@extends('layouts.app')

@section('content')

<div class="row">
  <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">

    <h1>@lang('forms_buttons_common.user') : {{ $user->userName }}</h1>

    <table>
      <tbody>
        <tr>
          <th>@lang('users.userName')</th>
          <td>{{ $user->userName }}</td>
        </tr>
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
          <th>@lang('users.isPersonalDataVisiblle')</th>
          <td>{{ $user->isPersonalDataVisiblle }}</td>
        </tr>
        <tr>
          <th>@lang('users.position')</th>
          <td>{{ $user->position }}</td>
        </tr>
        <tr>
          <th>@lang('users.status')</th>
          <td>{{ $user->status }}</td>
        </tr>
        <tr>
          <th>@lang('users.internationalRebelLegionURL')</th>
          <td><a href="{{ $user->internationalRebelLegionURL }}">{{ $user->internationalRebelLegionURL }}</a></td>
        </tr>
        <tr>
          <th>@lang('users.avatarURL')</th>
          <td>{{ $user->avatarURL }}</td>
        </tr>
      </tbody>
    </table>

    <div class="row">
      {{ Form::open([ 'class' => 'edit_delete_forms', 'method' => 'GET', 'route' => ['users.edit', 'lang' => App::getLocale(), 'user' => $user->id] ]) }}
        <button type="submit" class="button success">@lang('forms_buttons_common.edit')</button>
      {{ Form::close() }}

      {{ Form::open([ 'class' => 'edit_delete_forms', 'method' => 'DELETE', 'route' => ['users.destroy', 'lang' => App::getLocale(), 'user' => $user->id] ]) }}
        <button type="submit" class="button alert">@lang('forms_buttons_common.delete')</button>
      {{ Form::close() }}
    </div>

    <div class="large-1 large-centered medium-1 medium-centered small-1 small-centered columns">
      <a href="{{ route('users.addCostume', [ 'lang' => App::getLocale(), 'user' => $user->id] ) }}" class="button">@lang('forms_buttons_common.add') @lang('forms_buttons_common.costume')</a>
    </div>

    <div class="row">
      @foreach($user->costumes as $costume)
        <p>
          {{ $costume->name }}
          {{ Form::open([ 'class' => 'edit_delete_forms', 'method' => 'POST', 'route' => ['users.removeCostume', 'lang' => App::getLocale(), 'user' => $user->id, 'costume' => $costume->id] ]) }}
            <button type="submit" class="button alert">@lang('forms_buttons_common.remove')</button>
          {{ Form::close() }}
        </p>
      @endforeach
    </div>

  </div>
</div>

@endsection
