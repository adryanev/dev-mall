<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "summary".
 *
 * @property int $id
 * @property int $id_transaksi
 * @property int $persentasi
 * @property int $created_at
 * @property string $notes
 * @property int $updated_at
 *
 * @property Transaksi $transaksi
 */
class Summary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'summary';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'persentasi', 'created_at', 'updated_at'], 'integer'],
            [['notes'], 'string', 'max' => 255],
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
            'persentasi' => 'Persentasi',
            'created_at' => 'Created At',
            'notes' => 'Notes',
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
