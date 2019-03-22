<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "seller_profil".
 *
 * @property int $id
 * @property int $id_seller
 * @property string $nama
 * @property int $no_hp
 * @property string $avatar
 * @property string $tempat_lahir
 * @property int $tanggal_lahir
 * @property string $alamat_1
 * @property string $alamat_2
 * @property string $kecamatan
 * @property string $kota
 * @property string $provinsi
 * @property string $pekerjaan
 * @property string $jenis_kelamin
 * @property string $ktp
 * @property string $kk
 * @property string $sim
 * @property string $cover
 * @property string $deskripsi
 * @property string $izin_usaha
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Seller $seller
 */
class SellerProfil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seller_profil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_seller', 'no_hp', 'tanggal_lahir', 'created_at', 'updated_at'], 'integer'],
            [['nama', 'avatar', 'tempat_lahir', 'alamat_1', 'alamat_2', 'kecamatan', 'kota', 'provinsi', 'pekerjaan', 'jenis_kelamin', 'ktp', 'kk', 'sim', 'cover', 'deskripsi', 'izin_usaha'], 'string', 'max' => 255],
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
            'id_seller' => 'Id Seller',
            'nama' => 'Nama',
            'no_hp' => 'No Hp',
            'avatar' => 'Avatar',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat_1' => 'Alamat 1',
            'alamat_2' => 'Alamat 2',
            'kecamatan' => 'Kecamatan',
            'kota' => 'Kota',
            'provinsi' => 'Provinsi',
            'pekerjaan' => 'Pekerjaan',
            'jenis_kelamin' => 'Jenis Kelamin',
            'ktp' => 'Ktp',
            'kk' => 'Kk',
            'sim' => 'Sim',
            'cover' => 'Cover',
            'deskripsi' => 'Deskripsi',
            'izin_usaha' => 'Izin Usaha',
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
