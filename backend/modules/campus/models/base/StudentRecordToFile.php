<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\modules\campus\models\base;

use Yii;

/**
 * This is the base-model class for table "student_record_to_file".
 *
 * @property integer $student_record_to_file_id
 * @property integer $student_record_item_id
 * @property integer $file_storage_item_id
 * @property string $aliasModel
 */
abstract class StudentRecordToFile extends \yii\db\ActiveRecord
{


     /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
       return \Yii::$app->modules['campus']->get('campus');
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_record_to_file';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_record_item_id', 'file_storage_item_id'], 'required'],
            [['student_record_item_id', 'file_storage_item_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_record_to_file_id' => Yii::t('common', 'Student Record To File ID'),
            'student_record_item_id' => Yii::t('common', 'Student Record Item ID'),
            'file_storage_item_id' => Yii::t('common', 'File Storage Item ID'),
        ];
    }


    
    /**
     * @inheritdoc
     * @return \backend\modules\campus\models\query\StudentRecordToFileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\modules\campus\models\query\StudentRecordToFileQuery(get_called_class());
    }


}
