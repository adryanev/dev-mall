<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id
 * @property int $tanggal
 * @property int $id_user
 * @property int $id_seller
 * @property int $id_metode_pembayaran
 * @property string $total
 * @property string $status
 * @property int $expiration
 * @property int $is_cicilan
 * @property int $id_kategori_cicilan
 * @property int $is_promo
 * @property int $created_at
 * @property int $updated_at
 *
 * @property DetailTransaksi[] $detailTransaksis
 * @property Promo[] $promos
 * @property Summary[] $summaries
 * @property KategoriCicilan $kategoriCicilan
 * @property MetodePembayaran $metodePembayaran
 * @property Seller $seller
 * @property User $user
 * @property TransaksiCicilan[] $transaksiCicilans
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_user', 'id_seller', 'id_metode_pembayaran', 'total', 'expiration', 'is_cicilan', 'id_kategori_cicilan', 'is_promo', 'created_at', 'updated_at'], 'integer'],
            [['status'], 'string', 'max' => 255],
            [['id_kategori_cicilan'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriCicilan::className(), 'targetAttribute' => ['id_kategori_cicilan' => 'id']],
            [['id_metode_pembayaran'], 'exist', 'skipOnError' => true, 'targetClass' => MetodePembayaran::className(), 'targetAttribute' => ['id_metode_pembayaran' => 'id']],
            [['id_seller'], 'exist', 'skipOnError' => true, 'targetClass' => Seller::className(), 'targetAttribute' => ['id_seller' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal' => 'Tanggal',
            'id_user' => 'Id User',
            'id_seller' => 'Id Seller',
            'id_metode_pembayaran' => 'Id Metode Pembayaran',
            'total' => 'Total',
            'status' => 'Status',
            'expiration' => 'Expiration',
            'is_cicilan' => 'Is Cicilan',
            'id_kategori_cicilan' => 'Id Kategori Cicilan',
            'is_promo' => 'Is Promo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTransaksis()
    {
        return $this->hasMany(DetailTransaksi::className(), ['id_transaksi' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPromos()
    {
        return $this->hasMany(Promo::className(), ['id_transaksi' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSummaries()
    {
        return $this->hasMany(Summary::className(), ['id_transaksi' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriCicilan()
    {
        return $this->hasOne(KategoriCicilan::className(), ['id' => 'id_kategori_cicilan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMetodePembayaran()
    {
        return $this->hasOne(MetodePembayaran::className(), ['id' => 'id_metode_pembayaran']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeller()
    {
        return $this->hasOne(Seller::className(), ['id' => 'id_seller']);
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
    public function getTransaksiCicilans()
    {
        return $this->hasMany(TransaksiCicilan::className(), ['id_transaksi' => 'id']);
    }
}
