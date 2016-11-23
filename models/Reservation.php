<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%reservation}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $company
 * @property string $when_date
 * @property string $when_time
 * @property string $where_pickup
 * @property string $where_destination
 * @property integer $duration
 * @property integer $status
 * @property string $created_at
 * @property integer $updated_at
 */
class Reservation extends \yii\db\ActiveRecord
{
    const SCENARIO_INSERT = 'insert';
    const STATUS_NEW = 5;
    const STATUS_APPROVE = 10;
    const STATUS_DELETE = 15;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%reservation}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'company', 'when_date', 'when_time', 'where_pickup', 'where_destination', 'duration', 'status', 'created_at', 'updated_at'], 'required'],
            [['created_at'], 'safe'],
            [['when_date'], 'date', 'format' => 'php:Y-m-d'],
            [['status', 'updated_at'], 'integer'],
            [['duration'], 'integer', 'min' => 1, 'max' => 100],
            [['name', 'email', 'where_pickup', 'where_destination'], 'string', 'max' => 150],
            [['phone'], 'string', 'max' => 50],
            [['company'], 'string', 'max' => 100],
            [['when_time'], 'string', 'max' => 8],
            [['email'], 'email'],
            [['phone'], 'match', 'pattern' => '/^[0-9-]+$/'],
            [['name', 'email', 'phone', 'company', 'when_date', 'when_time', 'where_pickup', 'where_destination', 'duration'], 'trim'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'company' => Yii::t('app', 'Company'),
            'when_date' => Yii::t('app', 'When Date'),
            'when_time' => Yii::t('app', 'When Time'),
            'where_pickup' => Yii::t('app', 'Where Pickup'),
            'where_destination' => Yii::t('app', 'Where Destination'),
            'duration' => Yii::t('app', 'Duration'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_INSERT] = ['name', 'email', 'phone', 'company', 'when_date', 'when_time', 'where_pickup', 'where_destination', 'duration'];
        return $scenarios;
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
                ],
            ],
        ];
    }
}
