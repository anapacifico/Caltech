<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Yii::getAlias('@web/img/favicon.png')]);
?>
<?php $this->beginPage() ?>


<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>


<header id="header">
    <!-- <div class="sidebar">
        <?php
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => 'Inicio', 'url' => ['/site/index']],
                ['label' => 'Circunferência', 'url' => ['circunferencia/index']],
                ['label' => 'Baskara', 'url' => ['baskara/index']],
                ['label' => 'Área de Triângulo', 'url' => ['area-triangulo/index']],
                ['label' => 'Probabilidade', 'url' => ['probabilidade/index']],
                ['label' => 'MRU', 'url' => ['/mru/index']],
                ['label' => 'MUV', 'url' => ['muv/index']],
                ['label' => 'MCU', 'url' => ['mcu/index']],
                ['label' => 'Energia Potencial Gravitacional', 'url' => ['trabalho/index']],
                ['label' => 'Potência', 'url' => ['potencia/index']],
                ['label' => 'Impulso', 'url' => ['impulso/index']],
            ],
        ]);
        ?>
    </div> -->

    <?= $this->render('manu', [
    ]) ?>
</header>

<main id="main" class="flex-shrink-0 main-content" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; Ana Pacifico <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
