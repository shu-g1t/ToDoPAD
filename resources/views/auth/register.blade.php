@extends('layouts.app')

@section('content')
<div class="form__container">
  <div class="form__wrap">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form__input">
                          <label class="form__input__label" for="">{{__('Email')}}</label><br>
                          <input autocomplete="off" class="form__input__text" type="email" name="email" value="">
                        </div>

                        <div class="form__input">
                          <label class="form__input__label" for="">{{__('Password')}}</label><br>
                          <input class="form__input__text" type="password" name="password" value="" autocomplete="off">
                        </div>

                        <div class="form__input">
                          <label class="form__input__label" for="">{{__('Re_Password')}}</label><br>
                          <input class="form__input__text" type="password" name="password_confirmation" value="" autocomplete="off">
                        </div>


                        <div class="form__input">
                            <button class="submit-button" type="submit" class="">
                                {{ __('Register') }}
                            </button>
                        </div>

                    </form>
    </div>
</div>
@endsection
