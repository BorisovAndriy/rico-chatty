<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use himiklab\yii2\recaptcha\ReCaptchaValidator2;

/**
 * Модель для таблиці "order".
 */
class Order extends ActiveRecord
{
    /**
     * Віртуальне поле для капчі
     */
    public $reCaptcha;

    public static function tableName()
    {
        return '{{%order}}';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => false,
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    public function rules()
    {
        return [
            [['name', 'phone'], 'required', 'message' => '{attribute} не може бути порожнім'],
            [['comment'], 'string'],
            [['status'], 'integer'],
            [['status'], 'default', 'value' => 0],
            [['name'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 50],
            [['created_at'], 'safe'],

            // ОНОВЛЕНО: ПРАВИЛО ДЛЯ GOOGLE RECAPTCHA V2
            [['reCaptcha'], ReCaptchaValidator2::class,
                'uncheckedMessage' => 'Будь ласка, підтвердіть, що ви не робот.'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ім’я клієнта',
            'phone' => 'Номер телефону',
            'comment' => 'Коментар/Адреса',
            'status' => 'Статус замовлення',
            'created_at' => 'Дата замовлення',
            'reCaptcha' => 'Перевірка безпеки',
        ];
    }
}