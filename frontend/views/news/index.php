<?php

/* @var $this yii\web\View */

use abdualiym\language\Language;
use common\helpers\LanguageHelper;

/* @var $news \common\models\News */

?>

<section class="main-content">
<div id="rs-portfolio" class="rs-portfolio sec-spacer">
    <div class="container">
        <div class="row grid">
            <?php foreach($news as $n):?>
            <div class="col-md-4 col-sm-6 mb-30 grid-item filter1 filter3">
                <div class="gallery-item popup-inner">
                    <div class="gallery-content">
                        <img src="/uploads/news/<?=$n->photo?>" alt="" />
                        <div class="popup-text">
                            <div class="contents-here">
                                <a class="icon-part" href="<?= yii\helpers\Url::to(['news/view', 'id' => $n->id]) ?>">
                                    <i class="fa fa-link" aria-hidden="true"></i>
                                </a>
                                <h4 class="title"><a href="<?= yii\helpers\Url::to(['news/view', 'id' => $n->id]) ?>"><?= LanguageHelper::get($n, 'title') ?></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php endforeach;?>
        </div>
    </div>
</div>
<!-- Project Section End -->
</section>
