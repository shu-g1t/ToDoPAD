@extends('layouts.app')

@section('content')

            <div class="form__container">
              <div class="form__wrap">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                                <div class="form__input">
                                  <label class="form__input__label" for="">{{__('Email')}}</label><br>
                                  <input autocomplete="off" class="form__input__text" type="email" name="email" value="portfolio_sample@example.com">
                                </div>

                                <div class="form__input">
                                  <label class="form__input__label" for="">{{__('Password')}}</label><br>
                                  <input class="form__input__text" type="password" name="password" value="password">
                                </div>

                                <div class="form__input form__check-box">
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div><br>


                                <div class="form__input">
                                    <button class="submit-button" type="submit" class="">
                                        {{ __('Login') }}
                                    </button><br>
                                    @if (Route::has('password.request'))
                                        <a class="" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>

                    </form>
            </div>
          </div>
@endsection
