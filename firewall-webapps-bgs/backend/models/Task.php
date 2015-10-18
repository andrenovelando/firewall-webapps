<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property integer $task_id
 * @property integer $user_id
 * @property string $status
 * @property string $description
 * @property string $url
 * @property integer $jumlah
 * @property string $facebook
 * @property string $twitter
 * @property string $create_time
 * @property integer $running_time
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $socmed;

    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'jumlah'], 'required'],
            [['user_id', 'jumlah', 'running_time'], 'integer'],
            [['status'], 'string', 'max' => 12],
            [['description', 'url'], 'string', 'max' => 64],
            [['facebook', 'twitter'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'task_id' => 'Task ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'description' => 'Description',
            'url' => 'Url',
            'jumlah' => 'Jumlah',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'create_time' => 'Create Time',
            'running_time' => 'Running Time',
        ];
    }
}
