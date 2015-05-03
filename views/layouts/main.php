<?php

use baixinxing\ace\AceAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

AceAsset::register($this);
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <?= $this->render('//layouts/head') ?>
    </head>
    <body class="no-skin">
        <?php $this->beginBody() ?>
        <?= $this->render('//layouts/navbar') ?>

        <div class="main-container" id="main-container">
            <?= $this->render('//layouts/sidebar') ?>
            
            <div class="main-content">
                <div class="main-content-inner">
                    <?= $this->render('//layouts/breadcrumbs') ?>
                    <div class="page-content"><?= $content ?> </div>
                </div>
            </div>

            <?= $this->render('//layouts/footer') ?>
            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>