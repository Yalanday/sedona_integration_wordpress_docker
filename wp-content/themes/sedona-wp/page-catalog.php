<?php
/* 
Template Name: Шаблон "Седона Каталог" 
*/
?>

<?php get_header(); ?>
<main class="main-catalog">
	<div class="catalog-group">
		<section class="catalog-header">
			<h1 class="catalog-title">Гостиницы Седоны</h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="index.html" class="breadcrumbs-link breadcrumbs-link-to-main" aria-label="На главную"></a>
				</li>
				<li class="breadcrumbs-item">
					<a class="breadcrumbs-link">
						Гостиницы
					</a>
				</li>
			</ul>
		</section>
		<section class="filter">
			<form class="catalog-filter" action="https://echo.htmlacademy.ru/" method="get">

				<div class="filter-block-wrapper">

					<fieldset class="catalog-filter-group">
						<legend class="catalog-filter-title">Инфраструктура:</legend>
						<ul class="catalog-filter-list">
							<li class="catalog-filter-item">
								<input class="control-input" type="checkbox" name="pool" id="pool-checkbox" checked>
								<label class="control" for="pool-checkbox">
									Бассейн
								</label>
							</li>
							<li class="catalog-filter-item">
								<input class="control-input" type="checkbox" name="parking" id="parking-checkbox"
									checked>
								<label class="control" for="parking-checkbox">
									Парковка
								</label>
							</li>
							<li class="catalog-filter-item">
								<input class="control-input" type="checkbox" name="wi-fi" id="wi-fi-checkbox">
								<label class="control" for="wi-fi-checkbox">
									Wi-Fi
								</label>
							</li>
						</ul>
					</fieldset>
					<fieldset class="catalog-filter-group">
						<legend class="catalog-filter-title">Тип Жилья:</legend>
						<ul class="catalog-filter-list">
							<li class="catalog-filter-item">
								<input class="control-input " type="radio" name="hotel-types" id="hotel-radio" checked>
								<label class="control control-radio active-radio" for="hotel-radio">
									Гостиница
								</label>
							</li>
							<li class="catalog-filter-item">
								<input class="control-input" type="radio" name="hotel-types" id="motel-radio">
								<label class="control control-radio" for="motel-radio">
									Мотель
								</label>
							</li>
							<li class="catalog-filter-item">
								<input class="control-input" type="radio" name="hotel-types" id="apartments-radio">
								<label class="control control-radio" for="apartments-radio">
									Апартаменты
								</label>
							</li>
						</ul>
					</fieldset>
				</div>

				<div class="filter-block-wrapper">
					<div class="cost-filter-wrapper">
						<fieldset class="catalog-filter-group cost-filter">
							<legend class="catalog-filter-title">Стоимость, ₽:</legend>
							<label aria-label="Минимальная цена" class="min-cost-label" for="min-cost"></label>
							<input class="cost-input" type="text" name="min-cost" id="min-cost" value="0" required>
							<label aria-label="Максимальная цена" class="max-cost-label" for="max-cost"></label>
							<input class="cost-input" type="text" name="max-cost" id="max-cost" value="9000" required>
						</fieldset>
						<div class="range">
							<div class="range-scale">
								<div class="range-bar" style="left: 0; width: 226px">
									<button class="range-toggle toggle-min" type="button">
										<span class="visually-hidden">Изменить минимальную цену.</span>
									</button>
									<button class="range-toggle toggle-max" type="button">
										<span class="visually-hidden">Изменить максимальную цену.</span>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="filter-buttons">
						<button class="button filter-button" type="submit">Применить</button>
						<button class="button reset-button" type="reset">Сбросить</button>
					</div>
				</div>
			</form>
		</section>
	</div>
	<section class="search-result">
		<div class="search-result-container">
			<h2 class="search-result-title">Найдено гостиниц:
				<span class="search-result-count">38</span>
			</h2>
			<select class="cost-select" name="cost-level" id="cost-level">
				<option class="search-option" value="cheap">Сначала дешевые</option>
				<option class="search-option" value="expensive">Сначала дорогие</option>
				<option class="search-option" value="high-rating">С высоким рейтингом</option>
			</select>
			<ul class="search-result-display">
				<li class="result-display-item ">
					<a class="display-button display-button-current " href="#" aria-label="Таблица">
					</a>
				</li>
				<li class="result-display-item">
					<a class="display-button" href="#" aria-label="Слайдер">

					</a>
				</li>
				<li class="result-display-item">
					<a class="display-button" href="#" aria-label="Список">

					</a>
				</li>
			</ul>
		</div>
		<div class="cards-container">
			<ul class="cards-hotel-list">
				<li class="card-hotel-item">
					<a class="card-hotel-link" href="#">
						<img class="card-hotel-img" src="<?php echo get_template_directory_uri(); ?>/images/hotels/hotel-amara.jpg" width="300" height="212"
							alt="Вид из пещеры на звёздное небо">
					</a>
					<a class="card-hotel-link" href="#">
						<h3 class="card-hotel-title">Amara Resort &#38; Spa</h3>
					</a>
					<span class="hotel-card-type">Гостиница</span>
					<span class="hotel-card-price">От 4000 ₽</span>
					<a class="button link-button-more" href="#">Подробнее</a>
					<button class="button button-in-favourites" type="button">В избранное</button>
					<div class="star-rating">
						<span class="active"></span>
						<span class="active"></span>
						<span class="active"></span>
						<span class="active"></span>
						<span class="visually-hidden">4 звезды</span>
					</div>
					<p class="button rating-button">Рейтинг: 8,5</p>
				</li>
				<li class="card-hotel-item">
					<a class="card-hotel-link" href="#">
						<img class="card-hotel-img" src="<?php echo get_template_directory_uri(); ?>/images/hotels/hotel-villas.jpg" width="300" height="212"
							alt="Каньон на закате">
					</a>
					<a class="card-hotel-link" href="#">
						<h3 class="card-hotel-title">Villas at Poco Diablo</h3>
					</a>
					<span class="hotel-card-type">Гостиница
					</span>
					<span class="hotel-card-price">От 5000 ₽</span>
					<a class="button link-button-more" href="#">Подробнее</a>
					<button class="button added-in-favourites" type="button">В избранном</button>
					<div class="star-rating">
						<span class="active"></span>
						<span class="active"></span>
						<span class="active"></span>
						<span class="active"></span>
						<span class="visually-hidden">4 звезды</span>
					</div>
					<p class="button rating-button">Рейтинг: 9,2</p>
				</li>
				<li class="card-hotel-item">
					<a class="card-hotel-link" href="#">
						<img class="card-hotel-img" src="<?php echo get_template_directory_uri(); ?>/images/hotels/hotel-desert.jpg" width="300" height="212"
							alt="Каньон в солнечный день">
					</a>
					<a class="card-hotel-link" href="#">
						<h3 class="card-hotel-title">Desert Quail Inn</h3>
					</a>
					<span class="hotel-card-type">Гостиница</span>
					<span class="hotel-card-price">От 2500 ₽</span>
					<a class="button link-button-more" href="#">Подробнее</a>
					<button class="button button-in-favourites" type="button">В избранное</button>
					<div class="star-rating">
						<span class="active"></span>
						<span class="active"></span>
						<span class="active"></span>
						<span class="visually-hidden">3 звезды</span>
					</div>
					<p class="button rating-button">Рейтинг: 6,9</p>
				</li>
				<li class="card-hotel-item">
					<a class="card-hotel-link" href="#">
						<img class="card-hotel-img" src="<?php echo get_template_directory_uri(); ?>/images/hotels/hotel-greentree.jpg" width="300" height="212"
							alt="Вид из пещеры на звёздное небо"></a>
					<a class="card-hotel-link" href="#">
						<h3 class="card-hotel-title">GreenTree Inn</h3>
					</a>
					<span class="hotel-card-type">Гостиница</span>
					<span class="hotel-card-price">От 1500 ₽</span>
					<a class="button link-button-more" href="#">Подробнее</a>
					<button class="button button-in-favourites" type="button">В избранное</button>
					<div class="star-rating">
						<span class="active"></span>
						<span class="active"></span>
						<span class="visually-hidden">2 звезды</span>
					</div>
					<p class="button rating-button">Рейтинг: 5,0</p>

				</li>
			</ul>

			<div class="pagination-container">
				<ul class="pagination-list">
					<li class="pagination-item">
						<a class="pagination-link pagination-current">1</a>
					</li>
					<li class="pagination-item">
						<a class="pagination-link" href="#">2</a>
					</li>
					<li class="pagination-item">
						<a class="pagination-link" href="#">3</a>
					</li>
					<li class="pagination-item">
						<a class="pagination-link" href="#">4</a>
					</li>
				</ul>
				<p class="pagination-etc">...</p>
				<a class="pagination-link" href="#">10</a>
			</div>
		</div>
	</section>

	<section class="subscription-catalog">
		<h2 class="subscription-title">Подпишитесь на рассылку</h2>
		<p class="subscription-descr">Только полезная информация и никакого спама, <br> честное бойскаутское!</p>
		<form class="subscription-form" action="https://echo.htmlacademy.ru/" method="post">
			<label class="visually-hidden" for="subscription-email">Email</label>
			<div class="field-wrapper">
				<input class="field" type="email" name="subscription-email" id="subscription-email"
					placeholder="Ваш e-mail" required>
				<button class="subscription-button" type="submit">Подписаться</button>
			</div>
		</form>
	</section>
</main>
<?php get_footer(); ?>