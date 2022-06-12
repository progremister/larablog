@extends('layouts.main')

@section('title')
Post
@endsection


@section('body')

    <article class="post">
        <div class="post__actions">
            <a href="index.html">Назад</a>
            <a href="#" data-modal="share-modal">Поділитися<img src="{{ asset("images/icons/share.svg") }}" class="post__actions-icon" alt="Поділитися"></a>
        </div>
        <div class="post__header">
            <h2 class="post__title post__title--mb">Як писати код швидко й безболісно?</h2>
            <ul class="post__data">
                <li class="post__data-item">
                    <time datetime="2021-06-19 16:19">19.06.2021</time>
                </li>
                <li class="post__data-item">
                    <a href="#">Створення сайтів</a>
                </li>
            </ul>
        </div>
        <div class="post__content">
            <div class="post__text">
                <h2>Title 1</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi numquam enim qui tempora adipisci labore temporibus voluptas vero laboriosam? Maxime dolore ex vel rem, quam nulla! Repellendus eveniet nam dolorem.</p>
                <h3>Title 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi numquam enim qui tempora adipisci labore temporibus voluptas vero laboriosam? Maxime dolore ex vel rem, quam nulla! Repellendus eveniet nam dolorem.</p>
                <img src="{{ asset("images/posts/post-2.jpg") }}" alt="">
                <h4>Title 3</h4>
                <p>Lorem ipsum <a href="#">dolor sit amet</a> consectetur adipisicing elit. Quasi numquam enim qui tempora adipisci labore temporibus voluptas vero laboriosam? Maxime dolore ex vel rem, quam nulla! Repellendus eveniet nam dolorem.</p>
                <ul>
                    <li>item 1</li>
                    <li>item 2</li>
                    <li>item 3</li>
                </ul>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae illo velit maiores libero deserunt facilis ad animi esse nisi quasi ipsum facere, reprehenderit, molestias perspiciatis a quaerat perferendis? Rerum, nemo.</p>
                <ol>
                    <li>item 1</li>
                    <li>item 2</li>
                    <li>item 3</li>
                </ol>
                <img src="{{asset("images/posts/post-2 (1).jpg") }}" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi doloremque numquam est ad nesciunt error vel perspiciatis omnis aliquid, ut enim eos nisi consequuntur quos inventore nihil dignissimos et accusamus?</p>
                <table>
                    <tr>
                        <th scope="col">1</th>
                        <th scope="col">2</th>
                        <th scope="col">3</th>
                        <th scope="col">4</th>
                    </tr>
                    <tr>
                        <td scope="col">abcd</td>
                        <td scope="col">1234</td>
                        <td scope="col">qwerty</td>
                        <td scope="col">Lorem ipsum dolor sit, amet</td>
                    </tr>
                </table>
                <p>
                        <div class="embed">
                            <iframe src="https://www.youtube.com/embed/InSenLOKtSQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>             
                </p>
            </div>

            <!-- Related -->

            <div class="related">
                <h3 class="post__subtitle">Цікаве</h3>
                <ul class="related__list">
                    <li class="related__list-item">
                        <h4 class="related__list-title">
                            <a>Як писати код швидко й безболісно?</a>
                        </h4>
                        <time class="related__list-date" datetime="2021-06-19 16:19">19.06.2021</time>
                    </li>
                    <li class="related__list-item">
                        <h4 class="related__list-title">
                            <a>Як я закінчив IT Step Academy</a>
                        </h4>
                        <time class="related__list-date" datetime="2021-05-04 13:05">04.05.2021</time>
                    </li>
                    <li class="related__list-item">
                        <h4 class="related__list-title">
                            <a>Придбав новий ноутбук за 30 000 грн</a>
                        </h4>
                        <time class="related__list-date" datetime="2021-05-14 13:05">14.05.2021</time>
                    </li>
                    <li class="related__list-item">
                        <h4 class="related__list-title">
                            <a>Як писати код швидко й безболісно?</a>
                        </h4>
                        <time class="related__list-date" datetime="2021-06-19 16:19">19.06.2021</time>
                    </li>
                </ul>
            </div>

            <!-- Comments form-->

            <form class="form" action="/" method="post">
                <h3 class="post__subtitle">Обговорення</h3>
                    <div class="form__group">
                        <textarea class="form__control form__control--textarea" name="comment-text" id="" placeholder="Текст коментаря" data-autoresize></textarea>
                        <span class="form__line">

                        </span>
                    </div>
                    <button class="btn btn--blue btn--rounded btn--sm" type="submit">Відправити</button>
            </form>

            <!-- Comments -->

            <ul class="comments">
                <li class="comment">
                    <div class="comment__header">
                        <img class="comment__avatar" src="{{ asset("images/posts/comments/comment-avatar1.jpg") }}" alt="">
                        <div class="comment__data">
                            <div class="coment__name">Дмитро Колосовський</div>
                            <time class="comment__date" datetime="2021-06-20 12:38">2 дні назад</time>
                        </div>
                    </div>
                    <div class="comment__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt laboriosam quasi aut ea eaque nostrum porro nesciunt amet dolorem maiores nobis saepe exercitationem voluptatibus reprehenderit similique ipsum, aperiam repellendus temporibus.
                    </div>
                    <button class="comment__reply" type="button">Відповісти</button>
                    <ul class="comments">
                        <li class="comment">
                            <div class="comment__header">
                                <img class="comment__avatar" src="{{ asset("images/posts/comments/comment-avatar2.jpg") }}" alt="">
                                <div class="comment__data">
                                    <div class="coment__name">Jim Torny</div>
                                    <time class="comment__date" datetime="2021-06-21 15:54">1 день назад</time>
                                </div>
                            </div>
                            <div class="comment__text">
                                Deserunt laboriosam quasi aut ea eaque nostrum porro nesciunt amet dolorem maiores nobis saepe exercitationem voluptatibus.
                            </div>
                            <button class="comment__reply" type="button">Відповісти</button>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </article>
@endsection