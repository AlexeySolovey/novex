﻿<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <title>Новекс</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/jquery.bxslider.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="icon" type="image/png" href="/favicon.png">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="language">
                        <ul>
                            <li class="active"><a href="<?=$_SERVER['SCRIPT_NAME'];?>">Ua</a></li>
                            <li><a href="<?= substr($_SERVER['SCRIPT_NAME'], 3);?>">Ru</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="/ua/">
                        <img src="/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-sm-6">
                    <div class="contact_form">
                        <div class="phones">
                            <button data-toggle="modal" data-target="#basicModal">Замовити дзвінок</button>
                            <ul>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    (0564) 74 03 52
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    050 321 67 77
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    095 207 65 65
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    067 511 05 11
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="navigation">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <div class="col-xs-6">
                        <div class="consult">
                            <a href="#" data-toggle="modal" data-target="#basicModal">Консультація</a>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="language">
                            <ul>
                                <li class="active"><a href="<?=$_SERVER['SCRIPT_NAME'];?>">Ua</a></li>
                           		<li><a href="<?= substr($_SERVER['SCRIPT_NAME'], 3);?>">Ru</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="navbar-nav">
                        <li class="main_link">
                            <a href="#">Головна</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                        </li>
                        <li>
                            <a href="#advantage">Переваги</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                        </li>
                        <li class="desk-hide-list"><a href=#catalog>Каталог</a></li>
                        <li class="dropdown hidden-xs">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Каталог</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                            <ul class="dropdown-menu my-pull-right">
                                <li><a href="klink_good.php">Клінкерна цегла</a></li>
                                <li><a href="lichevoy_good.php">Лицьова цегла</a></li>
                                <li><a href="bruschatka_good.php">Клінкерна бруківка</a></li>
                                <li><a href="ryadovoy_good.php">Цегла керамічна рядова м100, M125</a></li>
                                <li><a href="keramobloki_good.php">Поризовані керамічні блоки</a></li>
                                <li><a href="ruberoid_good.php">Покрівельні матеріали (руберойд)</a></li>
                                <li><a href="materialu_good.php">Гідроізоляційні матеріали</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#about">Про нас</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                        </li>
                        <li class="hidden-xs">
                            <a href="#gallery">Галерея</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                        </li>
                        <li>
                            <a href="#diploms">Сертифікати</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                        </li>
                        <li>
                            <a href="#contacts">Контакти</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section class="baner">
        <div class="parallax-window" data-parallax="scroll" data-image-src="/images/banerr.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-lg-9">
                        <h2>покрівельні та стінові будматеріали <br />в Кривому Розі</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="logo">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="/ua/">
                        <img src="/images/logo.png" class="img-responsive" alt="logo">
                    </a>
                    <h2>покрівельні та стінові будматеріали в Кривому Розі</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="call-me">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <button data-toggle="modal" data-target="#basicModal">Замовити дзвінок</button>
                    <ul>
                        <li style="margin-left: 12px;">
                            <i class="fa fa-phone"></i>
                            (0564) 74 03 52
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            050 321 67 77
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            095 207 65 65
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            067 511 05 11
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="goods">
        <a class="anchor_for_goods" name="catalog"></a>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="wrap">
                        <div class="border"></div>
                        <div class="good-item">
                            <a href="klink_good.php">
                                <img src="/images/goods_klink.png" alt="Клінкерна цегла">
                            </a>
                            <a href="klink_good.php">
                                <p>Клінкерна цегла</p>
                            </a>
                            <button data-toggle="modal" data-target="#basicModal">Дізнатись ціну</button>
                            <div class="jaw"></div>
                        </div>
                        <div class="good-item">
                            <a href="lichevoy_good.php">
                                <img src="/images/goods_lichevoy.png" alt="Лицьова цегла">
                            </a>
                            <a href="lichevoy_good.php">
                                <p>Лицьова цегла</p>
                            </a>
                            <button data-toggle="modal" data-target="#basicModal">Дізнатись ціну</button>
                            <div class="jaw"></div>
                        </div>
                        <div class="good-item bruschatka">
                            <a href="bruschatka_good.php">
                                <img src="/images/goods_bruschatka.png" alt="Клінкерна бруківка">
                            </a>
                            <a href="bruschatka_good.php">
                                <p>Клінкерна бруківка</p>
                            </a>
                            <button data-toggle="modal" data-target="#basicModal">Дізнатись ціну</button>
                            <div class="jaw"></div>
                        </div>
                        <div class="good-item">
                            <a href="ryadovoy_good.php">
                                <img src="/images/goods_ryadovoy.png" alt="Цегла керамічна рядова м 100">
                            </a>
                            <a href="ryadovoy_good.php">
                                <p>Цегла керамічна рядова м100, м125</p>
                            </a>
                            <button data-toggle="modal" data-target="#basicModal">Дізнатись ціну</button>
                            <div class="jaw"></div>
                        </div>
                        <div class="good-item">
                            <a href="keramobloki_good.php">
                                <img src="/images/goods_keramobloki.png" alt="керамічні блоки">
                            </a>
                            <a href="keramobloki_good.php">
                                <p>Поризовані керамічні блоки</p>
                            </a>
                            <button data-toggle="modal" data-target="#basicModal">Дізнатись ціну</button>
                            <div class="jaw"></div>
                        </div>
                        <div class="good-item">
                            <a href="ruberoid_good.php">
                                <img src="/images/goods_ruberoid.png" alt="руберойд">
                            </a>
                            <a href="ruberoid_good.php">
                                <p>Покрівельні матеріали (руберойд)</p>
                            </a>
                            <button data-toggle="modal" data-target="#basicModal">Дізнатись ціну</button>
                            <div class="jaw"></div>
                        </div>
                        <div class="good-item">
                            <a href="materialu_good.php">
                                <img src="/images/goods_materialu.png" alt="Гідроізоляційні матеріали">
                            </a>
                            <a href="materialu_good.php">
                                <p class="hidden-sm hidden-md hidden-lg">Гідроізоляційні матеріали</p>
                                <p class="hidden-xs">Гідроізоляційні матеріали</p>
                            </a>
                            <button data-toggle="modal" data-target="#basicModal">Дізнатись ціну</button>
                            <div class="jaw"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="manufacturer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tehno"></div>
                    <div class="kerameya"></div>
                    <div class="cherkov"></div>
                    <div class="spoly"></div>
                    <div class="koagylyant"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantage">
        <a class="advantage_anchor" name="advantage"></a>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>переваги</h2>
                    <div class="item-advant">
                        <div class="figure">
                            <div class="storage"></div>
                        </div>
                        <p>Склад в центрі міста</p>
                    </div>
                    <div class="item-advant">
                        <div class="figure">
                            <div class="logistic"></div>
                        </div>
                        <p>Логістична служба</p>
                    </div>
                    <div class="item-advant">
                        <div class="figure">
                            <div class="avto"></div>
                        </div>
                        <p>Парк вантажних автомобілів</p>
                    </div>
                    <div class="item-advant">
                        <div class="figure">
                            <div class="save"></div>
                        </div>
                        <p>Зберігання купленого товару</p>
                    </div>
                    <div class="item-advant">
                        <div class="figure">
                            <div class="deliv"></div>
                        </div>
                        <p>Доставка будматеріалів із заводу на об'єкт</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <h2 class="h2_catalog">Каталог</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="catalog">
        <a class="catalog_anchor" name="catalog"></a>
        <article>
            <a class="goods_anchor" name="klink_good"></a>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jaw"></div>
                        <a href="klink_good.php">
	                        <img class="good klink" src="/images/goods_klink.png" alt="Клінкерна цегла">
	                        <h3>Клінкерна цегла</h3>
	                    </a>
                        <button data-toggle="modal" data-target="#basicModal">Дізнатись ціну</button>
                        <!-- <a href="price/price_by_klink.rar" class="open_price">Скачати прайс</a> -->
                        <!-- start gallery block -->
                        <div class="open_gallary">
                            <a class="goods_gallery" rel="gallery" href="/images/goods_bruschatka.png" title="перший слайд">
                                <span>Галерея</span>
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_keramobloki.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_lichevoy.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_materialu.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ruberoid.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ryadovoy.png" title="">
                            </a>
                        </div>
                        <!-- end gallery block -->
                        <p class="chose_manufacture">Выберіть виробника:</p>
                        <div class="tabs">
                            <ul>
                                <li class="active"><a href="#main_about_klink_cherkov" class="cherkov" data-toggle="tab"></a></li>
                                <li>
                                    <a href="#main_about_klink_kerameya" class="kerameya" data-toggle="tab"></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="main_about_klink_cherkov">
                                    <p>Клинкерный кирпич ТМ Білоцерківські будматеріали производится с 2008 г и имеет пустотность 30%, марку прочности на сжатие 300 кгс/см2, водопоглощение 6% и морозостойкость более 150 циклов.<br/>
                                    Основная цветовая гамма -  красный Рубин, коричневый, желтый Янтарь,  кремовый  Сапфир, белый Кристалл, также популярная гамма Флеш, имеющий отте нок от красно-коричневого до зеленовато-серого.<br/>
                                    Размеры кирпича- стандартный 250х120х65 мм</p>
                                    <div class="collapse" id="other_about_klink_cherkov">
                                        <p>Разновидности: одинарный стандартный и фасонный, который применяется для возведения колонн, пилястр, обрамления окон и воплощения различных архитектурных решений.<br/>
                                        Применяется при высококачественной облицовке фасадов,  внутреннего декора, облицовки барбекю и каминов.<br/>
                                        Основная отличительная черта клинкерного кирпича ТМ Білоцерківські будматеріали – это характерная фирменная фаска по граням лицевой поверхности, которая делает кладку объемной, а шов особенно аккуратным и четким.<br/>
                                        Клинкерный кирпич ТМ Білоцерківські будматеріали обязателен в применении при облицовке заборов и подпорных стенок, так как высокая марочность, морозостойкость и низкое водопоглощение являются гарантией качества построек, которые максимально часто подвергаются воздействию перепадов температур зимой. Применение этого кирпича препятствуют появлению высолов.<br/>
                                        Весь кирпич упакован в пленку на поддонах.<br/>
                                        Количество на поддоне: 250х120х65- 416 шт;  фасонный -312шт;<br/>
                                        Вес 1 п – 0,9 т; 1,15 т.<br/>
                                        Вся продукция ТМ Білоцерківські будматеріали сертифицирована. </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="#other_about_klink_cherkov" data-toggle="collapse" class="open_about collapsed">Детальніше про продукт</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="main_about_klink_kerameya">
                                    <p>Клінкерна цегла ТМ Клинкерам ТОВ Керамейя виготовляється в Україні з 2008 р має порожнистість 0%, 36% і 48%, марку міцності на стиснення 300-350 кгс / см2, водопоглинання 5% і морозостійкість більше 150 циклів.<br />
                                        Основна кольорова гама - червоний Рубін, коричневий Онікс, жовтий Янтар, кремова Перлина, також популярна гамма Магма Топаз жовто-коричневий, Діабаз сіро-зелено-коричневий, Граніт червоно-коричневий. </p>
                                    <div class="collapse" id="other_about_klink_kerameya">
                                        <p>Розміри цегли-стандартний Пр1 250х120х65 мм; Ф 10 250х90х65 мм; Пр1 / 2 250х60х65 мм.<br />
                                            Різновиди-фасонний і одинарний.<br />
                                            Основана відмінна риса клінкерної цегли ТМ Клинкерам - виробництво декорованої цегли: з рельєфною поверхнею Рустика і рельєфною поверхнею декорування різнобарвною кам'яною крихтою Рустика Торкрет.<br />
                                            Застосовується при високоякісної облицюванні фасадів, внутрішнього декору, облицювання барбекю, камінів.<br />
                                            Клінкерна цегла ТМ Клинкерам обов'язкова в застосуванні при облицюванні заборів і підпірних стінок, так як висока міцність, морозостійкість і низьке водопоглинання є гарантією якості будівель, які максимально часто піддаються впливу перепадів температур взимку. Застосування клинка перешкоджають появі висолів.<br />
                                            Цегла з порожнистістю 48% має тоншу зовнішню стінку і виготовляється для облицювання висотних будівель.<br />
                                            Вся цегла упакована в плівку на піддонах. <br />
                                            Кількість: Пр1 250х120х65- 453 шт; Ф 10 250х90х65 - 604 шт; Пр1 / 2 250х60х65 - 906 шт; фасонні вироби-453шт.<br />
                                            Вага 1 п – 1,35-1,5 т.<br />
                                            Вся продукція ТМ Клинкерам сертифікована.</p>
                                    </div>
                                    <div class="text-center">
                                        <a href="#other_about_klink_kerameya" data-toggle="collapse" class="open_about collapsed">Детальніше про продукт</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <a class="goods_anchor" name="lichevoy_good"></a>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jaw"></div>
                        <a href="lichevoy_good.php">
	                        <img class="good lichevoy" src="/images/goods_lichevoy.png" alt="Лицьова цегла">
	                        <h3>Лицьова <br /> цегла</h3>
	                    </a>
                        <button data-toggle="modal" data-target="#basicModal">дізнатись ціну</button>
                        <!-- <a href="price/price_by_lichevoy.rar" class="open_price">Скачати прайс</a> -->
                        <!-- start gallery block -->
                        <div class="open_gallary">
                            <a class="goods_gallery" rel="gallery" href="/images/goods_bruschatka.png" title="перший слайд">
                                <span>Галерея</span>
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_keramobloki.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_lichevoy.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_materialu.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ruberoid.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ryadovoy.png" title="">
                            </a>
                        </div>
                        <!-- end gallery block -->
                        <p class="chose_manufacture">Виробник:</p>
                        <div class="tabs">
                            <ul>
                                <li class="active"><a href="#main_about_klink_cherkov" class="cherkov" data-toggle="tab"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="main_about_lichevoy_chercov">
                                    <p>
                                        Лицьову цеглу ТМ Білоцерківські будматеріали виготовляється з 2003 р і представляє собою цеглу з пустотностью 36%, що має марку міцності на стиснення 200-250 кгс / см2, водопоглинання 6-8% і морозостійкість більше 100-150 циклів. Такі технічні показники в 1,5-2 рази перевищують прийняті в Україні показники технічних характеристик лицьової керамічної цегли. <br />
                                        Основна кольорова гамма - класична червона, коричнева, жовта, персикова, кремова, кришталева (колір кварцового піску) і флеш (поєднання червоно-жовто-коричнево-зеленої гами).
                                    </p>
                                    <div class="collapse" id="other_about_lichevoy_chercov">
                                        <p>
                                            Розміри цегли-стандартний 250х120х65 мм; «Євро» 250х90х65 мм; «Брусок» 250х65х65 мм, потовщений 250х120х88 мм.<br />
                                            Різновиди-фасонний, одинарний, потовщений.<br />
                                            Застосовується при високоякісному облицюванні фасадів і для внутрішнього декору. Характерно, що застосування лицьової цегли міцністю не нижче 200 перешкоджає появі висолів.<br />
                                            Вся цегла упакована в плівку на піддонах.<br />
                                            Кількість на піддоні: 250х120х65- 416 шт; «Євро» 250х90х65 - 520 шт; «Брусок» 250х65х65 - 728 шт, фасонний -312шт; потовщений 250х120х88 мм - 288 шт.<br />
                                            Вага 1 п – 0,675 т; 1,05 т.<br />
                                            Вся продукція ТМ Білоцерківські будматеріали сертифікована.
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="#other_about_lichevoy_chercov" data-toggle="collapse" class="open_about collapsed">Детальніше про продукт</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <a class="goods_anchor" name="bruschatka_good"></a>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jaw"></div>
                        <a href="bruschatka_good.php">
	                        <img class="good bruschatka" src="/images/goods_bruschatka.png" alt="Клінкерна бруківка">
	                        <h3>Клінкерна бруківка</h3>
	                    </a>
                        <button data-toggle="modal" data-target="#basicModal">дізнатись ціну</button>
                        <!-- <a href="price/price_by_bruschatka.rar" class="open_price">Скачати прайс</a> -->
                        <!-- start gallery block -->
                        <div class="open_gallary">
                            <a class="goods_gallery" rel="gallery" href="/images/goods_bruschatka.png" title="перший слайд">
                                <span>Галерея</span>
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_keramobloki.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_lichevoy.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_materialu.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ruberoid.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ryadovoy.png" title="">
                            </a>
                        </div>
                        <!-- end gallery block -->
                        <p class="chose_manufacture">Виробник:</p>
                        <div class="tabs">
                            <ul>
                                <li class="active">
                                    <a href="#main_about_klink_kerameya" class="kerameya" data-toggle="tab"></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="main_about_bruschatka_kerameya">
                                    <p>
                                        Клінкерна бруківка ТМ БрукКЕРАМ ТОВ Керамейя-єдина клінкерна бруківка, яка виготовляється в Україні. Клінкерна бруківка ТМ БрукКЕРАМ виготовляється з 2011 р і має пустоність 0%, марку 450-550 кгс / см2, водопоглинання 2% і морозостійкість 250 циклів, а також низький коефіцієнт стирання 0,35 г / м3.<br />
                                        Основна кольорова гама-червоний Рубін, коричневий Онікс, жовтий Янтар, кремова Перлина і червоно-коричневий Флеш.<br />
                                        Розміри бруківки-200х100х45 мм і 200х100х52 мм.
                                    </p>
                                    <div class="collapse" id="other_about_bruschatka_kerameya">
                                        <p>
                                            Разновидности: стандартная брусчатка и фасонная для водостоков и бордюров.<br/>
                                        Клинкерная брусчатка ТМ Бруккерам применяется для мощения проезжих частей, площадей, террас, садових дорожек и тротуаров, также может применяться при кладке барбекю и каминов, что выглядит особенно интересно и не традиционно.<br/>
                                        Вся брусчатка упакована в пленку на поддонах. <br/>
                                        Количество на поддоне: 691шт;<br/>
                                        Вес 1 п – 1,4 т.<br/>
                                        Вся продукция ТМ Бруккерам сертифицирована.
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="#other_about_bruschatka_kerameya" data-toggle="collapse" class="open_about collapsed">Подробнее о продукте</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <a class="goods_anchor" name="ryadovoy_good"></a>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jaw"></div>
                        <a href="ryadovoy_good.php">
	                        <img class="good lichevoy" src="/images/goods_ryadovoy.png" alt="Цегла керамічна рядова м100, м125">
	                        <h3>Цегла керамічна рядова м100</h3>
	                    </a>
                        <button data-toggle="modal" data-target="#basicModal">дізнатись ціну</button>
                        <!-- <a href="price/price_by_ryadovoy.rar" class="open_price">Скачати прайс</a> -->
                        <!-- start gallery block -->
                        <div class="open_gallary">
                            <a class="goods_gallery" rel="gallery" href="/images/goods_bruschatka.png" title="перший слайд">
                                <span>Галерея</span>
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_keramobloki.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_lichevoy.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_materialu.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ruberoid.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ryadovoy.png" title="">
                            </a>
                        </div>
                        <!-- end gallery block -->
                        <p class="chose_manufacture">Производитель:</p>
                        <div class="tabs">
                            <ul id="tab-block">
                                <li class="active">
                                    <a href="#main_about_ryadovoy_dnepr" class="list" data-toggle="tab">Черкасская обл.</a>
                                </li>
                                <li>
                                    <a href="#main_about_ryadovoy_kirov" class="list" data-toggle="tab">Днепропетровская обл.</a>
                                </li>
                                <li>
                                    <a href="#main_about_ryadovoy_cherkas" class="list" data-toggle="tab">Кировоградская обл.</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="main_about_ryadovoy_dnepr">
                                    <p>Производитель: заводы Днепропетровской, Кировоградской и Черкасской обл..<br/>
                                    Кирпич  пустотностью 13% полусухого прессования М100, М75.<br/>
                                    Упаковка: в пленке на поддонах.<br/>
                                    Количество в поддоне: 480 шт, вес 1п-1,4 т.<br/>
                                    Кирпич пустотностью 0% пластического формования М100.</p>
                                    <div class="collapse" id="other_about_ryadovoy_dnepr">
                                        <p>Кирпич пустотелый М 125 <br>
                                            (Пластического формования)<br>
                                            Упаковка: на поддон (без пленки)<br>
                                            Количество в поддоне: 400 шт., вес 1п. - 1,4т.
                                        </p><br>
                                        <p>Кирпич полнотелый, пуст. 0%, М 125 <br>
                                            Упаковка: на поддон (без пленки)<br>
                                            Количество в поддоне: 400 шт., вес 1п. - 1,2т
                                        </p>
                                        <p>Кирпич пустотелый М 100 <br>
                                            Упаковка: на поддоне без пленки.<br/>
                                        Количество на поддоне: 333 шт, вес 1п – 1,05 т.<br/><br>
                                        Качество всего кирпича подтверждено сертификатами соответствия согласно ДСТУ Б В.2.7-61:2008.</p>
                                    </div>
                                    <div class="text-center">
                                        <a href="#other_about_ryadovoy_dnepr" data-toggle="collapse" class="open_about collapsed">Подробнее о продукте</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="main_about_ryadovoy_kirov">
                                    <p>Производитель: заводы Днепропетровской, Кировоградской и Черкасской обл..<br/>
                                    Кирпич  пустотностью 13% полусухого прессования М100, М75.<br/>
                                    Упаковка: в пленке на поддонах.<br/>
                                    Количество в поддоне: 480 шт, вес 1п-1,4 т.<br/>
                                    Кирпич пустотностью 0% пластического формования М100.</p>
                                    <div class="collapse" id="other_about_ryadovoy_kirov">
                                        <p>Кирпич пустотелый М 125 <br>
                                            (Пластического формования)<br>
                                            Упаковка: на поддон (без пленки)<br>
                                            Количество в поддоне: 400 шт., вес 1п. - 1,4т.
                                        </p><br>
                                        <p>Кирпич полнотелый, пуст. 0%, М 125 <br>
                                            Упаковка: на поддон (без пленки)<br>
                                            Количество в поддоне: 400 шт., вес 1п. - 1,2т
                                        </p>
                                        <p>Кирпич пустотелый М 100 <br>
                                            Упаковка: на поддоне без пленки.<br/>
                                            Количество на поддоне: 333 шт, вес 1п – 1,05 т.<br/><br>
                                            Качество всего кирпича подтверждено сертификатами соответствия согласно ДСТУ Б В.2.7-61:2008.</p>
                                    </div>
                                    <div class="text-center">
                                        <a href="#other_about_ryadovoy_kirov" data-toggle="collapse" class="open_about collapsed">Подробнее о продукте</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="main_about_ryadovoy_cherkas">
                                    <p>Производитель: заводы Днепропетровской, Кировоградской и Черкасской обл..<br/>
                                    Кирпич  пустотностью 13% полусухого прессования М100, М75.<br/>
                                    Упаковка: в пленке на поддонах.<br/>
                                    Количество в поддоне: 480 шт, вес 1п-1,4 т.<br/>
                                    Кирпич пустотностью 0% пластического формования М100.</p>
                                    <div class="collapse" id="other_about_ryadovoy_cherkas">
                                        <p>Кирпич пустотелый М 125 <br>
                                            (Пластического формования)<br>
                                            Упаковка: на поддон (без пленки)<br>
                                            Количество в поддоне: 400 шт., вес 1п. - 1,4т.
                                        </p><br>
                                        <p>Кирпич полнотелый, пуст. 0%, М 125 <br>
                                            Упаковка: на поддон (без пленки)<br>
                                            Количество в поддоне: 400 шт., вес 1п. - 1,2т
                                        </p>
                                        <p>Кирпич пустотелый М 100 <br>
                                            Упаковка: на поддоне без пленки.<br/>
                                            Количество на поддоне: 333 шт, вес 1п – 1,05 т.<br/><br>
                                            Качество всего кирпича подтверждено сертификатами соответствия согласно ДСТУ Б В.2.7-61:2008.</p>
                                    </div>
                                    <div class="text-center">
                                        <a href="#other_about_ryadovoy_cherkas" data-toggle="collapse" class="open_about collapsed">Детальніше про продукт</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <a class="goods_anchor" name="keramobloki_good"></a>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jaw"></div>
                        <a href="keramobloki_good.php">
	                        <img class="good keramobloki" src="/images/goods_keramobloki.png" alt="Керамоблоки">
	                        <h3>Поризовані керамічні блоки</h3>
	                    </a>
                        <button data-toggle="modal" data-target="#basicModal">дізнатись ціну</button>
                        <!-- <a href="price/price_by_keramobloki.rar" class="open_price">Скачати прайс</a> -->
                        <!-- start gallery block -->
                        <div class="open_gallary">
                            <a class="goods_gallery" rel="gallery" href="/images/goods_bruschatka.png" title="перший слайд">
                                <span>Галерея</span>
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_keramobloki.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_lichevoy.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_materialu.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ruberoid.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ryadovoy.png" title="">
                            </a>
                        </div>
                        <!-- end gallery block -->
                        <p class="chose_manufacture">Виробник:</p>
                        <div class="tabs">
                            <ul>
                                <li class="active">
                                    <a href="#main_about_keramobloki_kerameya" class="kerameya" data-toggle="tab"></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="main_about_keramobloki_kerameya">
                                    <p>Поризовані керамічні блоки ТМ Теплокерам ТОВ Керамейя М100 мають водопоглинання 10-15%, морозостійкість 35-50 циклів і є заміною рядової керамічної цегли. Володіють зниженою теплопровідністю за рахунок введення в глиняну суміш деревної стружки і випалюванні при дуже високій температурі, утворюючи мікропори, що підвищують теплозахисні властивості.</p>
                                    <div class="collapse" id="other_about_keramobloki_kerameya">
                                        <p>
                                            Різновиди:<br /><br />
                                            керамоблок 380,<br />
                                            керамоблок 2,12 НФ.<br /><br />

                                            Розміри:<br />
                                            керамоблок 380 – 380х250х238 мм (еквівалент 11,5 штук стандартної цеглини)<br />
                                            керамоблок 2,12 НФ – 250х120х138 (еквівалент 2,12 штук стандартної цеглини)<br /><br />

                                            Застосовується для зведення зовнішніх стін під облицювання, а також внутрішніх стін і перегородок. При застосуванні поризованих блоків немає необхідності утеплювати зовнішні стіни додатково, тому що блоки самі по собі вже являються утеплювачем, причому з високою паропроникністю.<br />
                                            Упаковка: на піддонах в плівці.<br /><br />

                                            Кількість на піддоні:<br />
                                            блок 380 – 60 шт, вага 1 п-1,3 т;<br />
                                            блок 2,12НФ – 280 щт, вага 1 п-1,13 т.<br /><br />

                                            Якість блоків ТМ Теплокерам підтверджено сертифікатами відповідності згідно ДСТУ Б В.2.7-61: 2008.
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="#other_about_keramobloki_kerameya" data-toggle="collapse" class="open_about collapsed">Детальніше про продукт</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <a class="goods_anchor" name="ruberoid_good"></a>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jaw"></div>
                        <a href="ruberoid_good.php">
	                        <img class="good ruberoid" src="/images/goods_ruberoid.png" alt="Руберойд">
	                        <h3>Покрівельні матеріали (руберойд)</h3>
	                    </a>
                        <button data-toggle="modal" data-target="#basicModal">дізнатись ціну</button>
                        <!-- <a href="price/price_by_ruberoid.rar" class="open_price">Скачати прайс</a> -->
                        <!-- start gallery block -->
                        <div class="open_gallary">
                            <a class="goods_gallery" rel="gallery" href="/images/goods_bruschatka.png" title="перший слайд">
                                <span>Галерея</span>
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_keramobloki.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_lichevoy.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_materialu.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ruberoid.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ryadovoy.png" title="">
                            </a>
                        </div>
                        <!-- end gallery block -->
                        <p class="chose_manufacture">Виробник:</p>
                        <div class="tabs">
                            <ul>
                                <li class="active">
                                    <a href="#main_about_ruberoid_tehno" class="tehno" data-toggle="tab"></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="main_about_ruberoid_tehno">
                                    <p>
                                        Покрівельні матеріали: 
                                        покрівельний рулонний направлений полімерно-бітумний 
                                        матеріал на негниючій поліефірній (поліестер) або стіклооснові 
                                        (скловолокна) ТМ СПОЛі виробництва ТОВ «Завод ТехноНІКОЛЬ» 
                                        м.Дніпродзержинськ і «Славутський руберойдовий завод» м.Славута 
                                        наступного асортименту.
                                    </p>
                                    <div class="collapse" id="other_about_ruberoid_tehno">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Найменування
                                                    </th>
                                                    <th>
                                                        Вид
                                                    </th>
                                                    <th>
                                                        Довжина рулону, м
                                                    </th>
                                                    <th>
                                                        Вага 1 м.кв.
                                                    </th>
                                                    <th>
                                                        Маса рулону, кг
                                                    </th>
                                                    <th>
                                                        Кіл. рулонів на поддоні
                                                    </th>
                                                    <th>
                                                        посипання
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="materials-type" colspan="8">Материалы класса  "ЭЛИТ" (теплостойкость +100оС, гибкость на брусе R=20 мм  -20оС)</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Элит
                                                    </td>
                                                    <td>
                                                        ХПП 
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        4,0
                                                    </td>
                                                    <td>
                                                        40,0
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Элит
                                                    </td>
                                                    <td>
                                                        ХКП
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        4,5
                                                    </td>
                                                    <td>
                                                        45,0
                                                    </td>
                                                    <td>
                                                        23
                                                    </td>
                                                    <td>сланец серый</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Элит
                                                    </td>
                                                    <td>
                                                        ЭПП 
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        4,0
                                                    </td>
                                                    <td>
                                                        40,0
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Элит
                                                    </td>
                                                    <td>
                                                        ЭКП
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        4,5
                                                    </td>
                                                    <td>
                                                        45,0
                                                    </td>
                                                    <td>
                                                        23
                                                    </td>
                                                    <td>сланец серый</td>
                                                </tr>

                                                <tr>
                                                    <td class="materials-type" colspan="8">Материалы класса "МОДЕРН СБС" (теплостойкость +95оС, гибкость на брусе R=20 мм  -15оС)</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Модерн СБС
                                                    </td>
                                                    <td>
                                                        ХПП
                                                    </td>
                                                    <td>
                                                        15
                                                    </td>
                                                    <td>
                                                        3,0
                                                    </td>
                                                    <td>
                                                        45,0
                                                    </td>
                                                    <td>
                                                        23
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Модерн СБС
                                                    </td>
                                                    <td>
                                                        ХКП
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        4,0
                                                    </td>
                                                    <td>
                                                        40,0
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td>сланец серый</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Модерн СБС
                                                    </td>
                                                    <td>
                                                        ЭПП 
                                                    </td>
                                                    <td>
                                                        15
                                                    </td>
                                                    <td>
                                                        3,0
                                                    </td>
                                                    <td>
                                                        45,0
                                                    </td>
                                                    <td>
                                                        23
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Модерн СБС
                                                    </td>
                                                    <td>
                                                        ЭКП
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        4,0
                                                    </td>
                                                    <td>
                                                        40,0
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td>сланец серый</td>
                                                </tr>

                                                <tr>
                                                    <td class="materials-type" colspan="8">Материалы класса  "ОПТИМА" (теплостойкость +90оС, гибкость на брусе R=20 мм  -5оС)</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Оптима
                                                    </td>
                                                    <td>
                                                        ХПП
                                                    </td>
                                                    <td>
                                                        15
                                                    </td>
                                                    <td>
                                                        3,0
                                                    </td>
                                                    <td>
                                                        45,0
                                                    </td>
                                                    <td>
                                                        23
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Оптима
                                                    </td>
                                                    <td>
                                                        ХКП
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        4,0
                                                    </td>
                                                    <td>
                                                        40,0
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td>сланец серый</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Оптима
                                                    </td>
                                                    <td>
                                                        ЭПП
                                                    </td>
                                                    <td>
                                                        15
                                                    </td>
                                                    <td>
                                                        3,0
                                                    </td>
                                                    <td>
                                                        45,0
                                                    </td>
                                                    <td>
                                                        23
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Оптима
                                                    </td>
                                                    <td>
                                                        ЭКП
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        4,0
                                                    </td>
                                                    <td>
                                                        40,0
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td>сланец серый</td>
                                                </tr>

                                                <tr>
                                                    <td class="materials-type" colspan="8">Материалы класса  "Стандарт" (теплостойкость +80оС, гибкость на брусе R=20 мм  0оС)</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Стандарт
                                                    </td>
                                                    <td>
                                                        ХПП
                                                    </td>
                                                    <td>
                                                        15
                                                    </td>
                                                    <td>
                                                        2,5
                                                    </td>
                                                    <td>
                                                        37,5
                                                    </td>
                                                    <td>
                                                        23
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Стандарт
                                                    </td>
                                                    <td>
                                                        ХКП
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        4,0
                                                    </td>
                                                    <td>
                                                        40,0
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td>сланец серый</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Стандарт
                                                    </td>
                                                    <td>
                                                        ЭПП
                                                    </td>
                                                    <td>
                                                        15
                                                    </td>
                                                    <td>
                                                        2,5
                                                    </td>
                                                    <td>
                                                        37,5
                                                    </td>
                                                    <td>
                                                        23
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        СПОЛИ Стандарт
                                                    </td>
                                                    <td>
                                                        ЭКП
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        4,0
                                                    </td>
                                                    <td>
                                                        40,0
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td>сланец серый</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center">
                                        <a href="#other_about_ruberoid_tehno" data-toggle="collapse" class="open_about collapsed">Детальніше про продукт</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <a class="goods_anchor" name="materialu_good"></a>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jaw"></div>
                        <a href="materialu_good.php">
	                        <img class="good materialu" src="/images/goods_materialu.png" alt="Гідроізоляційні матеріали">
	                        <h3 class="materialu">Гідроізоляційні матеріали</h3>
	                    </a>
                        <button data-toggle="modal" data-target="#basicModal">дізнатись ціну</button>
                        <!-- <a href="price/price_by_materialu.rar" class="open_price">Скачати прайс</a> -->
                        <!-- start gallery block -->
                        <div class="open_gallary">
                            <a class="goods_gallery" rel="gallery" href="/images/goods_bruschatka.png" title="перший слайд">
                                <span>Галерея</span>
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_keramobloki.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_lichevoy.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_materialu.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ruberoid.png" title="">
                            </a>
                            <a class="goods_gallery" rel="gallery" href="/images/goods_ryadovoy.png" title="">
                            </a>
                        </div>
                        <!-- end gallery block -->
                        <p class="chose_manufacture">Виробник:</p>
                        <div class="tabs">
                            <ul>
                                <li class="active">
                                    <a href="#main_about_materialu_tehno" class="tehno" data-toggle="tab"></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="main_about_materialu_tehno">
                                    <p>Техническте характеристики и область применения гидроизоляционных материалов ТехноНИКОЛЬ</p>
                                    <div class="collapse" id="other_about_materialu_tehno">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Марка матеріалу
                                                    </th>
                                                    <th>
                                                        Од. виміру
                                                    </th>
                                                    <th>
                                                        Упаковка
                                                    </th>
                                                    <th>
                                                        Область застосування
                                                    </th>
                                                    <th>
                                                        Технічні характеристики
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="materials-type" colspan="5">Праймер техноніколь</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">
                                                        № 01
                                                        Праймер
                                                        бітумний
                                                    </td>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        20л (16кг)
                                                    </td>
                                                    <td rowspan="2">
                                                        Подготовка (огрунтовка) оснований перед устройством мастичной
                                                        гидроизоляции, а также перед укладкой наплавляемых,
                                                        самоклеящихся кровельных и гидроизоляционных материалов.
                                                    </td>
                                                    <td rowspan="2">
                                                        Массовая доля летучих веществ 45-55%,
                                                        Время высыхания при 20°С – 12 часов.,
                                                        РАСХОД 0,25-0,35 л/м²
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        10л (8кг)
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        № 02
                                                        Праймер битумный
                                                        (концентрат)
                                                    </td>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        20л (18кг)
                                                    </td>
                                                    <td>
                                                        Область применения аналогична битумному  праймеру.
                                                        Перед применением,  концентрат необходимо развести в пропорции 1:1  сольвентом, керосином.
                                                    </td>
                                                    <td>
                                                        Массовая доля летучих веществ 35-40%, Время высыхания при 20°С – 12 часов,
                                                        РАСХОД 0,25-0,35 л/м²
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        №003
                                                        Праймер
                                                        битумно-полимерный
                                                    </td>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        20л (16кг)
                                                    </td>
                                                    <td>
                                                        Обработка стальной ортотропной плиты мостовых сооружений,
                                                        а также железобетонных плит проезжей части мостовых сооружений перед укладкой гидроизоляционного слоя.
                                                    </td>
                                                    <td>
                                                        Массовая доля летучих веществ 70-75%, Время высыхания при 20°С - 10 минут,
                                                        РАСХОД 0,2-0,3 л/м²
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        №04
                                                        Праймер
                                                        битумный
                                                        эмульсионный
                                                    </td>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        20л (18кг)
                                                    </td>
                                                    <td>
                                                        Подготовка (огрунтовка) оснований перед устройством мастичной гидроизоляции, а также перед укладкой наплавляемых,
                                                        самоклеящихся кровельных и гидроизоляционных материалов. Подходит для работы внутри жилых помещений.
                                                    </td>
                                                    <td>
                                                        Массовая доля летучих веществ 60-75%, Время высыхания при 20°С – 1 час
                                                        РАСХОД 0,25-0,35 л/м²
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="materials-type" colspan="5">Мастики технониколь</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">
                                                        № 21
                                                        Мастика кровельная
                                                        (Техномаст)
                                                    </td>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        20 кг
                                                        (метал. ведро)
                                                    </td>
                                                    <td rowspan="3">
                                                        1. Устройство мастичных и ремонт всех видов кровель.
                                                        2. Гидроизоляционная защита строительных конструкций (фундаментов, подвалов, свай и др.)
                                                        3. Антикоррозионная защита металлических поверхностей.
                                                    </td>
                                                    <td rowspan="3">
                                                        Прочность сцепления с бетоном 0,6 МПа, с металлом 0,9 МПа;  Гибкость на брусе R=5 мм, не выше -35°C; теплостойкость +110 °C
                                                        РАСХОД для устройства мастичной кровли : 3,8–5,7 кг/м²;  для устройства гидроизоляции : 2,5–3,5 кг/м².
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        10 кг
                                                        (метал. ведро)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        3 кг
                                                        (метал. ведро)
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        № 22
                                                        Мастика  приклеивающая
                                                        (Вишера)
                                                    </td>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        20 кг
                                                        (метал. ведро)
                                                    </td>
                                                    <td>
                                                        Приклеивание рулонных битумных и битумно-полимерных материалов к бетонным и металлическим поверхностям.
                                                    </td>
                                                    <td>
                                                        Прочность сцепления с бетоном  0,6 МПа, с металлом 0,45 МПа; Теплостойкость +950C
                                                        РАСХОД 0,8-1,8 кг/м2
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td rowspan="3">
                                                        № 24
                                                        Мастика
                                                        гидроизоляционная
                                                        (МГТН)
                                                    </td>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        20 кг
                                                        (метал. ведро)
                                                    </td>
                                                    <td rowspan="3">
                                                        Гидроизоляционная защита строительных конструкций
                                                        (фундаментов, подвалов и других объектов, заглубляемых в землю или контактирующих с влажной средой).
                                                    </td>
                                                    <td rowspan="3">
                                                        Прочность сцепления с бетоном  0,1 МПа, с металлом 0,1 МПа;  Гибкость на брусе R=5 мм, не выше -5  °C, теплостойкость +80°C.
                                                        РАСХОД для устройства гидроизоляции : 2,5–3,5 кг/м².
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        10 кг
                                                        (метал. ведро)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        3 кг
                                                        (метал. ведро)
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td rowspan="3">
                                                        № 23
                                                        Мастика для гибкой черепицы (Фиксер)
                                                    </td>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        20 кг
                                                        (метал. ведро)
                                                    </td>
                                                    <td rowspan="3">
                                                        Проклеивание швов гибкой черепицы ШИНГЛАС и др.
                                                        Приклеивание материалов на битумной основе к кирпичным, бетонным, металлическим, деревянным, керамическим поверхностям.
                                                    </td>
                                                    <td rowspan="3">
                                                        Прочность сцепления с бетоном  0,5 МПа,  с металлом 0,8 МПа; Теплостойкость +110°C
                                                        РАСХОД зависит от типа выполняемых работ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        10 кг
                                                        (метал. ведро)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        3 кг
                                                        (метал. ведро)
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td rowspan="2">
                                                        № 27
                                                        Мастика
                                                        приклеивающая
                                                    </td>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        22 кг
                                                        (метал. ведро)
                                                    </td>
                                                    <td rowspan="2">
                                                        Приклеивание плит пенополистирола и XPS к битумным,
                                                        бетонным, металлическим и деревянным поверхностям в системах изоляции фундаментов.
                                                    </td>
                                                    <td rowspan="2">
                                                        Прочность сцепления с бетоном  0,1 МПа, с металлом 0,1 МПа;
                                                        Массовая доля нелетучих веществ 80-90%, теплостойкость +90C
                                                        РАСХОД для устройства гидроизоляции : 0,5–1,0 кг/м2.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        10 кг
                                                        (метал. ведро)
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        № 57
                                                        Мастика защитная алюминиевая
                                                    </td>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        20 кг
                                                        (метал. ведро)
                                                    </td>
                                                    <td>
                                                        Устройство и восстановление защитного слоя на битумных,
                                                        битумно-полимерных, мастичных и рулонных кровлях,
                                                        защита металлических поверхностей от коррозии.
                                                    </td>
                                                    <td>
                                                        Прочность сцепления с бетоном  0,3  МПа, с металлом 0,3 МПа;
                                                        Массовая доля нелетучих веществ 50%, теплостойкость +100°C
                                                        РАСХОД: 0,4–0,6 кг/м²
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Клей для Рубероида
                                                    </td>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        10 кг
                                                        (метал. ведро)
                                                    </td>
                                                    <td>
                                                        Клей предназначен специально для приклеивания  рубероида марок РКП, РПП, РКК,
                                                        а также рулонных материалов с защитным покрытием приклеиваемого слоя из песка) к бетонным,
                                                        цементно-песчаным и другим поверхностям.
                                                        Так же клей применяется для склеивания нахлестов данных рулонных материалов.
                                                    </td>
                                                    <td>
                                                        Прочность сцепления с бетоном  0,4  МПа
                                                        Прочность на сдвиг клеевого соединения, не менее 0,7 кН/м.,
                                                        РАСХОД 1,5-2 кг/м²
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td rowspan="3">
                                                        № 31
                                                        Мастика кровельная эмульсионная
                                                    </td>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        18 кг
                                                        (метал. ведро)
                                                    </td>
                                                    <td rowspan="3">
                                                        1. Устройство гидроизоляции внутренних помещений (ванные комнаты, туалеты, кухни, балконы).
                                                        2. Устройство мастичных и ремонт всех видов кровель.
                                                        3. Гидроизоляционная защита строительных конструкций (фундаментов, подвалов и др.)
                                                    </td>
                                                    <td rowspan="3">
                                                        Прочность сцепления с бетоном  0,45 МПа,
                                                        Гибкость на брусе R=5 мм, не выше -15  °C, теплостойкость +95°C
                                                        РАСХОД для устройства мастичной кровли : 3,8–5,7 кг/м²;  для устройства гидроизоляции : 2,5–3,5 кг/м².
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        9 кг
                                                        (метал. ведро)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        2,7кг
                                                        (метал. ведро)
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="materials-type" colspan="5">Герметик технониколь</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="4">
                                                        № 45
                                                        Герметик
                                                        бутил каучуковый
                                                    </td>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        16 кг
                                                        (метал. ведро), белый
                                                    </td>
                                                    <td rowspan="4">
                                                        Предназначен для герметизации наружных поверхностей,
                                                        швов и стыков строительных конструкций жилых, общественных,
                                                        производственных зданий и сооружений.
                                                    </td>
                                                    <td rowspan="4">
                                                        Прочность сцепления с бетоном  0,2  МПа,  Массовая доля нелетучих веществ 40-50%
                                                        РАСХОД зависит от ширины и глубины шва
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        8 кг
                                                        (метал. ведро), белый
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        16 кг
                                                        (метал. ведро), серый
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        кг
                                                    </td>
                                                    <td>
                                                        8 кг
                                                        (метал. ведро), серый
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td class="materials-type" colspan="6">AquaMast</td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Марка материала
                                                    </th>
                                                    <th>
                                                        Ед. изм.
                                                    </th>
                                                    <th>
                                                        Упаковка
                                                    </th>
                                                    <th>
                                                        Область применения
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td rowspan="3">
                                                        AquaMast
                                                        праймер
                                                    </td>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        16 кг
                                                    </td>
                                                    <td rowspan="3">
                                                        Предназначен для подготовки основания перед укладкой гидроизоляции.
                                                        Прекрасно сочетается с мастиками на основе битума  и рулонными
                                                        битумными наплавляемыми материалами.
                                                        Средний расход 0,3 кг/м².
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        8 кг
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        2,4 кг
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td rowspan="3">
                                                        AquaMast
                                                        для кровли    
                                                    </td>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        18 кг
                                                    </td>
                                                    <td rowspan="3">
                                                        Предназначена устройства и ремонта кровель. 
                                                        После высыхания образует прочное гидроизоляционное покрытие, 
                                                        с широким диапазоном температур эксплуатации.
                                                        Средний расход 3,3-4,3 кг/м²
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        10 кг
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        3 кг
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td rowspan="4">
                                                        AquaMast
                                                        ремонт и приклейка
                                                    </td>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        18 кг
                                                    </td>
                                                    <td rowspan="4">
                                                        Надежно приклеивает, а также устраняет мелкие 
                                                        дефекты на кровле, без проведения капитального ремонта. 
                                                        Используется для приклеивания битумной 
                                                        черепицы и рулонных материалов.
                                                        Средний расход 0,8-1,8 кг/м²
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        10 кг
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        3 кг
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        0,3 кг
                                                        картридж
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td rowspan="2">
                                                        AquaMast
                                                        антикоррозионная
                                                    </td>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        8 кг
                                                    </td>
                                                    <td rowspan="4">
                                                        Защищает от коррозии и продлевает срок 
                                                        службы металлических поверхностей, в том 
                                                        числе заглубляемых в землю труб и баков.
                                                        Средний расход: 0,4 кг/м²
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        шт
                                                    </td>
                                                    <td>
                                                        2,4 кг
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center">
                                        <a href="#other_about_materialu_tehno" data-toggle="collapse" class="open_about collapsed">Детальніше про продукт</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="consultation">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Консультація</h2>
                    <p>Наші фахівці допоможуть вам <br/>вибрати потрібний продукт</p>
                    <button data-toggle="modal" data-target="#basicModal">Замовити дзвінок</button>
                </div>
                <div class="hidden-xs hidden-sm col-md-4">
                    <img src="/images/girl.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <a class="about_anchor" name="about"></a>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <h2>О нас</h2>
                    <p>Підприємство ТОВ «ТК НОВЕКС» засноване в 1993 році і вже 23 рік успішно працює на ринку будівельних матеріалів України. Наше підприємство є одним з найбільших постачальників покрівельних і стінових будматеріалів для підприємств гірничо-металургійних комплексів центрального і східного регіонів: ТОВ «Метінвест Холдинг» (ПАТ «ІнГЗК», ПАТ «Північний ГЗК», ПАТ «ЦГЗК», ПАТ «КЗГО», ПАТ « КЗРК »), ПАТ« АрселорМіттал Кривий Ріг », ПАТ« Євраз Суха Балка », Група" Інтерпайп "і ін.</p>
                    <br>
                    <div class="hidden-xs">
                        <p>ТОВ «ТК НОВЕКС» активно співпрацює з будівельними та проектними підприємствами в сфері котеджного і багатоповерхового будівництва і бере участь в будівельних виставках, що проводяться в Дніпропетровській області та Києві.</p>
                    </div>
                    <div class="hidden-sm hidden-md hidden-lg">
                        <div class="collapse" id="more_about">
                            <p>ТОВ «ТК НОВЕКС» активно співпрацює з будівельними та проектними підприємствами в сфері котеджного і багатоповерхового будівництва і бере участь в будівельних виставках, що проводяться в Дніпропетровській області та Києві.</p>
                        </div>
                        <div class="text-center">
                            <a href="#more_about" data-toggle="collapse" class="open_about collapsed">читати далі</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <a class="gallery_anchor" name="gallery"></a>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Галерея</h2>
                </div>
                <div class="col-sm-12">
                        <ul class="bxslider">
                            <li>
                                <div class="clider">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/Barbeque.jpg" title="Барбекю, брусчатка (магма)">
                                                <img src="/images/gallery/prev/Barbeque.jpg" alt="Барбекю, брусчатка (магма)">
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/Bruschatka2.jpg" title="Брусчатка(магма)">
                                                <img src="/images/gallery/prev/Bruschatka2.jpg" alt="Брусчатка(магма)">
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/Bruschatka3.jpg" title="Брусчатка(магма)">
                                                <img src="/images/gallery/prev/Bruschatka3.jpg" alt="Брусчатка(магма)">
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/Bruschatka4.jpg" title="Брусчатка-(магма)">
                                                <img src="/images/gallery/prev/Bruschatka4.jpg" alt="Брусчатка-(магма)">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/Bruschatka.jpg" title="Брусчатка-(магма)">
                                                <img src="/images/gallery/prev/Bruschatka.jpg" alt="Брусчатка-(магма)">
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/BruschatkaYantar2.jpg" title="Брусчатка-(магма,-янтарь)">
                                                <img src="/images/gallery/prev/BruschatkaYantar2.jpg" alt="Брусчатка-(магма,-янтарь)">
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/BruschatkaYantar.jpg" title="Брусчатка-(магма,-янтарь)">
                                                <img src="/images/gallery/prev/BruschatkaYantar.jpg" alt="Брусчатка-(магма,-янтарь)">
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/BruschatkaMix.jpg" title="Брусчатка-(рубин,-магма,-янтарь,-микс)">
                                                <img src="/images/gallery/prev/BruschatkaMix.jpg" alt="Брусчатка-(рубин,-магма,-янтарь,-микс)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="clider">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/KladkaZheltuy.jpg" title="Кладка,-кирпич-(желтый)">
                                                <img src="/images/gallery/prev/KladkaZheltuy.jpg" alt="Кладка,-кирпич-(желтый)">
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/KladkaTopaz.jpg" title="Кладка,-кирпич-(топаз)">
                                                <img src="/images/gallery/prev/KladkaTopaz.jpg" alt="Кладка,-кирпич-(топаз)">
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/BruschatkaYantar.jpg" title="Кладка,-кирпич-(янтарь)">
                                                <img src="/images/gallery/prev/BruschatkaYantar.jpg" alt="Кладка,-кирпич-(янтарь)">
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/KladkaFlesh.jpg" title="Кладка,-кирпич-(флеш-(БЦ))">
                                                <img src="/images/gallery/prev/KladkaFlesh.jpg" alt="Кладка,-кирпич-(флеш-(БЦ))">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/DomZeltuy.jpg" title="Дом,-кирпич-(желтый-(БЦ))">
                                                <img src="/images/gallery/prev/DomZeltuy.jpg" alt="Дом,-кирпич-(желтый-(БЦ))">
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/DomTopaz.jpg" title="Дом,-кирпич-(топаз)">
                                                <img src="/images/gallery/prev/DomTopaz.jpg" alt="Дом,-кирпич-(топаз)">
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/DomYantar.jpg" title="Дом,-кирпич-(янтарь)">
                                                <img src="/images/gallery/prev/DomYantar.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="clider-picture" rel="gallery" href="/images/gallery/DomYantarRubin.jpg" title="Дом,-кирпич-(янтарь)-Брусчатка-(рубин)">
                                                <img src="/images/gallery/prev/DomYantarRubin.jpg" alt="Дом,-кирпич-(янтарь)-Брусчатка-(рубин)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomKorichnevuy.jpg" title="Дом,-кирпич-(янтарь,-коричневый)-Забор,-кирпич-(флеш-(БЦ))">
                                            <img src="/images/gallery/prev/DomKorichnevuy.jpg" alt="Дом,-кирпич-(янтарь,-коричневый)-Забор,-кирпич-(флеш-(БЦ))">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomTopazZem2.jpg" title="Дом,-кирпич-(жемчуг,-топаз)-2">
                                            <img src="/images/gallery/prev/DomTopazZem2.jpg" alt="Дом,-кирпич-(жемчуг,-топаз)-2">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomTopazZem.jpg" title="Дом,-кирпич-(жемчуг,-топаз)">
                                            <img src="/images/gallery/prev/DomTopazZem.jpg" alt="Дом,-кирпич-(жемчуг,-топаз)">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomTopazZem3.jpg" title="Дом,-кирпич-(жемчуг,-топаз)-3">
                                            <img src="/images/gallery/prev/DomTopazZem3.jpg" alt="Дом,-кирпич-(жемчуг,-топаз)-3">
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomDumar.jpg" title="Дом,-кирпич-(магма)-Дымарь,-кирпич-(янтарь)">
                                            <img src="/images/gallery/prev/DomDumar.jpg" alt="Дом,-кирпич-(магма)-Дымарь,-кирпич-(янтарь)">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomZabor.jpg" title="Дом,-кирпич-(персик)-Забор-(флеш-(БЦ))">
                                            <img src="/images/gallery/prev/DomZabor.jpg" alt="Дом,-кирпич-(персик)-Забор-(флеш-(БЦ))">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomTopaz2.jpg" title="Дом,-кирпич-(топаз)-2">
                                            <img src="/images/gallery/prev/DomTopaz2.jpg" alt="Дом,-кирпич-(топаз)-2">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomFlash.jpg" title="Дом,-кирпич-(флеш-(БЦ))">
                                            <img src="/images/gallery/prev/DomFlash.jpg" alt="Дом,-кирпич-(флеш-(БЦ))">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomYantar2.jpg" title="Дом,-кирпич-(янтарь)-2">
                                            <img src="/images/gallery/prev/DomYantar2.jpg" alt="Дом,-кирпич-(янтарь)-2">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomYantar3.jpg" title="Дом,-кирпич-(янтарь)-3">
                                            <img src="/images/gallery/prev/DomYantar3.jpg" alt="Дом,-кирпич-(янтарь)-3">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomYantar4.jpg" title="Дом,-кирпич-(янтарь)-4">
                                            <img src="/images/gallery/prev/DomYantar4.jpg" alt="Дом,-кирпич-(янтарь)-4">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomYantar5.jpg" title="Дом,-кирпич-(янтарь)-5">
                                            <img src="/images/gallery/prev/DomYantar5.jpg" alt="Дом,-кирпич-(янтарь)-5">
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/DomYantar.jpg" title="Дом,-кирпич-(янтарь)-6">
                                            <img src="/images/gallery/prev/DomYantar6.jpg" alt="Дом,-кирпич-(янтарь)-6">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="clider-picture" rel="gallery" href="/images/gallery/Cherkov.jpg" title="Церковь,-кирпич-(рубин)">
                                            <img src="/images/gallery/prev/Cherkov.jpg" alt="Церковь,-кирпич-(рубин)">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">

                                    </div>
                                    <div class="col-sm-3">

                                    </div>
                                </div>
                                </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="diploms">
        <a name="diploms"></a>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Сертифікати</h2>
                </div>
                <div class=" col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4">
                    <a class="serteficates" rel="gallery" href="/images/certeficatesBelCher.jpg" title="">
                        <img src="/images/certeficates1.jpg" alt="certeficates1">
                    </a>
                </div>
                <div class=" col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4">
                    <a class="serteficates" rel="gallery" href="/images/certeficatesCeramiya.jpg" title="">
                        <img src="/images/certeficates2.jpg" class="top" alt="certeficates2">
                    </a>
                </div>
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4">
                    <a class="serteficates" rel="gallery" href="/images/certeficatesTech.jpg" title="">
                        <img src="/images/certeficates3.jpg" alt="certeficates3">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts">
        <a class="contacts_anchor" name="contacts"></a>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Контакти</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap">
                        <div class="item-1">
                            <p>ООО "ТК Новатекс"</p>
                            <p>
                                <i class="fa fa-envelope"></i>
                                info@nowex.com.ua
                            </p>
                        </div>
                        <div class="item-2">
                            <p>
                                <i class="fa fa-phone"></i>
                                (0564) 74 03 52;
                            </p>
                            <p>
                                <i class="fa fa-phone"></i>
                                050 321 67 77;
                            </p>
                        </div>
                        <div class="item-3">
                            <p>
                                <i class="fa fa-phone"></i>
                                097 207 65 65
                            </p>
                            <p>
                                <i class="fa fa-phone"></i>
                                067 511 05 11
                            </p>
                        </div>
                        <div class="item-4">
                            <p>
                                Графік роботи (офіс і склад)<br />
                                Пн-Пт: 8:30-17:30
                            </p>
                        </div>
                    </div>
                </div>
                <div class="adress">
                    <div class="col-xs-12 col-sm-6">
                        <p class="first">
                            <i class="fa fa-map-marker"></i>
                            <font>Офіс</font>
                            вул. О.Брозовського, 5б
                            <span>, Кривий Ріг</span>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <p class="second">
                            <i class="fa fa-map-marker"></i>
                            <font>Склад</font>
                            вул. Книжна, 1д
                            <span>, Кривий Ріг</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="maps">
        <div class="left-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.2813371148836!2d33.400352715115275!3d47.911593574853086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40db2095c4b9b24d%3A0x984c2bd112c3d470!2z0LLRg9C7LiDQntGC0YLQviDQkdGA0L7Qt9C-0LLRgdGM0LrQvtCz0L4sIDU2LCDQmtGA0LjQstC40Lkg0KDRltCzLCDQlNC90ZbQv9GA0L7Qv9C10YLRgNC-0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1466608918466" width="100%" height="335" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="right-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.728630259139!2d33.370124115114926!3d47.90293747545376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40db20ac3d4962ed%3A0x978d0b3eb13c3d81!2z0LLRg9C7LiDQmtC90LjQttC90LAsIDEsINCa0YDQuNCy0LjQuSDQoNGW0LMsINCU0L3RltC_0YDQvtC_0LXRgtGA0L7QstGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1466609090585" width="100%" height="335" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="hidden-xs col-sm-5">
                    <a href="/ua/">
                        <img src="/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-7">
                    <button data-toggle="modal" data-target="#basicModal">Замовити дзвінок</button>
                    <p class="hidden-xs hidden-sm ">Якщо ж у вас залишилися питання, зв'яжіться з нами.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- модальное окно "заказать звонок" -->
    <section class="modal_window">
        <div class="modal fade" id="basicModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close" data-dismiss="modal"></div>
                    <p id="question_title">Замовити дзвінок</p>
                    <form action="index.php" method="POST">
                        <div>
                            <input type="text" name="name" placeholder="Ім'я" required maxlength="23">
                        </div>
                        <div>
                            <input type="text" name="phone" placeholder="Телефон" required maxlength="20">
                        </div>
                        <div>
                            <input id="topic" type="hidden" name="topic">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="button">відправити</button>
                        </div>
                    </form>
                    <div class="jaw"></div>
                </div>
            </div>
        </div>
        <?php
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$topic=$_POST['topic'];
		$to_address="novextk@gmail.com";
		$subject="Отзыв с сайта Novex";
		$mail_content="От: ".$name."\n\n"."Телефон: ".$phone."\n\n"."Хочет: ".$topic;
		if(isset($_POST['button'])){
			if($_POST['name']!="") {
				mail($to_address, $subject, $mail_content);
				/*exit(header('Location:'.$_SERVER['REQUEST_URI'].''));*/
			}
		}
        ?>
    </section>



    <script type="text/javascript" src="/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="/js/parallax.min.js"></script>
    <script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>


    <script>
    //questions/coll back
		$(".phones button, .call-me button, .consultation button, footer button").click(function(){
			$("#topic").val("Замовити дзвінок");
			$("#question_title").text("Замовити дзвінок");
		});
		$(".navigation .consult a").click(function(){
			$("#topic").val("Консультацiя");
			$("#question_title").text("Консультацiя");
		});
		$("section.goods button").click(function(){
			var val = $(this).parent().find("p").html();
			$("#question_title").text("Дiзнатись цiну");
			$("#topic").val("Дiзнатись цiну"+ val);
		});
		$("section.catalog button").click(function(){
			var val = $(this).parent().find("h3").html();
			$("#question_title").text("Дiзнатись цiну ");
			$("#topic").val("Дiзнатись цiну "+ val);
		});
	</script>


</body>
</html>