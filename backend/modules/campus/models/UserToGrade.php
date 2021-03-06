<?php

namespace backend\modules\campus\models;

use Yii;
use \backend\modules\campus\models\base\UserToGrade as BaseUserToGrade;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "users_to_grade".
 */
class UserToGrade extends BaseUserToGrade
{

public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
             parent::rules(),
             [
                  # custom validation rules
             ]
        );
    }

    /**
     * 学生与班级批量创建关系
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function date_save($data){
     //dump($data);exit;
      $info = ['error' => []];
      if(!isset($data) && empty($data) && !is_array($data['user_id']))
      {
            return false;
      }

      foreach ($data['user_id'] as $key => $value) {
              if($value){
                $model            = new UserToGrade;
                $model->user_id   = $value;
                $model->school_id = $data['school_id'];
                $model->grade_id  = $data['grade_id'];
                $model->user_title_id_at_grade = $data['user_title_id_at_grade'];
                $model->status    = $data['status'];
                $model->grade_user_type = $data['grade_user_type'];
                if(!$model->save()){
                    $info['error'][$key] = $model->getErrors();
                    continue;
                }
              }
      }
      return $info;
    }
  /**
   * 
   * @param  [type] $data [description]
   * @return [type]       [description]
   */
  public function batch_create($data){
        $info = [
            'message' =>[]
        ];
        $param = [];
        $param = $data['user_id'];
        foreach ($param as $key => $value) {
          //$is_checkout = $this->is_checkout($data);
          //if($is_checkout == 0){
              $model    = new UserToGrade;
              $data['user_id'] = $value;
              $model->load($data,'');
              if(!$model->save()){
                $info['error'][$key] = $model->getErrors();
                continue;
              }else{
                $info['message'][] = $model->attributes;
              }
        //  }
        }
        return $info;
  }

  /**
   * 检查数据是否存在
   * @param  array   $param [description]
   * @param  boolean $value [description]
   * @return boolean        [description]
   */
  public function is_checkout($param = [])
  {
    $count = self::find()->where($param)->count();
    return $count;
  }
}
