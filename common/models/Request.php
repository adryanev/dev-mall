<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_seller
 * @property int $id_kategori
 * @property string $nama_app
 * @property string $deskripsi
 * @property string $dokumen
 * @property string $harga
 * @property string $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Kategori $kategori
 * @property User $user
 * @property Seller $seller
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_seller', 'id_kategori', 'harga', 'created_at', 'updated_at'], 'integer'],
            [['nama_app', 'deskripsi', 'dokumen', 'status'], 'string', 'max' => 255],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['id_kategori' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
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
            'id_user' => 'Id User',
            'id_seller' => 'Id Seller',
            'id_kategori' => 'Id Kategori',
            'nama_app' => 'Nama App',
            'deskripsi' => 'Deskripsi',
            'dokumen' => 'Dokumen',
            'harga' => 'Harga',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['id' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeller()
    {
        return $this->hasOne(Seller::className(), ['id' => 'id_seller']);
    }
}
