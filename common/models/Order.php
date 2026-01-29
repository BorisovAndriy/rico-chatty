<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * Модель для таблиці "order".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $comment
 * @property int|null $status
 * @property string $created_at
 */
class Order extends ActiveRecord
{
    /**
     * Назва таблиці в базі даних
     */
    public static function tableName()
    {
        return '{{%order}}';
    }

    /**
     * Правила валідації (перевірка даних)
     */
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
        ];
    }

    /**
     * Назви полів (для відображення у формах)
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ім’я клієнта',
            'phone' => 'Номер телефону',
            'comment' => 'Коментар/Адреса',
            'status' => 'Статус замовлення',
            'created_at' => 'Дата замовлення',
        ];
    }
}