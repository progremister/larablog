@extends('layouts.main')

@section('title')
    Reset Password
@endsection


@section('body')

<style>

    .header{
        display: none;
    }

    .sidebar{
        display: none;
    }

    .main{
        padding: 0;
    }

</style>

<h1 class="page__title page__title--center">Відновити пароль</h1>
<form action="/" class="form form--auth" method="post">
    <div class="form__group form__group--mb">
        <input class="form__control" type="email" name="" id="" placeholder="Ваш e-mail">
        <span class="form__line"></span>
    </div>
    <div class="form__footer form__footer--center">
        <div class="form__group form__group--mb">
            <button class="btn btn--blue btn--rounded  btn--sm" type="submit">Відновити</button>
        </div>
        <ul class="form__footer-list">
            <li>
                <a href="sign-in.html">Вхід</a>    
            </li>
            <li>
                <a href="sign-up.html">Реєстрація</a>    
            </li>
        </ul>
    </div>
</form>

@endsection