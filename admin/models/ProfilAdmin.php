<?php

namespace admin\models;

use Yii;

/**
 * This is the model class for table "profil_admin".
 *
 * @property int $id
 * @property int $id_admin
 * @property string $nama
 * @property string $avatar
 * @property int $no_hp
 * @property string $tempat_lahir
 * @property int $tanggal_lahir
 * @property string $alamat_1
 * @property string $alamat_2
 * @property string $kecamatan
 * @property string $kota
 * @property string $provinsi
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Admin $admin
 */
class ProfilAdmin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_admin', 'no_hp', 'tanggal_lahir', 'created_at', 'updated_at'], 'integer'],
            [['nama', 'avatar', 'tempat_lahir', 'alamat_1', 'alamat_2', 'kecamatan', 'kota', 'provinsi'], 'string', 'max' => 255],
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
            'id_admin' => 'Id Admin',
            'nama' => 'Nama',
            'avatar' => 'Avatar',
            'no_hp' => 'No Hp',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat_1' => 'Alamat 1',
            'alamat_2' => 'Alamat 2',
            'kecamatan' => 'Kecamatan',
            'kota' => 'Kota',
            'provinsi' => 'Provinsi',
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
