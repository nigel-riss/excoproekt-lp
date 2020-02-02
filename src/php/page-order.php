<?php
    /*
        Template Name: Order Page
    */
    $SITE_KEY = "6LePBdUUAAAAANPIwscnmQl9oJFDZ49bJB7OtJkX";
    $SECRET_KEY = "6LePBdUUAAAAABiUxSjlxnpZ8Cw2A7wpqf91MFQD";
    // Getting post data
    $c_name         = $_POST["contact_name"];
    $c_email        = $_POST["contact_email"];
    $c_phone        = $_POST["contact_phone"];
    $c_message      = $_POST["contact_message"];
    $g_recaptcha    = $_POST["g-recaptcha-response"];
    // Checking if not a robot
    function getCaptcha($secretToken) {
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . "6LePBdUUAAAAABiUxSjlxnpZ8Cw2A7wpqf91MFQD" . "&response=" . $secretToken);
        $return = json_decode($response);
        // print_r($return);
        return ($return->success == true && $return->score > 0.5);
    }
    if (getCaptcha($g_recaptcha)) {
        $to = 'exco@list.ru';
        $bcc = 'mr.kurenkov@gmail.com';
        
        $subject = 'Обращение с сайта excoproekt.ru';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $content = "Имя: " . htmlspecialchars($c_name) 
                    . "<br>Email: " .htmlspecialchars($c_email) 
                    . "<br>Телефон: " .htmlspecialchars($c_phone) 
                    . "<br>Сообщение: " . htmlspecialchars($c_message);

        // $success = wp_mail( $to, $subject, $content, $headers );
        // wp_mail( $bcc, $subject, $content, $headers );
        $success = wp_mail( $bcc, $subject, $content, $headers );
        // $success = 0;
    }
?>

<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />

    <title>ЭКСКО — Обращение</title>

    <?php wp_head(); ?>
</head>

<body>
    <section class="feedback">
        <?php if ($success == 1) { ?>
            <div class="feedback__content">
                <h1 class="feedback__title">Обращение отправлено</h1>

                <div class="feedback__text">
                    <p>Здравствуйте, <?php echo htmlspecialchars($c_name); ?>!<br> Ваша заявка успешно отправлена.</p>
                    <p>Благодарим Вас за обращение. Наши сотрудники в скором времени свяжутся с Вами.</p>
                    <p>C уважением, «ЭКСКО».</p>
                <div>

                <div class="feedback__button">
                    <a class="ghost-button" href="#" onclick="window.history.go(-1); return false;">Вернуться на сайт</a>
                </div>
            </div>
            
        <?php } else {?>
            
            <div class="feedback__content">
                <h1 class="feedback__title">Ошибка отправки</h1>

                <div class="feedback__text">
                    <p>Здравствуйте, <?php echo htmlspecialchars($c_name); ?>!<br> Что-то пошло не так и ваше обращение не может быть отправлено.</p>
                    <p>Пожалуйста попробуйте позже или свяжитесь с нами по телефону <a class="feedback__phone" href="tel:+74012519111">+7 (4012) 519-111</a> или <a class="feedback__phone" href="tel:+74012775590">+7 (4012) 775-590</a> или напишите нам <a class="feedback__phone" href="mailto:exco@list.ru">exco@list.ru</a>.</p>
                    <p>C уважением, «ЭКСКО».</p>
                <div>

                <div class="feedback__button">
                    <a class="ghost-button" href="<?php echo esc_url(home_url('/')); ?>">Вернуться на сайт</a>
                </div>
            </div>
        <?php } ?>
    </section>

    <?php
        wp_footer();
    ?>
</body>
</html>
