<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id
 * @property int $id_kategori
 * @property int $id_seller
 * @property string $nama_produk
 * @property string $developer
 * @property string $harga
 * @property string $status
 * @property string $deskripsi
 * @property string $video
 * @property string $live_demo
 * @property string $manual_book
 * @property string $fitur
 * @property string $spesifikasi
 * @property string $source_code
 * @property int $is_nego
 * @property int $created_at
 * @property int $updated_at
 *
 * @property DetailProduk[] $detailProduks
 * @property DetailTransaksi[] $detailTransaksis
 * @property Favorite[] $favorites
 * @property Nego[] $negos
 * @property RatingComment[] $ratingComments
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori', 'id_seller', 'harga', 'is_nego', 'created_at', 'updated_at'], 'integer'],
            [['nama_produk', 'developer', 'status', 'deskripsi', 'video', 'live_demo', 'manual_book', 'fitur', 'spesifikasi', 'source_code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kategori' => 'Id Kategori',
            'id_seller' => 'Id Seller',
            'nama_produk' => 'Nama Produk',
            'developer' => 'Developer',
            'harga' => 'Harga',
            'status' => 'Status',
            'deskripsi' => 'Deskripsi',
            'video' => 'Video',
            'live_demo' => 'Live Demo',
            'manual_book' => 'Manual Book',
            'fitur' => 'Fitur',
            'spesifikasi' => 'Spesifikasi',
            'source_code' => 'Source Code',
            'is_nego' => 'Is Nego',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailProduks()
    {
        return $this->hasMany(DetailProduk::className(), ['id_produk' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTransaksis()
    {
        return $this->hasMany(DetailTransaksi::className(), ['id_produk' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFavorites()
    {
        return $this->hasMany(Favorite::className(), ['id_produk' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNegos()
    {
        return $this->hasMany(Nego::className(), ['id_produk' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRatingComments()
    {
        return $this->hasMany(RatingComment::className(), ['id_produk' => 'id']);
    }
}
