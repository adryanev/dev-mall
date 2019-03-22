<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profil".
 *
 * @property int $id
 * @property string $nama
 * @property string $profil
 * @property string $t_c
 * @property string $faq
 * @property string $how_to
 * @property int $created_at
 * @property int $updated_at
 */
class Profil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['nama', 'profil', 't_c', 'faq', 'how_to'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'profil' => 'Profil',
            't_c' => 'T C',
            'faq' => 'Faq',
            'how_to' => 'How To',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
