<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "nego".
 *
 * @property int $id
 * @property int $id_produk
 * @property string $harga_1
 * @property string $harga_2
 * @property string $harga_3
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Produk $produk
 */
class Nego extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nego';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_produk', 'harga_1', 'harga_2', 'harga_3', 'created_at', 'updated_at'], 'integer'],
            [['id_produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::className(), 'targetAttribute' => ['id_produk' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_produk' => 'Id Produk',
            'harga_1' => 'Harga 1',
            'harga_2' => 'Harga 2',
            'harga_3' => 'Harga 3',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduk()
    {
        return $this->hasOne(Produk::className(), ['id' => 'id_produk']);
    }
}
