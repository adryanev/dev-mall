<?php

use yii\db\Migration;

/**
 * Class m190321_030303_create_foreign_key
 */
class m190321_030303_create_foreign_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->addForeignKey('fk-profil_admin-admin',
            '{{%profil_admin}}',
            'id_admin',
            '{{%admin}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-seller_profil-seller',
            '{{%seller_profil}}',
            'id_seller',
            '{{%seller}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-user_profil-user',
            '{{%user_profil}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-detail_produk-produk',
            '{{%detail_produk}}',
            'id_produk',
            '{{%produk}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-nego-produk',
            '{{%nego}}',
            'id_produk',
            '{{%produk}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-transaksi-user',
            '{{%transaksi}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-transaksi-seller',
            '{{%transaksi}}',
            'id_seller',
            '{{%seller}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-transaksi-metode_pembayaran',
            '{{%transaksi}}',
            'id_metode_pembayaran',
            '{{%metode_pembayaran}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-transaksi-kategori_cicilan',
            '{{%transaksi}}',
            'id_kategori_cicilan',
            '{{%kategori_cicilan}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-detail_transaksi-transaksi',
            '{{%detail_transaksi}}',
            'id_transaksi',
            '{{%transaksi}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-detail_transaksi-produk',
            '{{%detail_transaksi}}',
            'id_produk',
            '{{%produk}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-transaksi_cicilan-transaksi',
            '{{%transaksi_cicilan}}',
            'id_transaksi',
            '{{%transaksi}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-promo-transaksi',
            '{{%promo}}',
            'id_transaksi',
            '{{%transaksi}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-request-user',
            '{{%request}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-request=-seller',
            '{{%request}}',
            'id_seller',
            '{{%seller}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-request-kategori',
            '{{%request}}',
            'id_kategori',
            '{{%kategori}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-notifikasi_user-user',
            '{{%notifikasi_user}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-notifikasi_admin-admin',
            '{{%notifikasi_admin}}',
            'id_admin',
            '{{%admin}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-notifikasi_seller-seller',
            '{{%notifikasi_seller}}',
            'id_seller',
            '{{%seller}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-rating_comment-user',
            '{{%rating_comment}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-rating_comment-produk',
            '{{%rating_comment}}',
            'id_produk',
            '{{%produk}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-favorite-user',
            '{{%favorite}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-favorite-prosuk',
            '{{%favorite}}',
            'id_produk',
            '{{%produk}}',
            'id',
            'CASCADE',
            'CASCADE');

        $this->addForeignKey('fk-summary-transaksi',
            '{{%summary}}',
            'id_transaksi',
            '{{%transaksi}}',
            'id',
            'CASCADE',
            'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190321_030303_create_foreign_key cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190321_030303_create_foreign_key cannot be reverted.\n";

        return false;
    }
    */
}
