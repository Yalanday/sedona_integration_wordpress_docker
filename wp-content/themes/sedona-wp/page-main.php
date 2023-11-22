<?php
/* 
Template Name: Шаблон "Седона Главная" 
*/
?>

<?php get_header(); ?>
<main class="main-index">
	<section class="hero">
		<style>
			.hero {
				background-image: url(<?php the_field('background_hero'); ?>);
				/* background-size: cover; */
			}
		</style>
		<h1 class="visually-hidden">Добро пожаловать в город Седона</h1>
		<img class="hero-img" src="<?php the_field('hero_title'); ?>" width="458" height="352"
			alt="Изображение гор, на фоне которых имеется надпись: Добро пожаловать в великолепный город Седона. P.S.: Потому-что Большой каньон - это отстой">
		<img class="decoration-hero-img" src="<?php echo get_template_directory_uri(); ?>/images/divider.svg" width="100%", height="auto">
	</section>
	<section class="advantages">
		<h2 class="advantages-title">Седона — небольшой городок в Аризоне,<br>
			заслуживающий большего!</h2>
		<p class="advantages-descr">Рассмотрим причины, по которым Седона круче, чем Гранд-Каньон!</p>
		<ul class="advantages-list">
			<li class="advantages-item advantages-item-extended">
				<div class="advantages-item-content">
					<h3 class="advantages-item-title">Настоящий<br> городок</h3>
					<p class="advantages-item-descr">Седона — не аттракцион для<br> туристов, там течёт своя <br> жизнь
					</p>
				</div>
				<div class="img-size-regulator">
					<img src="<?php echo get_template_directory_uri(); ?>/images/photo-first-advantages.jpg" width="800"
						height="385" alt="Фотография деревянного дома, построенного в стиле дикого запада">
				</div>
			</li>
			<li class="advantages-item">
				<div class="advantages-item-content">
					<h3 class="advantages-item-title">Небольшая<br> площадь</h3>
					<p class="advantages-item-descr">Все достопримечательности<br> находятся очень близко</p>
				</div>
			</li>
			<li class="advantages-item">
				<div class="advantages-item-content">
					<h3 class="advantages-item-title">Красивая<br> дорога</h3>
					<p class="advantages-item-descr">Ехать в Седону из Лас-Вегаса<br> совсем не скучно!</p>
				</div>
			</li>
			<li class="advantages-item">
				<div class="advantages-item-content">
					<h3 class="advantages-item-title">Мало<br> туристов</h3>
					<p class="advantages-item-descr">Большинство едет в Гранд<br> Каньон и толпится там</p>
				</div>
			</li>
			<li class="advantages-item advantages-item-extended">
				<div class="advantages-item-content">
					<h3 class="advantages-item-title">Там есть <br>мост дьявола</h3>
					<p class="advantages-item-descr">Да, по нему можно пройти!<br> Если вы осмелитесь,<br> разумеется
					</p>
				</div>
				<div class="img-size-regulator">
					<img src="<?php echo get_template_directory_uri(); ?>/images/photo-last-advantages.jpg" width="800"
						height="385" alt="Фотография горного перехода">
				</div>
			</li>
		</ul>
	</section>
	<section class="featurtes">
		<h2 class="featurtes-title">Приезжайте в Седону отдохнуть <br>в комфорте и уюте!</h2>
		<p class="featurtes-descr">Опытный персонал и качественное обслуживание!</p>
		<ul class="featurtes-list">
			<li class="featurtes-item">
				<h3 class="featurtes-item-title ">Жильё</h3>
				<p class="featurtes-item-descr">Рекомендуем пожить <br> в настоящем мотеле,<br> всё как в кино!</p>
			</li>
			<li class="featurtes-item features-food">
				<h3 class="featurtes-item-title">Еда</h3>
				<p class="featurtes-item-descr">Всегда заказывайте <br> топовый фирменный бургер, <br> вы не
					разочаруетесь!</p>
			</li>
			<li class="featurtes-item features-souvenir">
				<h3 class="featurtes-item-title">Сувениры</h3>
				<p class="featurtes-item-descr">Не только китайского, <br> но и настоящего местного <br> производства!
				</p>
			</li>
		</ul>
	</section>
	<section class="hotel-search">
		<h2 class="hotel-search-title">Заинтересовались?</h2>
		<p class="hotel-search-descr">Укажите предполагаемые даты поездки,<br> и мы покажем вам лучшие предложения
			гостиниц в Седоне</p>
		<button class="button hotel-search-button" type="button">Поиск гостиницы в Седоне</button>
	</section>

	<section class="subscription">
		<h2 class="subscription-title">Подпишитесь на рассылку</h2>
		<p class="subscription-descr">Только полезная информация и никакого спама, <br> честное бойскаутское!</p>
		<form class="subscription-form" action="https://echo.htmlacademy.ru/" method="post">
			<label class="visually-hidden" for="subscription-email">E-mail адрес</label>
			<div class="field-wrapper">
				<input class="field" type="email" name="subscription-email" id="subscription-email"
					placeholder="Ваш e-mail" required>
				<button class="subscription-button" type="submit">Подписаться</button>
			</div>
		</form>
	</section>
</main>
<?php get_footer(); ?>