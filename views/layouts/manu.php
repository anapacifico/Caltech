<?php

use yii\helpers\Html;


?>
<aside class="sidebar">
  <div id="leftside-navigation" class="nano">
    <ul class="nano-content">

      <li class="sub-menu">
        <?= Html::a('<i class="fa fa-home"></i><span>Home </span>', ['site/index'], ['class' => '']) ?>
      </li>

      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Física</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><?= Html::a('MRU', ['mru/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('MUV', ['muv/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Energia Potencial Gravitacional', ['trabalho/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Impulso', ['impulso/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Altura de lançamento', ['haltura/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Alcance', ['alcance/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Aceleração Centrípeda', ['centripeda/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('MCU', ['mcu/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Período', ['periodo/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Velocidade angular', ['angular/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Velocidade no eixo x', ['velocidadex/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Velocidade inicial no eixo y', ['velocidadey/index'], ['class' => '']) ?>
          </li>
        </ul>
      </li>

      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>Matemática </span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><?= Html::a('Circunferência', ['circunferencia/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Probabilidade', ['probabilidade/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Potência', ['potencia/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Área de Triangulos', ['area-triangulo/index'], ['class' => '']) ?>
          </li>
          <li><?= Html::a('Baskara', ['baskara/index'], ['class' => '']) ?>
          </li>
        </ul>
      </li>

    </ul>
  </div>
</aside>