<?php

namespace common\models;

use Yii;

/**
 * This is the model class for collection "natars".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $x
 * @property mixed $y
 */
class Natars extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['trassist', 'natars'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'x',
            'y',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['x','y'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => Yii::t('app', 'ID'),
            'x' => Yii::t('app', 'X'),
            'y' => Yii::t('app', 'Y'),
        ];
    }
}
