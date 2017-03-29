<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\modules\campus\models\base;

use Yii;

/**
 * This is the base-model class for table "cn_region".
 *
 * @property integer $region_id
 * @property string $region_name
 * @property integer $city_id
 * @property string $aliasModel
 */
abstract class CnRegion extends \yii\db\ActiveRecord
{


    public static function getDb(){
        return \Yii::$app->modules['campus']->get('campus');
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cn_region';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_id', 'region_name'], 'required'],
            [['region_id', 'city_id'], 'integer'],
            [['region_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'region_id' => Yii::t('common', 'Region ID'),
            'region_name' => Yii::t('common', '地区名称'),
            'city_id' => Yii::t('common', '父地区ID'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(parent::attributeHints(), [
            'region_name' => Yii::t('common', '地区名称'),
            'city_id' => Yii::t('common', '父地区ID'),
        ]);
    }


    
    /**
     * @inheritdoc
     * @return \backend\modules\campus\models\query\CnRegion the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\modules\campus\models\query\CnRegion(get_called_class());
    }


}
