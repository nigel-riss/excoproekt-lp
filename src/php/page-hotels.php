<?php
    /*
        Template Name: Hotels Page
    */
?>

<?php get_header(); ?>

            <div class="header__caption">
                <h1 class="header__title">Классификация гостиниц</h1>
            </div>
        </div>
    </header>
    <main>
        <section class="section">
            <div class="section__wrapper">
                <header class="section__header">
                    <p class="section__subtitle"><a href="<?php echo esc_url(home_url('/')); ?>services">Услуги</a> — Классификация гостиниц</p>
                    <h2 class="section__title">Классификация гостиниц и&nbsp;других средств размещения</h2>
                    <!-- <p class="section__text">— присвоение средству размещения (гостинице) определенной категории, установленной «Положением о&nbsp;классификации гостиниц», утвержденным Постановлением Правительства Российской Федерации <span class="nowrap">от 16 февраля 2019 г.</span> №158.</p> -->
                    <div class="more-info more-info--abs">
                        <p class="more-info__text">Получите более подробную информацию об&nbsp;услугах&nbsp;по&nbsp;телефону:</p>
                        <a class="more-info__link" href="tel: +74014519111">+7&nbsp;(4012)&nbsp;519&nbsp;111</a>
                    </div>
                </header>
                <div class="section__content">
                    <p>Объектами классификации являются следующие средства размещения:</p>
                    <ul>
                        <li>гостиница, отель;</li>
                        <li>курортный отель, санаторий;</li>
                        <li>апартотель;</li>
                        <li>мотель;</li>
                        <li>комплекс апартаментов;</li>
                        <li>акватель;</li>
                        <li>хостел;</li>
                        <li>фермерский гостевой дом (комнаты);</li>
                        <li>горный приют, дом охотника, дом рыбака, шале, бунгало.</li>
                    </ul>
                    <div class="section__float-l">
                        <a href="<?php bloginfo('stylesheet_directory'); ?>/docs/accreditation.pdf">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/accreditation.jpg" alt="Аттестат аккредитации">
                        </a>
                    </div>
                    <p>ЭКСКО аккредитовано <a href="https://tourism.gov39.ru/activities/classification.php">Министерством по&nbsp;туризму Калининградской области</a> для&nbsp;проведения работ по&nbsp;классификации гостиниц и&nbsp;иных средств размещения.</p>
                    <p>Организация включена в&nbsp;<a href="https://xn----7sba3acabbldhv3chawrl5bzn.xn--p1ai/displayOrganization/105">Федеральный перечень аккредитованных организаций за&nbsp;номером 220000105.</a></p>
                    <p>ЭКСКО выполняет работы по&nbsp;классификации гостиниц — проводит оценку соответствия на&nbsp;всей территории России в&nbsp;соответствии с&nbsp;Федеральным законом <span class="nowrap">от 24.11.1996</span> <span class="nowrap">№ 132-ФЗ</span> «Об&nbsp;основах туристской деятельности в&nbsp;Российской Федерации».</p>
                    <p>По&nbsp;результатам классификации гостиниц выдается Свидетельство о&nbsp;присвоении гостинице категории от&nbsp;«без звезд» до&nbsp;«5&nbsp;звезд».</p>
                    <p>Классификация гостиниц является обязательным условием для&nbsp;осуществления деятельности по&nbsp;предоставлению гостиничных услуг, в&nbsp;соответствии с&nbsp;Федеральным законом <span class="nowrap">№ 16-ФЗ</span> «О&nbsp;внесении изменений в&nbsp;Федеральный закон «Об&nbsp;основах туристской деятельности в&nbsp;Российской Федерации»:</p>
                    <ul>
                        <li>с 1 июля 2019 года — для&nbsp;гостиниц с&nbsp;номерным фондом более 50&nbsp;номеров;</li>
                        <li>с 1 января 2020 года — для&nbsp;гостиниц с&nbsp;номерным фондом более 15&nbsp;номеров;</li>
                        <li>с 1 января 2021 года — в&nbsp;отношении всех остальных гостиниц.</li>
                    </ul>
                    <div class="docs-download">
                        <p class="docs-download__text">Для прохождения процедуры классификации Вам необходимо предоставить заявку, анкету, документы по перечню</p>
                        <div class="docs-download__links">
                            <a href="<?php bloginfo('stylesheet_directory'); ?>/docs/application.docx">Заявка</a>
                            <a href="<?php bloginfo('stylesheet_directory'); ?>/docs/form.docx">Анкета</a>
                            <a href="<?php bloginfo('stylesheet_directory'); ?>/docs/docs-list.docx">Перечень документов</a>
                        </div>
                    </div>
                    <div class="section__float-l">
                        <a href="<?php bloginfo('stylesheet_directory'); ?>/img/certificate-full.jpg">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/certificate.jpg" alt="Пример свидетельства о присвоении категории">
                        </a>
                    </div>
                    <p>В течение 3-х дней после предоставления необходимой документации и&nbsp;обследования заявленного объекта Вы&nbsp;получите «Свидетельство о&nbsp;присвоении категории» Вашего объекта размещения.
                    </p>
                    <p>Квалифицированные эксперты ЭКСКО проведут консультации и&nbsp;окажут методическую помощь Заявителям&nbsp;по всем вопросам подготовки, проведения классификации и&nbsp;оценки соответствия гостиниц, санаториев, домов отдыха, пансионатов, хостелов и&nbsp;других средств размещения.</p>
                </div>
            </div>
        </section>


<?php get_footer(); ?>
