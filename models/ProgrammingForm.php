<?php


namespace app\models;


use yii\base\Model;

class ProgrammingForm extends Model
{
    public $rating;
    public $id_language;

    public function rules()
    {
        return [
            [['rating'], 'required'],
            [['rating'], 'integer'],
            [['id_language'], 'integer'],
        ];
    }
}