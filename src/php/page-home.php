<?php
    /*
        Template Name: Home Page
    */
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css?v=2">

    <!-- Yandex Maps -->
    <script src="https://api-maps.yandex.ru/2.1/?apikey=c74fa3df-581b-427a-9ae6-f565f4548493&lang=ru_RU" type="text/javascript"></script>

    <?php wp_head(); ?>

    <title>ЭКСКО — Негосударственная экспертиза проекктной документации</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__contacts">
                <div class="header__contacts-column">
                    <a class="header-contact" href="tel:+74012519111">+7 (4012) 519-111</a>
                    <a class="header-contact" href="tel:+74012711292">+7 (4012) 711-292</a>
                    <a class="header-contact" href="mailto:exco@list.ru">exco@list.ru</a>
                </div>
                <div class="header__contacts-column">
                    <p class="header-contact">
                        работаем по всей России
                        <span>пн-чт: c&nbsp;9:00 до 18:00</span>
                        <span>пт: c&nbsp;9:00 до 17:00</span>
                    </p>
                </div>
            </div>
            <nav class="header__nav">
                <div class="header__logo">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 431 180" alt="Логотип ЭКСКО">
                        <g fill="#FFF" fill-rule="evenodd">
                            <path d="M33.839 44.284c-15.997 0-26.895 4.684-26.895 4.684v28.248h10.615v-20.44c5.095-1.278 10.474-2.271 15.853-2.271 20.363 0 33.133 11.477 34.996 32.08H33.269v9.51h35.25c-1.432 22.564-14.731 34.209-31.57 34.209-11.322 0-22.079-5.82-25.193-19.163H1c2.548 20.723 20.24 29.383 34.959 29.383 27.316 0 44.018-20.015 44.018-47.694 0-29.525-16.985-48.546-46.138-48.546M130.37 89.896l28.15-34.34h13.073V46h-36.705v9.557h11.98l-25.34 30.952H109.88V55.557h14.217V46H85v9.557h14.217v73.888H85V139h39.097v-9.555H109.88V96.066h12.389l26.42 33.379h-13.93V139H173v-9.555h-11.243zM386.5 129.806c-18.566 0-33.162-12.46-33.162-37.806 0-23.788 14.596-37.805 33.163-37.805 18.565 0 33.165 12.46 33.165 37.805 0 23.787-14.6 37.806-33.165 37.806m0-85.806C362.549 44 342 61.983 342 92c0 32.991 22.11 48 44.5 48 23.95 0 44.5-17.982 44.5-48 0-32.99-22.107-48-44.5-48" />
                            <path d="M302.222 89.896l28.061-34.34h13.313V46h-36.87v9.557h11.944l-25.265 30.952h-11.61V55.557h14.171V46H257v9.557h14.167v73.888H257V139h38.966v-9.555h-14.17V96.066h12.349l26.334 33.379h-13.884V139H345v-9.555h-11.493zM172 92.286C172 121.343 189.867 141 218.145 141c16.46 0 27.855-5.127 27.855-5.127V108.24h-10.551v19.8c-2.674 1.139-9.005 2.706-16.742 2.706-21.102 0-35.172-13.532-35.172-38.316 0-22.364 12.943-38.174 35.594-38.174 6.956 0 12.34.982 16.32 2.166v20.767H246v-28.06C242.904 47.703 234.324 44 219.832 44 191.132 44 172 62.232 172 92.286M135 2h8v2.096h-5.524V16H135zM151.634 11.418v-.157c0-2.277-1.145-3.396-2.653-3.396-1.604 0-2.749 1.119-2.749 3.396v.157c0 2.298 1.087 3.378 2.767 3.378 1.7 0 2.635-1.177 2.635-3.378zM144 6.217h2.309v1.648c.554-.983 1.794-1.865 3.264-1.865 2.5 0 4.427 1.904 4.427 5.222v.158c0 3.299-1.852 5.301-4.427 5.301-1.585 0-2.73-.805-3.264-1.806V20H144V6.217zM159.012 14.703L155 6h2.54l2.692 6.242L162.712 6H165l-5.523 13h-2.306zM173.575 7.72h-4.15V16H167V6h9v10h-2.425zM184.574 7.72h-4.15V16H178V6h9v10h-2.426zM195.602 12.453v-.956h-1.23c-1.822 0-2.988.385-2.988 1.563 0 .81.472 1.342 1.661 1.342 1.47 0 2.557-.718 2.557-1.949m-6.602.698c0-2.242 2.34-3.051 5.313-3.051h1.289v-.497c0-1.287-.476-1.93-1.883-1.93-1.248 0-1.863.552-1.983 1.507h-2.319c.198-2.242 2.12-3.18 4.44-3.18 2.32 0 4.143.883 4.143 3.513v6.304h-2.356V14.64c-.676.828-1.589 1.36-3.173 1.36-1.905 0-3.471-.844-3.471-2.85M208.383 11.106V16H206V6h2.383v4.435L212.065 6h2.6l-3.998 4.627L215 16h-2.758zM222.69 11.073v-.129c0-1.984-1.007-3.198-2.682-3.198s-2.7 1.195-2.7 3.18v.147c0 1.967.987 3.2 2.7 3.2 1.675 0 2.683-1.233 2.683-3.2M215 11.11v-.147C215 7.984 217.141 6 220.008 6 222.86 6 225 7.968 225 10.909v.147c0 2.996-2.14 4.944-5.01 4.944-2.87 0-4.99-1.967-4.99-4.889M229.946 8.447V16H228V6h3.125l2.458 6.234L236.057 6H239v10h-2.231V8.447L233.675 16h-.75zM248.575 7.72h-4.15V16H242V6h9v10h-2.425zM258.601 12.453v-.956h-1.229c-1.823 0-2.993.385-2.993 1.563 0 .81.476 1.342 1.664 1.342 1.468 0 2.558-.718 2.558-1.949m-6.601.698c0-2.242 2.34-3.051 5.314-3.051h1.287v-.497c0-1.287-.475-1.93-1.883-1.93-1.25 0-1.863.552-1.983 1.507h-2.319c.198-2.242 2.122-3.18 4.44-3.18 2.32 0 4.144.883 4.144 3.513v6.304h-2.36V14.64c-.672.828-1.585 1.36-3.171 1.36-1.904 0-3.469-.844-3.469-2.85M270.628 11.754h-4.255V16H264V6h2.373v4.034h4.255V6H273v10h-2.372zM276 16V6h2.331v7.075L282.687 6H285v10h-2.313V8.925L278.331 16zM289.449 2.078h1.798c.057.673.353 1.251 1.063 1.251.731 0 1.066-.578 1.146-1.25h1.776c-.098 1.596-1.283 2.695-2.922 2.695-1.658 0-2.764-1.099-2.861-2.696zm-1.699 14.38V6.39h2.389v7.122l4.46-7.122h2.37v10.066h-2.37V9.335l-4.46 7.122h-2.389zM133 179h162v-10H133z" />
                        </g>
                    </svg>
                </div>
                <ul class="main-nav">
                    <li class="main-nav__item"><a class="main-nav__link" href="#">Главная</a></li>
                    <li class="main-nav__item"><a class="main-nav__link" href="#">Аккредитация</a></li>
                    <li class="main-nav__item"><a class="main-nav__link" href="#">Заявителю</a></li>
                    <li class="main-nav__item"><a class="main-nav__link" href="#">Заявка на экспертизу</a></li>
                    <li class="main-nav__item"><a class="main-nav__link" href="#">Эксперты</a></li>
                    <li class="main-nav__item"><a class="main-nav__link" href="#">Контакты</a></li>
                    <li class="main-nav__item"><a class="main-nav__book" href="#">Консультация бесплатно</a></li>
                </ul>
                <div class="header__menu-button">
                    <button class="menu-button">
                        <div class="menu-button__middle"></div>
                    </button>
                </div>
            </nav>
            <div class="header__content">
                <h1 class="header__title">
                    <span class="header__title-top">Негосударственная </span>
                    <span class="header__title-middle">экспертиза</span>
                    <span class="header__title-bottom">проектной документации</span>
                </h1>
                <p class="header__text">Закажите у&nbsp;нас экспертизу вашей проектной документации и&nbsp;получите объективные результаты по&nbsp;разумным ценам и&nbsp;в&nbsp;сжатые сроки</p>
                <a class="button button--header" href="#">Заказать экспертизу</a>
            </div>
        </header>
        <section class="section section--cert">
            <header class="section__header">
                <h2 class="section__title">Проводим экспертизу на&nbsp;законных основаниях!</h2>
            </header>
            <div class="section__content">
                <p class="section-text">Экспертиза проектной документации — это гарантия предотвращения рисков, которые
                    могут возникнуть в&nbsp;ходе реализации строительного проекта.</p>
                <p class="section-text">Экспертиза устанавливает соответствие проектной документации требованиям
                    технических регламентов, санитарно-эпидемиологическим, экологическим требованиям,требованиям
                    государственной охраны объектов культурного наследия, требованиям пожарной, промышленной, ядерной,
                    радиационной и иной безопасности, а&nbsp;также результатам инженерных изысканий, в&nbsp;том числе
                    сметной документации.</p>
                <p class="section-text">Цель экспертизы — установление соответствия строительного проекта, требованиям
                    законодательства, стандартам, номам, правилам, действующим на территории России. Негосударственная
                    экспертиза выполняется юридическим лицом, имеющим подтвержденные полномочия на данный вид
                    деятельности (аккредитацию), и&nbsp;только относительно зданий и&nbsp;сооружений, не включенных
                    в&nbsp;список объектов, проектная документация которых в&nbsp;обязательном порядке подлежит
                    государственной экспертизе.</p>
                <p class="section-text">ООО «ЭКСКО» <a href="https://pub.fsa.gov.ru/rene/541/person">аккредитовано</a>
                    Федеральной службой по&nbsp;аккредитации Росаккредитацией в&nbsp;соответствии c&nbsp;Федеральным
                    законом от 28.12.2013г. N 412-ФЗ «Об аккредитации в&nbsp;национальной системе аккредитации»</p>
                <p class="section-text">Работы проводятся в&nbsp;строгом соответствии c&nbsp;регламентом организации,
                    утвержденным 27.01.2018г. на&nbsp;право проведения негосударственной экспертизы проектной
                    документации и&nbsp;(или)&nbsp;негосударственной экспертизы результатов инженерных изысканий –
                    Свидетельство об&nbsp;аккредитации № RA.RU.611182 0001368.</p>
            </div>
            <div class="section__cert"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/accreditation-2--full.jpg" alt></div>
        </section>
        <section class="section section--free-cons">
            <header class="section__header">
                <h2 class="section__title">Получите бесплатную консультацию сейчас, не&nbsp;откладывая</h2>
            </header>
            <div class="section__content">
                <h3 class="title-3">заполните форму и&nbsp;мы перезвоним вам</h3>
                <form class="ctc-form" action><input class="ctc-form__input" type="text" placeholder="Ваше имя:*"
                        size="1"><input class="ctc-form__input" type="text" placeholder="Ваш контактный телефон:*"
                        size="1"><input class="button" type="submit" value="Заказать консультацию"></form>
            </div>
        </section>
        <section class="section section--docs">
            <header class="section__header">
                <h2 class="section__title">Рассмотрим ваши документы уже сегодня</h2>
            </header>
            <div class="section__content">
                <h3 class="title-3">необходимо:</h3>
                <p class="section-text"><strong>Заявление</strong> о проведении негосударственной экспертизы.</p>
                <p class="section-text"><strong>Проектная документация</strong> в&nbsp;соответствии с&nbsp;<a
                        href="./docs/perechen.pdf">перечнем</a>.</p>
                <p class="section-text"><strong>Задание на&nbsp;проектирование (копия)</strong> — в&nbsp;случае если вы
                    направляете к нам на&nbsp;экспертизу проектную документацию или проектную документацию
                    и&nbsp;результаты инженерных изысканий.</p>
                <p class="section-text"><strong>Расчеты</strong> конструктивных и&nbsp;технологических решений,
                    используемых в&nbsp;проектной документации и&nbsp;материалы инженерных изысканий — в&nbsp;случае
                    дополнительного истребования экспертной организацией.</p>
                <p class="section-text">Работы проводятся в&nbsp;строгом соответствии с&nbsp;<a
                        href="./docs/regulations.pdf">регламентом организации</a>, утвержденным 27.01.2018г.</p>
            </div>
        </section>
        <section class="section section--request">
            <header class="section__header">
                <h2 class="section__title">Заказать проведение экспертизы очень просто</h2>
            </header>
            <div class="section__content">
                <h3 class="title-3">оставьте заявку и&nbsp;мы свяжемся c&nbsp;вами</h3>
                <form class="ctc-form" action><input class="ctc-form__input" type="text" placeholder="Ваше имя:*"
                        size="1"><input class="ctc-form__input" type="text" placeholder="Ваш E-mail:*" size="1"><input
                        class="ctc-form__input" type="text" placeholder="Ваш контактный телефон:*" size="1"><textarea
                        class="ctc-form__text" name cols="10" rows="6" placeholder="Сообщение"
                        size="1"></textarea><input class="button" type="submit" value="Заказать консультацию"></form>
            </div>
        </section>
        <section class="section section--experts">
            <header class="section__header">
                <h2 class="section__title">С&nbsp;вами будут работать только лучшие эксперты</h2>
            </header>
            <div class="section__content">
                <h3 class="title-3">наши специалисты — настоящие профессионалы своего дела</h3>
            </div>
            <div class="section__content">
                <article class="expert">
                    <p class="expert__name">Глебичева Алла Геннадьевна</p>
                    <p class="expert__profi">направление деятельности:</p>
                    <p class="expert__skill">«Охрана окружающей среды»</p>
                    <p class="expert__attestat">аттестат №МС-Э-50-2-9594, <br>срок окончания — 11.09.2022</p>
                </article>
                <article class="expert">
                    <p class="expert__name">Навицкас Артур Витасович</p>
                    <p class="expert__profi">направление деятельности:</p>
                    <p class="expert__skill">«Системы электроснабжения»</p>
                    <p class="expert__attestat">аттестат №МС-Э-58-16-9877, <br>срок окончания — 03.11.2022</p>
                </article>
                <article class="expert">
                    <p class="expert__name">Сорокина Людмила Федоровна</p>
                    <p class="expert__profi">направление деятельности:</p>
                    <p class="expert__skill">«Системы связи и&nbsp;сигнализации»</p>
                    <p class="expert__attestat">аттестат №МС-Э-1-17-10103, <br>срок окончания — 22.01.2023</p>
                </article>
                <article class="expert">
                    <p class="expert__name">Шуманова Лариса Петровна</p>
                    <p class="expert__profi">направление деятельности:</p>
                    <p class="expert__skill">«Водоснабжение, водоотведение и&nbsp;канализация»</p>
                    <p class="expert__attestat">аттестат №МС-Э-35-2-6050, <br>срок окончания — 07.07.2020</p>
                </article>
                <article class="expert">
                    <p class="expert__name">Ростников Александр Геннадьевич</p>
                    <p class="expert__profi">направление деятельности:</p>
                    <p class="expert__skill">«Пожарная безопасность»</p>
                    <p class="expert__attestat">аттестат №МС-Э-37-10-12530, <br>срок окончания - 24.09.2024</p>
                </article>
                <article class="expert">
                    <p class="expert__name">Ленинг Эрик Константинович</p>
                    <p class="expert__profi">направление деятельности:</p>
                    <p class="expert__skill">«Конструктивные решения»</p>
                    <p class="expert__attestat">аттестат №МС-Э-53-2-9693, <br>срок окончания — 15.09.2022</p>
                    <p class="expert__profi">направление деятельности:</p>
                    <p class="expert__skill">«Объемно-планировочные и&nbsp;архитектурные решения»</p>
                    <p class="expert__attestat">аттестат №МС-Э-7-2-11733, <br>срок окончания - 04.03.2024</p>
                </article>
            </div>
        </section>
        <section class="section section--contacts">
            <header class="section__header">
                <h2 class="section__title">Наши контакты</h2>
            </header>
            <div class="section__content section__content--contacts">
                <div class="section__map">
                    <div class="map" id="map"></div>
                </div>
                <div class="section__contacts">
                    <article class="contact">
                        <h3 class="contact__title">Телефоны</h3>
                        <p class="contact__text"><a href="tel:+74012519111">+7 (4012) 519-111</a> <br><a
                                href="tel:+74012771292">+7 (4012) 771-292</a></p>
                    </article>
                    <article class="contact">
                        <h3 class="contact__title">E-mail</h3>
                        <p class="contact__text"><a href="mailto:exco@list.ru">exco@list.ru</a></p>
                    </article>
                    <article class="contact">
                        <h3 class="contact__title">Адрес</h3>
                        <p class="contact__text">236040, г.Калининград, <br>ул.Университетская,2Г <br>БЦ «Юбилейный»,
                            офис 309</p>
                    </article>
                    <article class="contact">
                        <h3 class="contact__title">Время работы</h3>
                        <p class="contact__text">пн-чт: c&nbsp;9-00 до 18-00 <br>пт: c&nbsp;9-00 до 17-00 <br>обед:
                            c&nbsp;13-00 до 14-00</p>
                    </article>
                    <article class="contact">
                        <h3 class="contact__title">ИНН</h3>
                        <p class="contact__text">3906145890</p>
                        <h3 class="contact__title">ОГРН</h3>
                        <p class="contact__text">1053903340688</p>
                        <h3 class="contact__title">ОКПО</h3>
                        <p class="contact__text">78643354</p>
                    </article>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="footer__top">
                <div class="footer__logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 431 180"
                        alt="Логотип ЭКСКО">
                        <g fill="#FFF" fill-rule="evenodd">
                            <path
                                d="M33.839 44.284c-15.997 0-26.895 4.684-26.895 4.684v28.248h10.615v-20.44c5.095-1.278 10.474-2.271 15.853-2.271 20.363 0 33.133 11.477 34.996 32.08H33.269v9.51h35.25c-1.432 22.564-14.731 34.209-31.57 34.209-11.322 0-22.079-5.82-25.193-19.163H1c2.548 20.723 20.24 29.383 34.959 29.383 27.316 0 44.018-20.015 44.018-47.694 0-29.525-16.985-48.546-46.138-48.546M130.37 89.896l28.15-34.34h13.073V46h-36.705v9.557h11.98l-25.34 30.952H109.88V55.557h14.217V46H85v9.557h14.217v73.888H85V139h39.097v-9.555H109.88V96.066h12.389l26.42 33.379h-13.93V139H173v-9.555h-11.243zM386.5 129.806c-18.566 0-33.162-12.46-33.162-37.806 0-23.788 14.596-37.805 33.163-37.805 18.565 0 33.165 12.46 33.165 37.805 0 23.787-14.6 37.806-33.165 37.806m0-85.806C362.549 44 342 61.983 342 92c0 32.991 22.11 48 44.5 48 23.95 0 44.5-17.982 44.5-48 0-32.99-22.107-48-44.5-48" />
                            <path
                                d="M302.222 89.896l28.061-34.34h13.313V46h-36.87v9.557h11.944l-25.265 30.952h-11.61V55.557h14.171V46H257v9.557h14.167v73.888H257V139h38.966v-9.555h-14.17V96.066h12.349l26.334 33.379h-13.884V139H345v-9.555h-11.493zM172 92.286C172 121.343 189.867 141 218.145 141c16.46 0 27.855-5.127 27.855-5.127V108.24h-10.551v19.8c-2.674 1.139-9.005 2.706-16.742 2.706-21.102 0-35.172-13.532-35.172-38.316 0-22.364 12.943-38.174 35.594-38.174 6.956 0 12.34.982 16.32 2.166v20.767H246v-28.06C242.904 47.703 234.324 44 219.832 44 191.132 44 172 62.232 172 92.286M135 2h8v2.096h-5.524V16H135zM151.634 11.418v-.157c0-2.277-1.145-3.396-2.653-3.396-1.604 0-2.749 1.119-2.749 3.396v.157c0 2.298 1.087 3.378 2.767 3.378 1.7 0 2.635-1.177 2.635-3.378zM144 6.217h2.309v1.648c.554-.983 1.794-1.865 3.264-1.865 2.5 0 4.427 1.904 4.427 5.222v.158c0 3.299-1.852 5.301-4.427 5.301-1.585 0-2.73-.805-3.264-1.806V20H144V6.217zM159.012 14.703L155 6h2.54l2.692 6.242L162.712 6H165l-5.523 13h-2.306zM173.575 7.72h-4.15V16H167V6h9v10h-2.425zM184.574 7.72h-4.15V16H178V6h9v10h-2.426zM195.602 12.453v-.956h-1.23c-1.822 0-2.988.385-2.988 1.563 0 .81.472 1.342 1.661 1.342 1.47 0 2.557-.718 2.557-1.949m-6.602.698c0-2.242 2.34-3.051 5.313-3.051h1.289v-.497c0-1.287-.476-1.93-1.883-1.93-1.248 0-1.863.552-1.983 1.507h-2.319c.198-2.242 2.12-3.18 4.44-3.18 2.32 0 4.143.883 4.143 3.513v6.304h-2.356V14.64c-.676.828-1.589 1.36-3.173 1.36-1.905 0-3.471-.844-3.471-2.85M208.383 11.106V16H206V6h2.383v4.435L212.065 6h2.6l-3.998 4.627L215 16h-2.758zM222.69 11.073v-.129c0-1.984-1.007-3.198-2.682-3.198s-2.7 1.195-2.7 3.18v.147c0 1.967.987 3.2 2.7 3.2 1.675 0 2.683-1.233 2.683-3.2M215 11.11v-.147C215 7.984 217.141 6 220.008 6 222.86 6 225 7.968 225 10.909v.147c0 2.996-2.14 4.944-5.01 4.944-2.87 0-4.99-1.967-4.99-4.889M229.946 8.447V16H228V6h3.125l2.458 6.234L236.057 6H239v10h-2.231V8.447L233.675 16h-.75zM248.575 7.72h-4.15V16H242V6h9v10h-2.425zM258.601 12.453v-.956h-1.229c-1.823 0-2.993.385-2.993 1.563 0 .81.476 1.342 1.664 1.342 1.468 0 2.558-.718 2.558-1.949m-6.601.698c0-2.242 2.34-3.051 5.314-3.051h1.287v-.497c0-1.287-.475-1.93-1.883-1.93-1.25 0-1.863.552-1.983 1.507h-2.319c.198-2.242 2.122-3.18 4.44-3.18 2.32 0 4.144.883 4.144 3.513v6.304h-2.36V14.64c-.672.828-1.585 1.36-3.171 1.36-1.904 0-3.469-.844-3.469-2.85M270.628 11.754h-4.255V16H264V6h2.373v4.034h4.255V6H273v10h-2.372zM276 16V6h2.331v7.075L282.687 6H285v10h-2.313V8.925L278.331 16zM289.449 2.078h1.798c.057.673.353 1.251 1.063 1.251.731 0 1.066-.578 1.146-1.25h1.776c-.098 1.596-1.283 2.695-2.922 2.695-1.658 0-2.764-1.099-2.861-2.696zm-1.699 14.38V6.39h2.389v7.122l4.46-7.122h2.37v10.066h-2.37V9.335l-4.46 7.122h-2.389zM133 179h162v-10H133z" />
                        </g>
                    </svg></div>
                <nav class="footer__menu">
                    <ul class="footer-nav">
                        <li class="footer-nav__item"><a href="#">Главная</a></li>
                        <li class="footer-nav__item"><a href="#">Аккредитация</a></li>
                        <li class="footer-nav__item"><a href="#">Заявителю</a></li>
                        <li class="footer-nav__item"><a href="#">Заявка на экспертизу</a></li>
                        <li class="footer-nav__item"><a href="#">Зксперты</a></li>
                        <li class="footer-nav__item"><a href="#">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__bottom"><a class="button" href="#">Бесплатная консультация</a>
                <p class="footer__phones"><a href="tel:+74012519111">+7 (4012) 519-111</a> <br><a
                        href="tel:+74012771292">+7 (4012) 771-292</a></p>
                <p class="footer__legals">&copy; ЭКСКО 2018 — 2020</p>
            </div>
        </footer>
    </div>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/scripts.js"></script>
</body>

</html>

<?php wp_footer(); ?>
