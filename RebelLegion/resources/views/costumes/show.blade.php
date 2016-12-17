@extends('layouts.app')

@section('content')

<div class="row">
  <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns">

    <h1>@lang('forms_buttons_common.costume') : {{ $costume->name }}</h1>

    <table>
      <tbody>
        <tr>
          <th>@lang('costumes.name')</th>
          <td>{{ $costume->name }}</td>
        </tr>
        <tr>
          <th>@lang('costumes.size')</th>
          <td>{{ $costume->size }}</td>
        </tr>
      </tbody>
    </table>

    <div class="row">
      {{ Form::open([ 'class' => 'edit_delete_forms', 'method' => 'GET', 'route' => ['costumes.edit', 'lang' => App::getLocale(), 'costume' => $costume->id] ]) }}
        <button type="submit" class="button success">@lang('forms_buttons_common.edit')</button>
      {{ Form::close() }}

      {{ Form::open([ 'class' => 'edit_delete_forms', 'method' => 'DELETE', 'route' => ['costumes.destroy', 'lang' => App::getLocale(), 'costume' => $costume->id] ]) }}
        <button type="submit" class="button alert">@lang('forms_buttons_common.delete')</button>
      {{ Form::close() }}
    </div>

  </div>
</div>

@endsection
