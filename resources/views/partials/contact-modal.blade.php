<div class="modal" id="contact-modal">
    <div class="modal__content">
        <button class="modal__close" type="button">
            <img src="{{ asset("images/icons/close.svg") }}" alt="Close">
        </button>

        <form action="/" class="form" method="post">
            <div class="form__group form__group--mb">
                <input class="form__control" type="text" name="" id="" placeholder="Вашe ім'я" value="Дмитро Колосовський">
                <span class="form__line"></span>
            </div>
            <div class="form__group form__group--mb">
                <input class="form__control" type="email" name="" id="" placeholder="Ваш e-mail">
                <span class="form__line"></span>
            </div>
            <div class="form__group form__group--mb">
                <textarea class="form__control form__control--textarea " name="" id="" cols="30" rows="10" placeholder="Текст повідомлення"></textarea>  
                <span class="form__line"></span>
            </div>
            <div class="form__footer">
                <div class="form__group form__group--mb">
                    <button class="btn btn--blue btn--rounded  btn--sm" type="submit">Відправити</button>
                </div>
            </div>
        </form>

        <ul class="modal__footer">
            <li>
                email: <a href="mailto:info@myblog.com">info@myblog.com</a> 
            </li> 
            <li>
                тел: <a href="tel:+380689374099">+380689374099</a>
            </li>
        </ul>
    </div>
</div>