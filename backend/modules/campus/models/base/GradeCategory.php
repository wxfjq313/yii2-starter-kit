<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\modules\campus\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "grade_category".
 *
 * @property integer $grade_category_id
 * @property integer $parent_id
 * @property string  $name
 * @property integer $creater_id
 * @property integer $status
 * @property integer $updated_at
 * @property integer $created_at
 * @property string $aliasModel
 */
abstract class GradeCategory extends \yii\db\ActiveRecord
{

    CONST CATEGORY_OPEN     = 10; //正常
    CONST CATEGORY_INVALID  = 20; //无效的


    public static function optsStatus(){
        return [
            self::CATEGORY_OPEN     => '正常',
            self::CATEGORY_INVALID  => '无效'
        ];
    }

    public static function getDb(){
       return \Yii::$app->modules['campus']->get('campus');
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grade_category';
    }



    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['creater_id', 'status'], 'integer'],
            ['creater_id','default','value'=>Yii::$app->user->identity->id],
            [['name', 'creater_id', 'status'], 'required'],
            [['name'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grade_category_id' => Yii::t('common', '分类ID'),
            'parent_id' => Yii::t('common', '父分类'),
            'name' => Yii::t('common', 'Name'),
            'creater_id' => Yii::t('common', '创建者'),
            'updated_at' => Yii::t('common', 'Updated At'),
            'created_at' => Yii::t('common', 'Created At'),
            'status' => Yii::t('common', '状态'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(parent::attributeHints(), [
            'parent_id' => Yii::t('common', '父ID'),
            'status' => Yii::t('common', '正常: 10 ; 关闭：20 '),
        ]);
    }


    
    /**
     * @inheritdoc
     * @return \backend\modules\campus\models\query\GradeCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\modules\campus\models\query\GradeCategoryQuery(get_called_class());
    }


}
