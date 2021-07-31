<?php

namespace app\models\gii;

use Yii;

/**
 * This is the model class for table "links".
 *
 * @property int $id
 * @property string $alias
 * @property string $url_string
 */
class Links extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'links';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alias', 'url_string'], 'required'],
            [['alias'], 'string', 'max' => 25],
            [['url_string'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Alias',
            'url_string' => 'Url String',
        ];
    }
}
