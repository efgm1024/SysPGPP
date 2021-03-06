<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\MaterializeAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="shortcut icon" type="image/icon" href="<?= Yii::$app->request->baseUrl;  ?>/favicon.ico"/>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
  <nav class="indigo">
    <div class="nav-wrapper">
      <?= Html::a(Html::img('@web/img/unitec-logo.png', ['class' => 'img-responsive brand-logo', 'height' => '64px']), Url::home()) ?>
      <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><?= Html::a('Inicio', Url::home()) ?></li>
        <?php if(Yii::$app->user->isGuest): ?>
        <li><?= Html::a('Entrar', Url::to('user/security/login')) ?></li>
        <?php endif ?>
        <li><?= Html::a('Prácticas', '') ?></li>
        <li><?= Html::a('Proyectos', '') ?></li>
        <li><?= Html::a('Preguntas Frecuentes', '') ?></li>
        <?php if(!Yii::$app->user->isGuest): ?>
        <li><a class="dropdown-button" data-activates="user-dropdown"><?= Html::encode(Yii::$app->user->identity->username) ?><i class="material-icons right">arrow_drop_down</i></a></li>
        <?php endif ?>
      </ul>
      <?php if(!Yii::$app->user->isGuest): ?>
      <ul id="user-dropdown" class="dropdown-content">
        <li><?= Html::a('Mi perfil', '') ?></li>
        <li class="divider"></li>
        <li><?= Html::a('Salir como ' .  Yii::$app->user->identity->username, ['/user/security/logout'], ['data-method' => 'post']) ?></li>
      </ul>
      <?php endif ?>
      <ul class="side-nav" id="mobile-menu">
        <li><?= Html::a('Inicio', Url::home()) ?></li>
        <li><?= Html::a('Entrar', '') ?></li>
        <li><a href="badges.html">Prácticas</a></li>
        <li><a href="collapsible.html">Proyectos</a></li>
        <li><a href="mobile.html">Preguntas Frecuentes</a></li>
      </ul>
    </div>
  </nav>
  <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
