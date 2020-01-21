<?php
session_start();
if(isset($_GET['sub_id'])){
    $kod = trim($_GET['sub_id']);
    $kod = strip_tags($kod);
    $kod = htmlspecialchars($kod);
    $_SESSION['kod'] = $kod;
}
?>
<?php
    //++UTM++
    session_start();

    foreach($_GET as $k => $v){
        if(strpos($k, 'utm_') === 0) $_SESSION[$k] = validateWord($v);
    }

    function validateWord($word){
        $word = trim($word);
        $word = strip_tags($word);
        $word = htmlspecialchars($word);
        return $word;
    }
    //++UTM++
?>

<!DOCTYPE html>
<html>
<head>
<title>ШЛАНГИ XHOSE (ИКС ХОЗ), садовый шланг для полива с доставкой по Украине</title>
<meta charset="utf-8">
<link rel = "shortcut icon" href = "favicon.ico">
<link rel = "stylesheet" href = "style.css" media = "all">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,cyrillic,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&subset=latin,cyrillic-ext,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
<link rel = "stylesheet" href = "form.css" media = "all">

<meta name="google-site-verification" content="1GNqlH_5KfSTseOJRU63N_pmfP2qlPNnk43ZfC2a_vI" />

</head>
<body>
<section id = "menu">
<div class = "menu_m">
<div class = "container">
<ul id = "menu_main">
<li class = "first">
<a href = "#onboard" class = "scrollto">В НАЛИЧИИ</a>
</li>
<li>
<a href = "#descript" class = "scrollto">Описание продукта</a>
</li>
<li>
<a href = "#how_work" class = "scrollto">как работет</a>
</li>
<li><a href = "#preim" class = "scrollto">ПРЕИМУЩЕСТВА</a></li>
<li><a href = "#feedbacks" class = "scrollto">отзывы</a>
</li>
<li><a href = "#pay_delivery" class = "scrollto">ОПЛАТА И ДОСТАВКА</a>
</li>
<li><a href = "#contacts" class = "scrollto">КОНТАКТЫ</a>
</li>
</ul>
</div>
</div>
</section>

<section id = "under_menu">
<div class = "container">

<img src = "images/first-img.png" class = "first-img"/>
<div class = "ph">
<ul class = "phones">
<li class = "first">
<span>(067)</span> 620-07-57
</li>
<li>
<span>(093)</span> 737-82-12
</li>
<li>
<span>(050)</span> 338-61-41
</li>
</ul>
</div>
<div class = "top_text">
Уникальный садовый шланг<br />
для полива <span style = "color: red;">XHOSE (ИКС ХОЗ)</span><br />
увеличивается в 3 раза!
<a href="#" class="buy_btn_clb" data-reveal-id="callback"></a>
</div>
<div style = "clear:both;"></div>
<div class="wk">
<div class = "work-rez">
режим работы:
</div>
<div class = "from-to">
<p>Пн-Пт с <span>10:00</span> до <span>20:00</span></p>
<p>Сб–Вс с <span>10:00</span> до <span>19:30</span></p>
</div>
</div>
<img src = "images/over_buy.png" class = "over_b_b">
<div class="on_ttl">Растягивающийся садовый шланг Стрейч Хоз (XHOSE) от производителя <br><span class="on_ttl_mini">К каждому шлангу насадка-распылитель (Цена в магазинах 100 грн) в подарок!</span>
	<span class="text-mini"></span>
</div>
<!-- <a href = "#" class = "buy_btn" data-reveal-id="callback"></a> -->

</div>
</section>

<section id = "onboard">
	<div class = "container">
<div class = "on_ttl_orange">Зимняя распродажа началась! Покупайте до 15 мая со скидкой 50%! Количество ограничено!</div>
		<div id = "on_f" class = "on_blocks">
		<div class = "length">7,5 метров</div>
		<img src = "images/on_img.png">
		<div class="on_price_old">158 грн</div>
		<div class = "on_price">79</div>
		<div class = "uah">грн</div>
		<a href = "#" class = "on_buy_btn" data-reveal-id="callback">Купить сейчас</a>
		</div>
		<div id = "on_s" class = "on_blocks">
		<div class = "length">15 метров</div>
		<img src = "images/on_img.png">
		<div class="on_price_old">278 грн</div>
		<div class = "on_price">139</div>
		<div class = "uah">грн</div>
		<a href = "#" class = "on_buy_btn" data-reveal-id="callback">Купить сейчас</a>
		</div>
		<div id = "on_t" class = "on_blocks">
		<div class = "length">22,5 метров</div>
		<div class="on_price_old">338 грн</div>
		<img src = "images/on_img.png">
		<div class = "on_price">169</div>
		<div class = "uah">грн</div>
		<a href = "#" class = "on_buy_btn" data-reveal-id="callback">Купить сейчас</a>
	</div>


</div>
</section>
<section id = "sizes_second">
	<div class = "container">
<div id = "on_x" class = "on_blocks">
<div class = "length">30 метров</div>
<img src = "images/on_img.png">
<div class="on_price_old">398 грн</div>
<div class = "on_price">199</div>
<div class = "uah">грн</div>
<a href = "#" class = "on_buy_btn" data-reveal-id="callback">Купить сейчас</a>
</div>

<div id = "on_z" class = "on_blocks">
<div class = "length">37,5 метров</div>
<img src = "images/on_img.png">
<div class="on_price_old">466 грн</div>
<div class = "on_price">233</div>
<div class = "uah">грн</div>
<a href = "#" class = "on_buy_btn" data-reveal-id="callback">Купить сейчас</a>
</div>

<div id = "on_w" class = "on_blocks">
<div class = "length">45 метров</div>
<img src = "images/on_img.png">
<div class="on_price_old">518 грн</div>
<div class = "on_price">259</div>
<div class = "uah">грн</div>
<a href = "#" class = "on_buy_btn" data-reveal-id="callback">Купить сейчас</a>
</div>
	</div>
</section>

<section id = "sizes_second">
	<div class = "container">
<div id = "on_x" class = "on_blocks">
<div class = "length">52,5 метров</div>
<img src = "images/on_img.png">
<div class="on_price_old">578 грн</div>
<div class = "on_price">289</div>
<div class = "uah">грн</div>
<a href = "#" class = "on_buy_btn" data-reveal-id="callback">Купить сейчас</a>
</div>

<div id = "on_z" class = "on_blocks">
<div class = "length">60 метров</div>
<img src = "images/on_img.png">
<div class="on_price_old">618 грн</div>
<div class = "on_price">309</div>
<div class = "uah">грн</div>
<a href = "#" class = "on_buy_btn" data-reveal-id="callback">Купить сейчас</a>
</div>

<div id = "on_w" class = "on_blocks">
<div class = "length">75 метров</div>
<img src = "images/on_img.png">
<div class="on_price_old">758 грн</div>
<div class = "on_price">379</div>
<div class = "uah">грн</div>
<a href = "#" class = "on_buy_btn" data-reveal-id="callback">Купить сейчас</a>
</div>
	</div>
</section>

<section id = "descript">
	<div class = "container">
	<div id = "desc_ttl">Описание товара</div>
	<div id = "desc_text">
	Шланг XHOSE имеет уникальную конструкцию 2-в-1: жесткий<br /> внутренний резиновый шланг покрыт износостойким внешним<br /> нейлоновым шлангом. Вместе они позволяют шлангу ИКС ХОЗ<br /> становиться в 3 раза длиннее по сравнению с исходным размером!
	<br /><br /><br /><br />
	Включите воду - шланг ИКС ХОЗ начнет <br />
растягиваться автоматически. Откройте клапан на конце, <br />
и можете начинать полив.Когда Вы выключаете воду, длина <br />
шланга вновь сокращается - за считанные секунды!
	</div>
	<img src = "images/desc_image.png" id = "desc_img">
	<div style = "clear:both"></div>
	<a href = "#" class = "buy_btn" data-reveal-id="callback"></a>
	</div>
</section>
<section id="hardtts">
 <div class="tts_har">
 		<h3>ТЕХНИЧЕСКИК ХАРАКТЕРИСТИКИ:</h3>
		<div class="tts_har_img_line">
			<img src="images/ikonki_yayNtDh.png" alt="">
		</div>
		<div class="tts_har_img_line">
			<div class="tts_har_zagolovok">МАТЕРИАЛ ШЛАНГА:</div>
			<div class="tts_har_text">ТКАННОЕ ПОЛИЭФИРНОЕ ПОЛОТНО, ЛАТЕКС</div>
			<div class="tts_har_zagolovok">МАТЕРИАЛ АРМАТУРЫ:</div>
			<div class="tts_har_text">АБС-ПЛАСТИК</div>
			<div class="tts_har_zagolovok">ДЛИНА:</div>
			<div class="tts_har_text"><span>15М:</span> В СЛОЖЕННОЕ ВИДЕ ≈ 5М</div>
			<div class="tts_har_text"><span>22,5М:</span> В СЛОЖЕННОЕ ВИДЕ ≈ 7,5М</div>
			<div class="tts_har_text"><span>30М:</span> В СЛОЖЕННОЕ ВИДЕ ≈ 10М</div>
			<div class="tts_har_text"><span>37,5М:</span> В СЛОЖЕННОЕ ВИДЕ ≈ 12,5М</div>
			<div class="tts_har_text"><span>45М:</span> В СЛОЖЕННОЕ ВИДЕ ≈ 15М</div>
			<div class="tts_har_text"><span>52,5М:</span> В СЛОЖЕННОЕ ВИДЕ ≈ 17,5М</div>
			<div class="tts_har_text"><span>60М:</span> В СЛОЖЕННОЕ ВИДЕ ≈ 20М</div>
			<div class="tts_har_text"><span>75М:</span> В СЛОЖЕННОЕ ВИДЕ ≈25М</div>
			<div class="tts_har_zagolovok">ЦВЕТ:</div>
			<div class="tts_har_text">ГОЛУБОЙ, ЗЕЛЁНЫЙ</div>
			<div class="tts_har_zagolovok">РАБОЧЕЕ ДАВЛЕНИЕ ВОДНЫ:</div>
			<div class="tts_har_text">ОТ 2 ДО 15 АТМ</div>
		</div>
 </div>
</section>
<section id = "how_work">
	<div class = "container">
	<div id = "h_ttl">Принцип работы продукта</div>
	<div id = "video">
	<div id = "vid"><iframe width="482" height="295" src="https://www.youtube.com/embed/-mB3pbickLU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
	<a href = "#" class = "buy_btn" data-reveal-id="callback"></a>
	</div>
	<div id = "h_text">
	Шланг XHOSE имеет уникальную конструкцию 2-в-1:<br /> жесткий внутренний резиновый шланг покрыт<br />
износостойким внешним нейлоновым шлангом.<br /> Вместе они позволяют шлангу ИКС ХОЗ становиться<br /> в 3 раза длиннее по сравнению<br />
с исходным размером!<br /><br /><br />
Включите воду - шланг ИКС ХОЗ начнет<br />
растягиваться автоматически.<br />
Откройте клапан на конце,<br />
и можете начинать полив.Когда Вы выключаете воду,<br /> длина  шланга вновь сокращается - за считанные<br /> секунды! Включите воду - шланг ИКС ХОЗ начнет<br />
растягиваться автоматически.<br />
Откройте клапан на конце,и можете начинать<br />
полив.Когда Вы выключаете воду, длина  шланга вновь сокращается - за считанные секунды!
	</div>
	</div>

</section>

<section id = "preim">
<div class = "container">
<div class = "char_ttl">ПРЕИМУЩЕСТВА XHOSE</div>
<div class = "preim_left">
<ul class = "pul_left">
<li>Растягивается при поступлении воды - становится в три раза длиннее</li>
<li>Автоматически возвращается в исходный размер - за секунды</li>
<li>Не перекручивается, не заламывается, не путается</li>
<li>Сверхпрочный и износостойкий</li>
<li>Эффективно работает в паре с усилителем напора</li>
<li>Очень легкий</li>
<li>Компактный, удобно хранить</li>
<li>Универсальный - справится с любым заданием</li>
</ul>
<a href = "#" class = "buy_btn" data-reveal-id="callback"></a>
</div>
<img src = "images/kompl_img.png" id = "pr_img">

</div>
</section>
<section id="nezamenim">
	<h3>XHOSE НЕЗАМЕНИМ ДЛЯ:</h3>
	<div class="container">
		<div class="block-nezamenim">
			<img src="images/qwerty-1.jpg" alt="">
			<p>Для мойки окон </br>или фасада дома,</br>полива газонов;</p>
		</div>
		<div class="block-nezamenim">
			<img src="images/qwerty-2.jpg" alt="">
			<p>Для мойки окон </br>или фасада дома,</br>полива газонов;</p>
		</div>
		<div class="block-nezamenim">
			<img src="images/qwerty-3.jpg" alt="">
			<p>Для мойки окон </br>или фасада дома,</br>полива газонов;</p>
		</div>
		<div class="block-nezamenim">
			<img src="images/qwerty-4.jpg" alt="">
			<p>Для мойки окон </br>или фасада дома,</br>полива газонов;</p>
		</div>
		<div class="block-nezamenim">
			<img src="images/qwerty-5.jpg" alt="">
			<p>Для мойки окон </br>или фасада дома,</br>полива газонов;</p>
		</div>
		<div class="block-nezamenim">
			<img src="images/qwerty-6.jpg" alt="">
			<p>Для мойки окон </br>или фасада дома,</br>полива газонов;</p>
		</div>
	</div>
</section>

<link href="source/gallery/fotorama.css" rel="stylesheet">

		<div class="product_info product_info_dop">
			<div class="container">
						<div class="ttl">ОБРАТИТЕ ВНИМАНИЕ НА ДРУГИЕ ПОПУЛЯРНЫЕ ТОВАРЫ</div>
						<!--Москитная сетка-->
						<div class="product_info_bl">
							<div class="cols">
								<div class="fotorama" data-nav="thumbs" data-width="700" data-ratio="700/467" data-max-width="100%">
									<a href="https://youtu.be/RFP1kiHcXSU?rel=0&amp;showinfo=0"></a>
									<img src="images/magicmesh01.jpg">
									<img src="images/magicmesh02.jpg">
									<img src="images/magicmesh03.jpg">
									<img src="images/magicmesh04.jpg">
									<img src="images/magicmesh05.jpg">
								</div>
							</div>
							<div class="cols">
								<div class="textcols">
									<div class="base_inf">
										<h4>Москитная сетка Magic Mesh</h4>
										<div class="buy_block">
											<div class="pull-left">
												<p class="old_price pull-left"><span>178</span> <span>грн</span></p>
											<p class="new_price pull-left"><span>89</span> <span>грн</span></p>
											</div>
										</div>
									</div>
									<div class="specifications">
										<h5>Описание</h5>
										<p>Москитная сетка на магнитах Magic mesh крепится на проем двери при помощи двусторонней липкой ленты или прикалывается кнопками. А когда вы проходите, благодаря 18-и магнитам штора автоматически закрывается прямо за вами.</p>
									</div>
								</div>
							</div>
							<div style="clear:both"></div>
						</div>
						<!--Перчатки-->
						<div class="product_info_bl">
							<div class="cols">
							   <div class="fotorama" data-nav="thumbs" data-width="700" data-ratio="700/467" data-max-width="100%">
									<a href="https://youtu.be/FA-qnu14JsI?rel=0&amp;showinfo=0"></a>
									<img src="images/gardengloves01.jpg">
									<img src="images/gardengloves02.jpg">
									<img src="images/gardengloves03.jpg">
									<img src="images/gardengloves04.jpg">
									<img src="images/gardengloves05.jpg">
								</div>
							</div>
							<div class="cols">
								<div class="textcols">
									<div class="base_inf">
										<h4>Перчатки для садоводства Garden Genie Gloves</h4>
										<div class="buy_block">
											<div class="pull-left">
												<p class="old_price pull-left"><span>120</span> <span>грн</span></p>
												<p class="new_price pull-left"><span>60</span> <span>грн</span></p>
											</div>
										</div>
									</div>
									<div class="specifications">
										<h5>Описание</h5>
										<p>Garden Genie – это настоящая находка для любителей садоводства! C перчатками Garden Genie вскапывать, высаживать, сортировать и сгребать чрезвычайно быстро и легко! Предотвращают от образования порезов и волдырей, потому что они сделаны из прочного и устойчивого к проколам материала для максимальной защиты рук.</p>
									</div>
								</div>
							</div>
						</div>
						<!--Отпугиватель кротов-->
						<div class="product_info_bl">
							<div class="cols">
							   <div class="fotorama" data-nav="thumbs" data-width="700" data-ratio="700/467" data-max-width="100%">
									<a href="https://youtu.be/2A4c3MY3rzI?rel=0&amp;showinfo=0"></a>
									<img src="images/repeller01.jpg">
									<img src="images/repeller02.jpg">
									<img src="images/repeller03.jpg">
								</div>
							</div>
							<div class="cols">
								<div class="textcols">
									<div class="base_inf">
										<h4>Отпугиватель кротов Solar Rodent Repeller</h4>
										<div class="buy_block">
											<div class="pull-left">
												<p class="old_price pull-left"><span>360</span> <span>грн</span></p>
												<p class="new_price pull-left"><span>230</span> <span>грн</span></p>
											</div>
										</div>
									</div>
									<div class="specifications">
										<h5>Описание</h5>
										<p>В борьбе с нежелательными «сожителями» поможет экологически безопасный прибор – ультразвуковой отпугиватель грызунов Solar Rodent Repeller. Устройство производит и распространяет вокруг себя звуковые волны, которые вызывают у грызунов чувство тревоги и дискомфорта и вынуждают их покинуть зону действия излучателя. А это около 650 квадратных метров площади, защищенных от вредителей!</p>
									</div>
								</div>
							</div>
						</div>
					  	<!--Ключи-->
						<div class="product_info_bl">
							<div class="cols">
							   <div class="fotorama" data-nav="thumbs" data-width="700" data-ratio="700/467" data-max-width="100%">
									<a href="https://youtu.be/STL-NbEyoPs?rel=0&amp;showinfo=0"></a>
									<img src="images/snapngrip01.jpg">
									<img src="images/snapngrip02.jpg">
									<img src="images/snapngrip03.jpg">
									<img src="images/snapngrip04.jpg">
									<img src="images/snapngrip05.jpg">
								</div>
							</div>
							<div class="cols">
								<div class="textcols">
									<div class="base_inf">
										<h4>Универсальный чудо-ключ Snap'n Grip</h4>
										<div class="buy_block">
											<div class="pull-left">
												<p class="old_price pull-left"><span>250</span> <span>грн</span></p>
												<p class="new_price pull-left"><span>110</span> <span>грн</span></p>
											</div>
										</div>
									</div>
									<div class="specifications">
										<h5>Описание</h5>
										<p>Универсальный ключ Snap’n Grip имеет специальную конструкцию захвата, благодаря чему инструмент не соскользнет даже с самых гладких поверхностей. Захваты сами подстраиваются под форму и размер рабочей поверхности, справятся с кранами, клапанами, радиаторами, трубами, различными деталями.</p>
									</div>
								</div>
							</div>
						</div>
						<!--Овощерезка-->
						<div class="product_info_bl">
							<div class="cols">
								<div class="fotorama" data-nav="thumbs" data-width="700" data-ratio="700/467" data-max-width="100%">
									<a href="https://youtu.be/9UINF3cP4cQ?rel=0&amp;showinfo=0"></a>
									<img src="images/nicerdicer01.jpg">
									<img src="images/nicerdicer02.jpg">
									<img src="images/nicerdicer03.jpg">
									<img src="images/nicerdicer04.jpg">
									<img src="images/nicerdicer05.jpg">

								</div>
							</div>
							<div class="cols">
								<div class="textcols">
									<div class="base_inf">
										<h4>Овощерезка Nicer Dicer Plus</h4>
										<div class="buy_block">
											<div class="pull-left">
												<p class="old_price pull-left"><span>300</span> <span>грн</span></p>
												<p class="new_price pull-left"><span>199</span> <span>грн</span></p>
											</div>
										</div>
									</div>
									<div class="specifications">
										<h5>Описание</h5>
										<p>Овощерезка Nicer Dicer Plus – это незаменимый помощник на любой кухне, даже профессиональной. Его чрезвычайно острые режущие лезвия позволяют безупречно нарезать все виды фруктов и овощей.</p>
									</div>
								</div>
							</div>
							<div style="clear:both"></div>
						</div>
			</div>
		</div>

<section id = "feedbacks">
<div class = "container">
<div class = "ttl">Отзывы</div>
<div class = "fb fb-first">
<div class = "fb_name">Евгений, с. Новокиевка</div>
<div class = "fb_date">04.10.2013</div>
<img src = "images/stras-1.png" class = "stras"/>
<div class = "fb_text">Купил недавно этот шланг. Подключал к насосу - все нормально, не рвется)! Не занимает много места. И
вообще в селе всегда нужен удобный поливочный шланг.</div>
</div>

<div class = "fb fb-second">
<div class = "fb_name">Янина, г. Одеса</div>
<div class = "fb_date">08.02.2014</div>
<img src = "images/stars-2.png" class = "stras"/>
<div class = "fb_text">Купила для дачного участка, поливаю грядки и цветочники. Качеством и ценой довольна. Очень прост в
обращении, даже не требуется помощи мужчины. </div>
</div>

<div class = "fb fb-third">
<div class = "fb_name">Евгений, г. Днепропетровск</div>
<div class = "fb_date">15.12.2013</div>
<img src = "images/stars-3.png" class = "stras"/>
<div class = "fb_text">Очень доволен шлангом! С его помощью я мою машину, а жена поливает свои цветочки в саду)!</div>
</div>
<div style = "width:100%; clear:both;"></div>
<a href = "" class = "add_feedback"><img src = "images/add_feed.png" /></a>
</div>

</section>

<section id = "pay_delivery">
<div class = "container">
<div class = "char_ttl">ОПЛАТА И ДОСТАВКА</div>
<div class = "payment">
<img src = "images/payment.png">
<div class = "p_text">Оплата производится по факту получения товара непосредственно курьеру, либо на отделении Новой Почты.<br />
Также возможна оплата на карточку Приват Банка. Это позволит немного сэкономить в случае, если доставка<br /> будет осуществляться Новой Почтой.</div>
</div>
<div style = "width:100%; clear:both;"></div>
<div class = "delivery">
<img src = "images/delivery.png">
<div class = "p_text">Доставка по территории Киева осуществляется столичными службами доставки в день заказа товара, если<br /> покупка совершена до 09:20.<br />
Доставка по территории Украины осуществляется через курьерскую компанию «Новая Почта», отделения кото-<br />рой есть в 662 населённых пунктах Украины.<br />
Стоимость доставки по Киеву составляет 30грн, по Украине - около 40 грн.</div>
</div>
<div style = "width:100%; clear:both;"></div>
<a href = "#" class = "buy_btn" data-reveal-id="callback"></a>
</div>
</section>

<section id = "contacts">
<div class = "container">
<div class = "ttl">контакты</div>
<div class = "cont_text">
За прошлый месяц продано 2021 шлангов.<br />
Xhose успешно продается в 34 странах мира.<br />
Срок службы шланга составляет не менее 3 лет.<br />
Шланг растягивается в 3 раза и имеет малый вес.
<br /><br />
Телефоны:<br />
(067) 620-07-57<br />
(093) 737-82-12<br />
(050) 338-61-41<br><br />

</div>

<div class = "cont_map">
<img src="images/cert.jpg" width="228px" alt="">
</div>
</div>
</section>

<section id = "footer">
<div class = "container">
<p>© 2012-2019 XHOSE Украина. Все права защищены.</p>
<p>Копирование материалов сайтов запрещено.</p>
</div>
</section>

<div id = "callback" class = "reveal-modal">
	<div class="tm-modal-cart uk-modal-dialog">
            <a class="uk-modal-close uk-close"></a>
            <h2 class="tm-cart-title">Оформление заказа</h2>
            <div class="tm-cart-products">
                <ul class="uk-list uk-list-line">
                    <li class="tm-product-item">
                        <div class="uk-grid uk-grid-preserve">
                            <div class="tm-cart-product-image uk-width-1-5"><img src="images/on_img.png" alt="Топ продаж" height = "70"></div>
                            <div class="tm-cart-product-description uk-width-3-5">XHOSE (ИКС ХОЗ)</div>
                            <div class="tm-cart-product-price uk-width-1-5"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <form class="backform uk-form tm-cart-form" id = "zakaz" action="form.php" method="post">

                <div class="uk-grid uk-grid-preserve">
                    <div class="uk-width-1-4"><label for="name">Ваше имя</label></div>
                    <div class="uk-width-3-4"><input type="text" name="name_form" id="name" class="uk-form-large uk-width-1-1" placeholder="Введите имя" required></div>
                </div>
                <div class="uk-grid uk-grid-preserve">
                    <div class="uk-width-1-4"><label for="phone">Телефон <sup class="uk-text-danger">*</sup></label></div>
                    <div class="uk-width-3-4"><input type="text" name="phone_form" id="phone" class="uk-form-large uk-width-1-1" required placeholder="Введите телефон"></div>
                </div>
                <div class="uk-grid uk-grid-preserve">
                    <div class="uk-width-1-4"><label for="email">Укажите длину шланга</label></div>
                    <div class="uk-width-3-4"><select id = "length" name = "length" required>

		<option value = "163">7,5 метров</option>
		<option value = "164">15 метров</option>
		<option value = "166">22,5 метров</option>
		<option value = "165">30 метров</option>
		<option value = "167">37,5 метров</option>
		<option value = "168">45 метров</option>
		<option value = "169">52,5 метров</option>
		<option value = "170">60 метров</option>
		<option value = "171">75 метров</option>
	</select></div>
                </div>
                <!-- <div class="uk-grid uk-grid-preserve">
                    <div class="uk-width-1-4"><label for="city">Адрес доставки</label></div>
                    <div class="uk-width-3-4">
                                <input type="text" name="city" id="city" class="uk-form-large uk-width-1-1" placeholder="Введите адрес">
                    </div>
                </div> -->
                <div class="uk-grid uk-grid-preserve uk-margin-top">
                    <div class="uk-width-3-4 uk-push-1-4">
                        <button type="submit" class="tm-cart-submit-button uk-button uk-button-large">Оформить заказ</button>
                    </div>
                </div>
				<input type="hidden" name = "price_1" value="79">
				<input type="hidden" name = "price_2" value="159">
				<input type="hidden" name = "price_3" value="189">
				<input type="hidden" name = "price_4" value="219">
				<input type="hidden" name = "price_5" value="289">
				<input type="hidden" name = "price_6" value="339">
				<input type="hidden" name="partner" value="">
				<input type="hidden" name="form_token" value="5ccadf2994011" />
            </form>
            <div class="tm-features-footer">
                <div class="uk-grid uk-grid-preserve">
                    <div class="uk-width-1-3">
                        <img src="images/hasbro.png" class="uk-float-left">Оригинальная продукция
                    </div>
                    <div class="uk-width-1-3">
                        <img src="images/garant.png" class="uk-float-left">Гарантия возврата товара
                    </div>
                    <div class="uk-width-1-3">
                        <img src="images/postman.png" class="uk-float-left">Доставка по всей Украине
                    </div>
                </div>
            </div>
        </div>

	</form>
</div>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.reveal.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script src="source/gallery/fotorama.js"></script>

<!-- Код тега ремаркетинга Google -->
<!--------------------------------------------------
С помощью тега ремаркетинга запрещается собирать информацию, по которой можно идентифицировать личность пользователя. Также запрещается размещать тег на страницах с контентом деликатного характера. Подробнее об этих требованиях и о настройке тега читайте на странице http://google.com/ads/remarketingsetup.
--------------------------------------------------->


<link rel = "stylesheet" href = "tracker.css" media = "all">
<script type="text/javascript" src="js/callback.js"></script>


<div id="cbh_widget_wrapper" style="height: 388px;">

<div class="cbh" id="cbh_container">
<div class="cbh-background">
<div class="cbh-blured">
</div>
<div class="cbh-faded">
</div>
</div>
<div class="cbh-arrow">
<div class="cbh-arrow-wrapper">
<div class="cbh-arrow-part">
</div>
<div class="cbh-arrow-part cbh-bottom">
</div>
</div>
</div>
<div class="cbh-body">
<div class="cbh-x" id="cbh-x">
</div>
<div class="cbh-icons">
<div class="cbh-icon cbh-icon-phone cbh-active cbh-icon-anim1">
<div class="cbh-img">
</div>
<div class="cbh-text">Call</div>
</div>
<!--<div class="cbh-icon cbh-icon-subscribe cbh-icon-anim3">
<div class="cbh-img"></div>
<div class="cbh-text">E-mail</div>
</div>-->
</div>
<div class="cbh-wrapper">
<div class="cbh-item" style="height: 253px;" id="cbh_item_call">
<div class="cbh-text">
<div id="cbh_status" class="cbh-status cbh-big-text cbh-typing j-cbh-big-text-now"><span id = "ttlts">Остались вопросы?</span> Мы перезвоним Вам и проконсультируем<br> всего через <br> <div id ="coutdown">15<span id = "blinker">:</span>00</div> секунд.<br> Засекайте!</div>
<input type="text" class="cbh-input" id="cbh_phone_input" value="" placeholder="Введите ваш номер" maxlength="19">
<div class="cbh-button" id="cbh_send" style="margin-bottom: 15px">Жду звонка!</div>
<div class="cbh-timer cbh-clear" id="cbh_timer"></div>
<div id="cbh_info" class="cbh-info"></div>
</div>
</div>
<div class="cbh-item" style="height: 253px;" id="cbh_item_call_deferred"><div class="cbh-text"><div class="cbh-normal-text cbh-typed" id="cbh_item_call_deferred_text" style="height: 100px;"> — Сейчас сотрудники не в офисе.<br> Давайте мы перезвоним Вам <span id = "call_date">13.07</span> в выбранное время?<span class="cbh-cursor">_</span></div><div class="cbh-deferred"><div class="calls_time"><span>Время звонка:</span></div><div class="cbh-deferred__hour"><span class="cbh-deferred__hour-val">09:00</span><div class="cbh-timer-sel cbh-hide" id="cbh_timer_sel_hour"><ul class="cbh-timer-sel__hold cbh-timer-sel__hold__hour"><li><span>09:00</span></li><li><span>10:00</span></li><li><span>11:00</span></li><li><span>12:00</span></li><li><span>13:00</span></li><li><span>14:00</span></li><li><span>15:00</span></li><li><span>16:00</span></li><li><span>17:00</span></li><li><span>18:00</span></li><li><span>19:00</span></li></ul></div></div></div><input type="text" class="cbh-input" id="cbh_phone_input_deferred" value="" placeholder="Введите ваш номер" maxlength="19"><div class="cbh-button" id="cbh_send_deferred">Жду звонка!</div><div class="cbh-info" id="cbh_deferred_info"></div></div></div>
<div class="cbh-item" id="cbh_item_dialog" style="height: 253px;">
<div class="cbh-text" id="cbh_item_dialog_content">
<div class="cbh-big-text cbh-typed undefined" style="height: 27px;">— Сделаю всё,</div>
<div class="cbh-normal-text cbh-typed" style="height: 38px;">чтобы вы получили ответ в<br> течение 45 минут. Пишите!<span class="cbh-cursor">_</span>
</div>
<div class="cbh-form cbh-letter"><div><div data-index="0" class="cbh-form-elem">
<textarea name="question" id="cbh_item_dialog_input_0" placeholder="Напишите вопрос" class="cbh-input cbh-form-input"></textarea>
</div>
<div class="cbh-form-error-message" id="cbh_form_error_0"></div>
</div>
<div>
<div data-index="1" class="cbh-form-elem">
<input type="text" name="email" id="cbh_item_dialog_input_1" placeholder="Ваш E-mail (для ответа)" class="cbh-input cbh-form-input"></div>
<div class="cbh-form-error-message" id="cbh_form_error_1">
</div>
</div>
<div>
<div data-index="2" class="cbh-form-elem">
<input type="text" name="phone" id="cbh_item_dialog_input_2" placeholder="Ваш телефон (по желанию)" class="cbh-input cbh-form-input"></div>
<div class="cbh-form-error-message" id="cbh_form_error_2"></div></div><div>
<div data-index="3" class="cbh-form-elem"><div class="cbh-button" id="mail_send">Отправить</div></div>
<div class="cbh-form-error-message" id="cbh_form_error_3"></div></div></div></div></div>
</div></div></div></div>
<div class = "container">
<div id="tcb-call" class="cbh-widget-content"><div class="tcb-phone"></div><div class="tcb-layout" id="takecallback"></div></div>
</div>
</body>
</html>
