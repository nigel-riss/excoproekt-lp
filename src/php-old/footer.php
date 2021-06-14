
        <section class="section section--dark contacts" id="contacts">
            <div class="section__wrapper">
                <header class="section__header">
                    <p class="section__subtitle">03 — Контакты</p>
                    <h2 class="section__title"><em>Напишите</em> нам</h2>
                    <p class="section__text">
                        <br>236040 г.&nbsp;Калининград,
                        <br>ул.&nbsp;Университетская, 2-г, офис 309.
                        <br><br><a href="tel:+79062196374">+7 (906) 219 63 74</a>
                        <br><a href="tel:+74012771292">+7 (4012) 771 292</a>
                        <br><br><a href="mailto:exco@list.ru">exco@list.ru</a>
                    </p>
                </header>
                <div class="section__content section__content--contacts">
                    <form class="ctc-form" action="<?php echo esc_url(home_url('/')); ?>order/" method="post">
                        <fieldset class="ctc-form__fieldset" size="1">
                            <input class="ctc-form__input" type="text" name="contact_name" placeholder="Ваше имя:*" size="1">
                            <input class="ctc-form__input" type="text" name="contact_phone" placeholder="Ваш контактный телефон:*" size="1">
                            <textarea class="ctc-form__text" name="contact_message" cols="10" rows="6" placeholder="Сообщение" size="1"></textarea>
                            <input class="ctc-form__input" type="hidden" name="g-recaptcha-response" id="g-recaptcha-response" size="1"/>
                            <input class="ctc-form__button" type="submit" value="Отправить">
                        </fieldset>
                        <p class="ctc-form__note">Нажимая на кнопку «Отправить», вы даёте согласие на обработку персональных данных 
                            <br>* - поля обязательные для заполнения
                            <br><br>Этот сайт защищён reCAPTCHA и Google. <a href="https://policies.google.com/privacy">Политика конфиденциальности</a> и <a href="https://policies.google.com/terms">условия использования</a> применяются.
                        </p>
                        <!-- <a class="ctc-form__application" href="#">Скачать заявку на услугу</a> -->
                    </form>
                </div>
            </div>
            <div class="contacts__map"></div>
            <div class="contacts__overlay"></div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__wrapper">
            <div class="footer__legals">
                <div class="footer__logo">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 332 406" class="footer__logo-s" alt="Логотип ЭКСКО маленький зелёный">
                        <g fill-rule="evenodd">
                            <path d="M159.147 75.243c-29.766 0-50.047 8.694-50.047 8.694v52.417h19.756V98.426c9.482-2.372 19.49-4.218 29.505-4.218 37.887 0 61.662 21.298 65.121 59.531h-65.387v17.647h65.597c-2.668 41.87-27.412 63.48-58.756 63.48-21.067 0-41.08-10.8-46.887-35.559H98.043c4.733 38.46 37.66 54.526 65.05 54.526 50.835 0 81.924-37.14 81.924-88.506 0-54.785-31.61-90.084-85.87-90.084" />
                            <path d="M165.53 312.061C84.733 312.061 19 246.328 19 165.53 19 84.733 84.733 19 165.53 19s146.53 65.733 146.53 146.53c0 80.798-65.733 146.531-146.53 146.531M165.53 0C74.257 0 0 74.257 0 165.53c0 91.274 74.257 165.531 165.53 165.531s165.53-74.257 165.53-165.531C331.06 74.257 256.803 0 165.53 0" />
                            <path d="M95.045 405.185h146.972v-17.648H95.045z" mask="url(#b)" />
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 431 180" class="footer__logo-l" alt="Логотип ЭКСКО">
                        <g fill="#FFF" fill-rule="evenodd">
                            <path d="M33.839 44.284c-15.997 0-26.895 4.684-26.895 4.684v28.248h10.615v-20.44c5.095-1.278 10.474-2.271 15.853-2.271 20.363 0 33.133 11.477 34.996 32.08H33.269v9.51h35.25c-1.432 22.564-14.731 34.209-31.57 34.209-11.322 0-22.079-5.82-25.193-19.163H1c2.548 20.723 20.24 29.383 34.959 29.383 27.316 0 44.018-20.015 44.018-47.694 0-29.525-16.985-48.546-46.138-48.546M130.37 89.896l28.15-34.34h13.073V46h-36.705v9.557h11.98l-25.34 30.952H109.88V55.557h14.217V46H85v9.557h14.217v73.888H85V139h39.097v-9.555H109.88V96.066h12.389l26.42 33.379h-13.93V139H173v-9.555h-11.243zM386.5 129.806c-18.566 0-33.162-12.46-33.162-37.806 0-23.788 14.596-37.805 33.163-37.805 18.565 0 33.165 12.46 33.165 37.805 0 23.787-14.6 37.806-33.165 37.806m0-85.806C362.549 44 342 61.983 342 92c0 32.991 22.11 48 44.5 48 23.95 0 44.5-17.982 44.5-48 0-32.99-22.107-48-44.5-48" />
                            <path d="M302.222 89.896l28.061-34.34h13.313V46h-36.87v9.557h11.944l-25.265 30.952h-11.61V55.557h14.171V46H257v9.557h14.167v73.888H257V139h38.966v-9.555h-14.17V96.066h12.349l26.334 33.379h-13.884V139H345v-9.555h-11.493zM172 92.286C172 121.343 189.867 141 218.145 141c16.46 0 27.855-5.127 27.855-5.127V108.24h-10.551v19.8c-2.674 1.139-9.005 2.706-16.742 2.706-21.102 0-35.172-13.532-35.172-38.316 0-22.364 12.943-38.174 35.594-38.174 6.956 0 12.34.982 16.32 2.166v20.767H246v-28.06C242.904 47.703 234.324 44 219.832 44 191.132 44 172 62.232 172 92.286M135 2h8v2.096h-5.524V16H135zM151.634 11.418v-.157c0-2.277-1.145-3.396-2.653-3.396-1.604 0-2.749 1.119-2.749 3.396v.157c0 2.298 1.087 3.378 2.767 3.378 1.7 0 2.635-1.177 2.635-3.378zM144 6.217h2.309v1.648c.554-.983 1.794-1.865 3.264-1.865 2.5 0 4.427 1.904 4.427 5.222v.158c0 3.299-1.852 5.301-4.427 5.301-1.585 0-2.73-.805-3.264-1.806V20H144V6.217zM159.012 14.703L155 6h2.54l2.692 6.242L162.712 6H165l-5.523 13h-2.306zM173.575 7.72h-4.15V16H167V6h9v10h-2.425zM184.574 7.72h-4.15V16H178V6h9v10h-2.426zM195.602 12.453v-.956h-1.23c-1.822 0-2.988.385-2.988 1.563 0 .81.472 1.342 1.661 1.342 1.47 0 2.557-.718 2.557-1.949m-6.602.698c0-2.242 2.34-3.051 5.313-3.051h1.289v-.497c0-1.287-.476-1.93-1.883-1.93-1.248 0-1.863.552-1.983 1.507h-2.319c.198-2.242 2.12-3.18 4.44-3.18 2.32 0 4.143.883 4.143 3.513v6.304h-2.356V14.64c-.676.828-1.589 1.36-3.173 1.36-1.905 0-3.471-.844-3.471-2.85M208.383 11.106V16H206V6h2.383v4.435L212.065 6h2.6l-3.998 4.627L215 16h-2.758zM222.69 11.073v-.129c0-1.984-1.007-3.198-2.682-3.198s-2.7 1.195-2.7 3.18v.147c0 1.967.987 3.2 2.7 3.2 1.675 0 2.683-1.233 2.683-3.2M215 11.11v-.147C215 7.984 217.141 6 220.008 6 222.86 6 225 7.968 225 10.909v.147c0 2.996-2.14 4.944-5.01 4.944-2.87 0-4.99-1.967-4.99-4.889M229.946 8.447V16H228V6h3.125l2.458 6.234L236.057 6H239v10h-2.231V8.447L233.675 16h-.75zM248.575 7.72h-4.15V16H242V6h9v10h-2.425zM258.601 12.453v-.956h-1.229c-1.823 0-2.993.385-2.993 1.563 0 .81.476 1.342 1.664 1.342 1.468 0 2.558-.718 2.558-1.949m-6.601.698c0-2.242 2.34-3.051 5.314-3.051h1.287v-.497c0-1.287-.475-1.93-1.883-1.93-1.25 0-1.863.552-1.983 1.507h-2.319c.198-2.242 2.122-3.18 4.44-3.18 2.32 0 4.144.883 4.144 3.513v6.304h-2.36V14.64c-.672.828-1.585 1.36-3.171 1.36-1.904 0-3.469-.844-3.469-2.85M270.628 11.754h-4.255V16H264V6h2.373v4.034h4.255V6H273v10h-2.372zM276 16V6h2.331v7.075L282.687 6H285v10h-2.313V8.925L278.331 16zM289.449 2.078h1.798c.057.673.353 1.251 1.063 1.251.731 0 1.066-.578 1.146-1.25h1.776c-.098 1.596-1.283 2.695-2.922 2.695-1.658 0-2.764-1.099-2.861-2.696zm-1.699 14.38V6.39h2.389v7.122l4.46-7.122h2.37v10.066h-2.37V9.335l-4.46 7.122h-2.389zM133 179h162v-10H133z" />
                        </g>
                    </svg>
                </div>
                <p class="footer__copy">Группа&nbsp;компаний <br>ЭКСКО&nbsp;©&nbsp;2019</p>
            </div>
            <div class="footer__navigation">
                <div class="footer__nav">
                    <h3 class="footer__title">Навигация</h3>
                    <nav class="footer-nav">
                        <ul class="footer-nav__list">
                            <li class="footer-nav__item">
                                <a class="footer-nav__link footer-nav__link--main" href="<?php echo esc_url(home_url('/')); ?>expertise">Экспертиза</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="<?php echo esc_url(home_url('/')); ?>expertise/#goods">Товарная экспертиза</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="<?php echo esc_url(home_url('/')); ?>expertise/#judical">Судебная экспертиза</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="<?php echo esc_url(home_url('/')); ?>expertise/#customs">Экспертиза для таможенных целей</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="<?php echo esc_url(home_url('/')); ?>expertise/#technical">Строительно-техническая экспертиза</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link" href="<?php echo esc_url(home_url('/')); ?>expertise/#law44">Экспертиза товаров, закупаемых в&nbsp;соответствии с&nbsp;ФЗ&nbsp;№44, ФЗ&nbsp;№223</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="footer__nav">
                    <h3 class="footer__title">Навигация</h3>
                    <nav class="footer-nav">
                        <ul class="footer-nav__list">
                            <li class="footer-nav__item">
                                <a class="footer-nav__link footer-nav__link--main" href="<?php echo esc_url(home_url('/')); ?>evaluation">Оценка</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link footer-nav__link--main" href="<?php echo esc_url(home_url('/')); ?>nongov-expertise">Негосударственная экспертиза проектной документации</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link footer-nav__link--main" href="<?php echo esc_url(home_url('/')); ?>hotels">Классификация гостиниц</a>
                            </li>
                            <li class="footer-nav__item">
                                <a class="footer-nav__link footer-nav__link--main" href="<?php echo esc_url(home_url('/')); ?>certification">Сертификация</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="footer__contacts">
                <h3 class="footer__title">Контакты</h3>
                <p>Адрес:&nbsp;236040 г.&nbsp;Калининград, ул.&nbsp;Университетская,&nbsp;2-г, офис&nbsp;309.<br></p>
                <p>Телефон/факс: <a href="tel:+74012519111">+7 (4012) 519-111</a> <br>Телефон: <a href="tel:+74012771292">+7 (4012) 771-292</a></p>
                <p>Электронная почта: <a href="mailto:exco@list.ru">exco@list.ru</a></p>
            </div>
        </div>

    </footer>

    <?php wp_footer(); ?>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/scripts.js"></script>
</body>

</html>
