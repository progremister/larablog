@extends('layouts.main')

@section('title')
Profile
@endsection


@section('body')

    <h1 class="page__title">Профіль</h1>
    <form action="/" class="form">
        <div class="account">
            <div class="account__form">
                <div class="form__group form__group--mb">
                    <input class="form__control" type="text" name="" id="" placeholder="Ваше  ім'я" value="Дмитро Колосовський">
                    <span class="form__line"></span>
                </div>
                <div class="form__group form__group--mb">
                    <input class="form__control" type="email" name="" id="" placeholder="Ваш e-mail" value="kolosovskyi.dmytro@gmail.com">
                    <span class="form__line"></span>
                </div>
                <div class="form__group form__group--mb">
                    <input class="form__control" type="password" name="" id="" placeholder="Новий пароль">
                    <span class="form__line"></span>
                </div>
                <div class="form__group form__group--mb">
                    <input class="form__control" type="password" name="" id="" placeholder="Підтвердіть пароль">
                    <span class="form__line"></span>
                </div>
            </div>
            <div class="account__avatar">
                <img src="{{ asset("images/sidebar/avatar.jpg") }}" alt="">
                <label class="account__file">
                    <input type="file">
                    Вибрати  аватар
                </label>
            </div>
        </div>
        <button class="btn btn--blue btn--rounded  btn--sm" type="submit">Зберегти</button>
    </form>
    
@endsection