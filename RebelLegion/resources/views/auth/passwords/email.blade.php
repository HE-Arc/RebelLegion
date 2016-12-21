@extends('layouts.app')

<!-- Main Content -->
@section('content')
    <div class="row">
      <div class="small-12 small-centered medium-8 large-6 columns">
        <div class="callout-header">@lang('auth.resetPassword')</div>
        <div class="callout form">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                <form role="form" method="POST" action="{{ route('sendResetLinkEmail', App::getLocale()) }}">
                    {{ csrf_field() }}

                    <label>@lang('users.email')
                      <input id="email" type="email" name="email" placeholder="monmail@exemple.com" value="{{ old('email') }}" required="required" aria-describedby="exampleHelpText">
                      @if ($errors->has('email'))
                          <span>
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </label>


          					<p>
          						<button type="submit" class="button expanded">@lang('auth.sendPasswordResetLink')</button>
          					</p>

                </form>
        </div>
      </div>
    </div>
@endsection
