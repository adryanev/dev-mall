<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaksi_cicilan".
 *
 * @property int $id
 * @property int $id_transaksi
 * @property int $tgl_pembayaran
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Transaksi $transaksi
 */
class TransaksiCicilan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_cicilan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'tgl_pembayaran', 'created_at', 'updated_at'], 'integer'],
            [['id_transaksi'], 'exist', 'skipOnError' => true, 'targetClass' => Transaksi::className(), 'targetAttribute' => ['id_transaksi' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_transaksi' => 'Id Transaksi',
            'tgl_pembayaran' => 'Tgl Pembayaran',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksi()
    {
        return $this->hasOne(Transaksi::className(), ['id' => 'id_transaksi']);
    }
}
