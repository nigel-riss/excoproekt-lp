<?php
    /*
        Template Name: Services Page
    */
?>

<?php get_header(); ?>

            <div class="header__caption">
                <h1 class="header__title">Услуги</h1>
            </div>
        </div>
    </header>
    <main>
        <section class="services" id="services">
            <div class="services__wrapper">
                <h2 class="services__title">Услуги</h2>
                <div class="services__content">
                    <article class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M0 0h24v24H0z" />
                                    <path fill="#00785A" fill-rule="nonzero" d="M14.293 16.707a1 1 0 0 1 1.414-1.414l4 4a1 1 0 0 1-1.414 1.414l-4-4z" opacity=".3" />
                                    <path fill="#00785A" fill-rule="nonzero" d="M11 16a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0 2a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="service__title">
                            <a href="<?php echo esc_url(home_url('/')); ?>expertise">Экспертиза</a>
                        </h3>
                        <ul class="service__list">
                            <li class="service__item">
                                <a href="<?php echo esc_url(home_url('/')); ?>expertise/#goods">Товарная экспертиза</a>
                            </li>
                            <li class="service__item">
                                <a href="<?php echo esc_url(home_url('/')); ?>expertise/#law44">Экспертиза товаров, закупаемых в&nbsp;соответствии <span class="nowrap">с ФЗ № 44-ФЗ</span>, <span class="nowrap">№ 223-ФЗ</span></a>
                            </li>
                            <li class="service__item">
                                <a href="<?php echo esc_url(home_url('/')); ?>expertise/#judical">Судебная экспертиза</a>
                            </li>
                            <li class="service__item">
                                <a href="<?php echo esc_url(home_url('/')); ?>expertise/#customs">Экспертиза для&nbsp;таможенных целей</a>
                            </li>
                            <li class="service__item">
                                <a href="<?php echo esc_url(home_url('/')); ?>expertise/#technical">Строительно-техническая экспертиза</a>
                            </li>
                        </ul>
                    </article>
                    <article class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M0 0h24v24H0z" />
                                    <path fill="#00785A" d="M7 4h10v4H7z" opacity=".3" />
                                    <path fill="#00785A"
                                        d="M7 2h10a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm1 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm4-4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm4-4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-8-2a1 1 0 0 0 0 2h4a1 1 0 0 0 0-2H8zM7 4v4h10V4H7z" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="service__title">
                            <a href="<?php echo esc_url(home_url('/')); ?>evaluation">Оценка</a>
                        </h3>
                        <p class="service__text">Определение стоимости активов — рыночной стоимости объекта оценки с&nbsp;учетом его фактического качественного состояния как&nbsp;наиболее вероятную цену, по&nbsp;которой данный объект может быть отчужден на&nbsp;открытом рынке в&nbsp;условиях конкуренции.</p>
                    </article>
                    <article class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M0 0h24v24H0z" />
                                    <path fill="#00785A" d="M12 4.26a.996.996 0 0 1 .897.557l2.042 4.138 4.566.663a1 1 0 0 1 .555 1.706l-3.305 3.221.78 4.548a1 1 0 0 1-1.45 1.054L12 18V4.26z" opacity=".3" />
                                    <path fill="#00785A" d="M12 4.26V18l-4.084 2.147a1 1 0 0 1-1.451-1.054l.78-4.548-3.305-3.22a1 1 0 0 1 .555-1.707l4.566-.663 2.042-4.138A1 1 0 0 1 12 4.259z" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="service__title">
                            <a href="<?php echo esc_url(home_url('/')); ?>hotels">Классификация гостиниц</a>
                        </h3>
                        <p class="service__text">Присвоение средству размещения определенной категории, установленной «Положением о&nbsp;классификации гостиниц», утвержденным Постановлением Правительства Российской Федерации <span class="nowrap">от 16 февраля 2019 г.</span> №&nbsp;158.</p>
                    </article>
                    <article class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M0 0h24v24H0z" />
                                    <path fill="#00785A" d="M8 3v.5A1.5 1.5 0 0 0 9.5 5h5A1.5 1.5 0 0 0 16 3.5V3h2a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2z" opacity=".3" />
                                    <path fill="#00785A" d="M10.875 15.75a.946.946 0 0 1-.67-.287l-1.918-1.917a.926.926 0 0 1 0-1.342c.384-.383 1.007-.383 1.342 0l1.246 1.246 3.162-3.162a.926.926 0 0 1 1.342 0 .926.926 0 0 1 0 1.341l-3.833 3.834a.946.946 0 0 1-.671.287zM11 2a1 1 0 0 1 2 0h1.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5H11z" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="service__title">
                            <a href="<?php echo esc_url(home_url('/')); ?>certification">Сертификация</a>
                        </h3>
                        <p class="service__text">Подтверждение соответствия продукции и&nbsp;услуг требованиям Технических регламентов Евразийского экономического союза, технических регламентов РФ, ГОСТов и&nbsp;других нормативных документов в&nbsp;форме декларации о&nbsp;соответствии или&nbsp;сертификата соответствия.</p>
                    </article>
                    <article class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M0 0h24v24H0z" />
                                    <path fill="#00785A" d="M8 3v.5A1.5 1.5 0 0 0 9.5 5h5A1.5 1.5 0 0 0 16 3.5V3h2a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2z" opacity=".3" />
                                    <path fill="#00785A" d="M11 2a1 1 0 0 1 2 0h1.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5H11z" />
                                    <rect width="7" height="2" x="10" y="9" fill="#00785A" opacity=".3" rx="1" />
                                    <rect width="2" height="2" x="7" y="9" fill="#00785A" opacity=".3" rx="1" />
                                    <rect width="2" height="2" x="7" y="13" fill="#00785A" opacity=".3" rx="1" />
                                    <rect width="7" height="2" x="10" y="13" fill="#00785A" opacity=".3" rx="1" />
                                    <rect width="2" height="2" x="7" y="17" fill="#00785A" opacity=".3" rx="1" />
                                    <rect width="7" height="2" x="10" y="17" fill="#00785A" opacity=".3" rx="1" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="service__title">
                            <a href="<?php echo esc_url(home_url('/')); ?>nongov-expertise">Негосударственная экспертиза проектной документации</a>
                        </h3>
                        <p class="service__text">Экспертиза проектной документации — комплекс мероприятий, направленных на&nbsp;проверку проекта и&nbsp;его соответствия строительным нормам, стандартам, правилам и&nbsp;требованиям законодательства РФ.</p>
                    </article>
                </div>
                <div class="services__more">
                    <div class="more-info">
                        <p class="more-info__text">Получите более подробную информацию об услугах по телефону:</p>
                        <a class="more-info__link" href="tel: +74014519111">+7&nbsp;(4012)&nbsp;519&nbsp;111</a>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>
