<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "notifikasi_user".
 *
 * @property int $id
 * @property string $message
 * @property string $channel
 * @property string $from
 * @property string $action
 * @property string $event
 * @property int $id_user
 * @property int $is_opened
 * @property int $is_deleted
 * @property int $created_at
 * @property int $updated_at
 *
 * @property User $user
 */
class NotifikasiUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notifikasi_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'is_opened', 'is_deleted', 'created_at', 'updated_at'], 'integer'],
            [['message', 'channel', 'from', 'action', 'event'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'message' => 'Message',
            'channel' => 'Channel',
            'from' => 'From',
            'action' => 'Action',
            'event' => 'Event',
            'id_user' => 'Id User',
            'is_opened' => 'Is Opened',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
