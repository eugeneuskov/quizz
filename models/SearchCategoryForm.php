<?php


namespace app\models;


use yii\base\Model;

class SearchCategoryForm extends Model
{
    public $search;

    public function rules()
    {
        return [
            [['search'], 'required'],
            [['search'], 'string']
        ];
    }


}