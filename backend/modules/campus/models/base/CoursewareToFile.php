<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\modules\campus\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "courseware_to_file".
 *
 * @property integer $courseware_to_file_id
 * @property integer $file_storage_item_id
 * @property integer $courseware_id
 * @property integer $status
 * @property integer $sort
 * @property integer $updated_at
 * @property integer $created_at
 * @property string $aliasModel
 */
abstract class CoursewareToFile extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'courseware_to_file';
    }
    public static function getDb(){
        return Yii::$app->modules['campus']->get('campus');
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
            [['file_storage_item_id', 'courseware_id'], 'required'],
            [['file_storage_item_id', 'courseware_id', 'status', 'sort'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'courseware_to_file_id' => Yii::t('models', '课件附件关系自增ID'),
            'file_storage_item_id' => Yii::t('models', '文件ID'),
            'courseware_id' => Yii::t('models', '课件ID'),
            'status' => Yii::t('models', '1：正常；0标记删除；2待审核； '),
            'sort' => Yii::t('models', '默认与排序'),
            'updated_at' => Yii::t('models', 'Updated At'),
            'created_at' => Yii::t('models', 'Created At'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(parent::attributeHints(), [
            'courseware_to_file_id' => Yii::t('models', '课件附件关系自增ID'),
            'file_storage_item_id' => Yii::t('models', '学校ID'),
            'courseware_id' => Yii::t('models', '课件ID'),
            'status' => Yii::t('models', '1：正常；0标记删除；2待审核； '),
            'sort' => Yii::t('models', '默认与排序'),
        ]);
    }


    
    /**
     * @inheritdoc
     * @return \backend\modules\campus\models\query\CoursewareToFileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\modules\campus\models\query\CoursewareToFileQuery(get_called_class());
    }


}
