<?php

namespace seller\models;

use common\models\Seller;
use Yii;

/**
 * This is the model class for table "notifikasi_seller".
 *
 * @property int $id
 * @property string $message
 * @property string $channel
 * @property string $event
 * @property string $from
 * @property string $action
 * @property int $id_seller
 * @property int $is_opened
 * @property int $is_deleted
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Seller $seller
 */
class NotifikasiSeller extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notifikasi_seller';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_seller', 'is_opened', 'is_deleted', 'created_at', 'updated_at'], 'integer'],
            [['message', 'channel', 'event', 'from', 'action'], 'string', 'max' => 255],
            [['id_seller'], 'exist', 'skipOnError' => true, 'targetClass' => Seller::className(), 'targetAttribute' => ['id_seller' => 'id']],
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
            'id_seller' => 'Id Seller',
            'is_opened' => 'Is Opened',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeller()
    {
        return $this->hasOne(Seller::className(), ['id' => 'id_seller']);
    }
}
