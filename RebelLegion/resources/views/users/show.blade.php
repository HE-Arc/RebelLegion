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

  </div>
</div>

@endsection
