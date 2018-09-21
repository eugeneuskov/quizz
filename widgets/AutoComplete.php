<?php


namespace app\widgets;


use yii\bootstrap\Widget;
use app\models\Programming;


class AutoComplete extends Widget
{
    public function init()
    {

    }

    public function run()
    {
        if (Programming::find()->count() > 25) {
            $programming = Programming::find()
                ->cache(86400) // 1 day
                ->all();
        } else {
            $programming = Programming::find()
                ->all();
        }

        return $this->render('autocomplete', compact('programming'));
    }
}