<?php

/**
 * @file Render a round switch toggleColumn in Yii2 GridView.
 * @author Nick Denry
 */

namespace nickdenry\grid\roundToggle;

use Yii;
use yii\grid\DataColumn;
use yii\helpers\Html;
use yii\web\View;

/**
 * Render a round switch toggleColumn in Yii2 GridView.
 * @author Nick Denry
 */
class RoundSwitchColumn extends DataColumn
{
    public function init()
    {
        $this->filter = [
            "1" => Yii::t('yii', 'Yes'),
            "0" => Yii::t('yii', 'No'),
        ];
        parent::init();
    }
    /**
     * {@inheritdoc}
     */
    protected function renderDataCellContent($model)
    {

        return Yii::$app->view->render('@nickdenry/grid/roundToggle/views/switch', ['model' => $model]);
    }
}
