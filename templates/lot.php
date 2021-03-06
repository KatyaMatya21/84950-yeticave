<li class="lots__item lot">
  <div class="lot__image">
    <img src="<?= esc($advert['url']) ?>" width="350" height="260" alt="<?= esc($advert['name']) ?>">
  </div>
  <div class="lot__info">
    <span class="lot__category"><?= $advert['category'] ?></span>
    <h3 class="lot__title"><a class="text-link" href="lot.html"><?= esc($advert['name']) ?></a></h3>
    <div class="lot__state">
      <div class="lot__rate">
        <span class="lot__amount">Стартовая цена</span>
        <span class="lot__cost"><?= format_price($advert['price']) ?></span>
      </div>
      <div class="lot__timer timer">
        <?= times_left() ?>
      </div>
    </div>
  </div>
</li>
