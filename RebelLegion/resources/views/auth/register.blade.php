@extends('app')

@section('content')
    <div class="row">
        <div class="small-12 small-centered medium-8 large-6 columns">
          <div class="callout-header">Register</div>
          <div class="callout form">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                  {{ csrf_field() }}

                  <label>Nom *
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <label class="is-invalid-label">
                          {{ $errors->first('name') }}
                        </label>
                    @endif
                  </label>

                  <label>E-Mail Address *
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <label class="is-invalid-label">
                          {{ $errors->first('email') }}
                        </label>
                    @endif
                  </label>

                  <label>Password *
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                      <label class="is-invalid-label">
                        {{ $errors->first('password') }}
                      </label>
                    @endif
                  </label>

                  <label>Confirm Password *
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <label class="is-invalid-label">
                            {{ $errors->first('password_confirmation') }}
                        </label>
                    @endif
                  </label>

                  <p class="help-text" id="helpText">Les champs indiqués par une * sont obligatoires</p>

        					<p>
        						<button type="submit" class="button expanded">
        								Register
        						</button>
        					</p>

              </form>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function(){




    			$('.menu_link_register').parent().addClass('active');

    		});
    </script>
@endsection
