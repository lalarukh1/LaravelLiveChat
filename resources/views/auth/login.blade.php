
<hr>
            <div class="card">
                <div class="card-header">{{ __('Login') }} </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-5 col-form-label text-md-right small">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email_login" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-sm" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right small">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password_login" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-sm" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning btn-md">
                                    {{ __('Login') }}
                                </button>
                            </div>
                                <a class="btn btn-link btn-sm offset-md-3" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                        </div>
                    </form>
                </div>
            </div>

