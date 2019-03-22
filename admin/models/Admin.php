<?php

namespace admin\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $auth_key
 * @property string $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property NotifikasiAdmin[] $notifikasiAdmins
 * @property ProfilAdmin[] $profilAdmins
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['username', 'email', 'password_reset_token', 'status'], 'string', 'max' => 255],
            [['password_hash'], 'string', 'max' => 64],
            [['auth_key'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotifikasiAdmins()
    {
        return $this->hasMany(NotifikasiAdmin::className(), ['id_admin' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfilAdmins()
    {
        return $this->hasMany(ProfilAdmin::className(), ['id_admin' => 'id']);
    }
}
