<?php

namespace admin\models;

use Yii;

/**
 * This is the model class for table "notifikasi_admin".
 *
 * @property int $id
 * @property string $message
 * @property string $channel
 * @property string $event
 * @property string $from
 * @property string $action
 * @property int $id_admin
 * @property int $is_opened
 * @property int $is_deleted
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Admin $admin
 */
class NotifikasiAdmin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notifikasi_admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_admin', 'is_opened', 'is_deleted', 'created_at', 'updated_at'], 'integer'],
            [['message', 'channel', 'event', 'from', 'action'], 'string', 'max' => 255],
            [['id_admin'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['id_admin' => 'id']],
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
            'event' => 'Event',
            'from' => 'From',
            'action' => 'Action',
            'id_admin' => 'Id Admin',
            'is_opened' => 'Is Opened',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmin()
    {
        return $this->hasOne(Admin::className(), ['id' => 'id_admin']);
    }
}
