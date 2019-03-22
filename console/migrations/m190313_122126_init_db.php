<?php

use yii\db\Migration;

/**
 * Class m190313_122126_init_db
 */
class m190313_122126_init_db extends Migration
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

        $this->createTable('{{%admin}}',[
            'id'=> $this->primaryKey(),
            'username'=> $this->string(),
            'email'=> $this->string(),
            'password_hash'=> $this->string(64),
            'password_reset_token'=> $this->string(),
            'auth_key'=> $this->string(2),
            'status'=> $this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
          

        ],$tableOptions);

        $this->createTable('{{%profil_admin}}',[
            'id'=> $this->primaryKey(),
            'id_admin'=> $this->integer(),
            'nama'=>$this->string(),
            'avatar'=> $this->string(),
            'no_hp'=> $this->integer(12),
            'tempat_lahir'=> $this->string(),
            'tanggal_lahir'=> $this->integer(),
            'alamat_1'=> $this->string(),
            'alamat_2'=> $this->string(),
            'kecamatan'=> $this->string(),
            'kota'=> $this->string(),
            'provinsi'=>$this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ],$tableOptions);

        $this->createTable('{{%seller}}',[
            'id'=> $this->primaryKey(),
            'username'=> $this->string(),
            'email'=> $this->string(),
            'password_hash'=> $this->string(64),
            'password_reset_token'=> $this->string(),
            'auth_key'=> $this->string(2),
            'status'=> $this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%seller_profil}}',[
            'id'=> $this->primaryKey(),
            'id_seller'=> $this->integer(),
            'nama'=> $this->string(),
            'no_hp'=> $this->integer(12),
            'avatar'=> $this->string(),
            'tempat_lahir'=> $this->string(),
            'tanggal_lahir'=> $this->integer(),
            'alamat_1'=> $this->string(),
            'alamat_2'=> $this->string(),
            'kecamatan'=> $this->string(),
            'kota'=> $this->string(),
            'provinsi'=>$this->string(),
            'pekerjaan'=> $this->string(),
            'jenis_kelamin'=> $this->string(),
            'ktp'=> $this->string(),
            'kk'=> $this->string(),
            'sim'=> $this->string(),
            'cover'=> $this->string(),
            'deskripsi'=> $this->string(),
            'izin_usaha'=> $this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%user}}',[
            'id'=> $this->primaryKey(),
            'username'=> $this->string(),
            'email'=> $this->string(),
            'password_hash'=> $this->string(64),
            'password_reset_token'=> $this->string(),
            'auth_key'=> $this->string(2),
            'status'=> $this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%user_profil}}',[
            'id'=> $this->primaryKey(),
            'id_user'=> $this->integer(),
            'nama'=> $this->string(),
            'no_hp'=> $this->integer(12),
            'avatar'=> $this->string(),
            'tempat_lahir'=> $this->string(),
            'tanggal_lahir'=> $this->integer(),
            'alamat_1'=> $this->string(),
            'alamat_2'=> $this->string(),
            'kecamatan'=> $this->string(),
            'kota'=> $this->string(),
            'provinsi'=>$this->string(),
            'pekerjaan'=> $this->string(),
            'jenis_kelamin'=> $this->string(),
            'ktp'=> $this->string(),
            'kk'=> $this->string(),
            'sim'=> $this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%produk}}',[
            'id'=> $this->primaryKey(),
            'id_kategori'=> $this->integer(),
            'id_seller'=> $this->integer(),
            'nama_produk'=> $this->string(),
            'developer'=> $this->string(),
            'harga'=> $this->bigInteger(),
            'status'=> $this->string(),
            'deskripsi'=> $this->string(),
            'video'=> $this->string(),
            'live_demo'=> $this->string(),
            'manual_book'=> $this->string(),
            'fitur'=> $this->string(),
            'spesifikasi'=> $this->string(),
            'source_code'=> $this->string(),
            'is_nego'=> $this->boolean(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%detail_produk}}',[
            'id'=> $this->primaryKey(),
            'id_produk'=> $this->integer(),
            'foto'=> $this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%kategori}}',[
            'id'=> $this->primaryKey(),
            'nama'=> $this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%nego}}',[
            'id'=> $this->primaryKey(),
            'id_produk'=> $this->integer(),
            'harga_1'=> $this->bigInteger(),
            'harga_2'=> $this->bigInteger(),
            'harga_3'=> $this->bigInteger(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%metode_pembayaran}}',[
            'id'=> $this->primaryKey(),
            'nama'=> $this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%transaksi}}',[
            'id'=> $this->primaryKey(),
            'tanggal'=>$this->integer(),
            'id_user'=> $this->integer(),
            'id_seller'=> $this->integer(),
            'id_metode_pembayaran'=> $this->integer(),
            'total'=> $this->bigInteger(),
            'status'=> $this->string(),
            'expiration'=> $this->integer(),
            'is_cicilan'=> $this->boolean(),
            'id_kategori_cicilan'=> $this->integer(),
            'is_promo'=> $this->boolean(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%kategori_cicilan}}',[
            'id'=> $this->primaryKey(),
            'nama'=> $this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%detail_transaksi}}',[
            'id'=> $this->primaryKey(),
            'id_transaksi'=> $this->integer(),
            'id_produk'=> $this->integer(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%transaksi_cicilan}}',[
            'id'=> $this->primaryKey(),
            'id_transaksi'=> $this->integer(),
            'tgl_pembayaran'=> $this->integer(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%promo}}',[
            'id'=> $this->primaryKey(),
            'id_transaksi'=> $this->integer(),
            'promo'=> $this->string(),
            'start_date'=> $this->integer(),
            'end_date'=> $this->integer(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%request}}',[
            'id'=> $this->primaryKey(),
            'id_user'=> $this->integer(),
            'id_seller'=> $this->integer(),
            'id_kategori'=> $this->integer(),
            'nama_app'=> $this->string(),
            'deskripsi'=> $this->string(),
            'dokumen'=> $this->string(),
            'harga'=> $this->bigInteger(),
            'status'=> $this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%notifikasi_user}}',[
            'id'=> $this->primaryKey(),
            'message'=> $this->string(),
            'channel'=> $this->string(),
            'from'=> $this->string(),
            'action'=> $this->string(),
            'event'=> $this->string(),
            'id_user'=> $this->integer(),
            'is_opened'=> $this->boolean(),
            'is_deleted'=> $this->boolean(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%notifikasi_admin}}',[
            'id'=> $this->primaryKey(),
            'message'=> $this->string(),
            'channel'=> $this->string(),
            'event'=> $this->string(),
            'from'=> $this->string(),
            'action'=> $this->string(),
            'id_admin'=> $this->integer(),
            'is_opened'=> $this->boolean(),
            'is_deleted'=> $this->boolean(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%notifikasi_seller}}',[
            'id'=> $this->primaryKey(),
            'message'=> $this->string(),
            'channel'=> $this->string(),
            'event'=> $this->string(),
            'from'=> $this->string(),
            'action'=> $this->string(),
            'id_seller'=> $this->integer(),
            'is_opened'=> $this->boolean(),
            'is_deleted'=> $this->boolean(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%profil}}',[
            'id'=> $this->primaryKey(),
            'nama'=> $this->string(),
            'profil'=> $this->string(),
            't_c'=> $this->string(),
            'faq'=> $this->string(),
            'how_to'=> $this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%rating_comment}}',[
            'id'=> $this->primaryKey(),
            'id_user'=> $this->integer(),
            'id_produk'=> $this->integer(),
            'rating'=> $this->string(),
            'comment'=> $this->string(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%favorite}}', [
            'id'=> $this->primaryKey(),
            'id_user'=> $this->integer(),
            'id_produk'=> $this->integer(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%summary}}',[
            'id'=> $this->primaryKey(),
            'id_transaksi'=> $this->integer(),
            'persentasi'=> $this->integer(),
            'created_at'=> $this->integer(),
            'notes'=> $this->string(),
            'updated_at'=> $this->integer(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190313_122126_init_db cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190313_122126_init_db cannot be reverted.\n";

        return false;
    }
    */
}
