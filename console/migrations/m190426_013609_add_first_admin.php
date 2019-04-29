<?php

use yii\db\Migration;

/**
 * Class m190426_013609_add_first_admin
 */
class m190426_013609_add_first_admin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%admin}}',[
            'username'=>'adminev',
            'email'=>'adminev@devmall.com',
            'password_hash'=>'$2y$13$tyy5A3UZe0ipSoaWDrbpXOfBE8bph0sawnVHrGu6RFfgD7Nihq9he',
            'password_reset_token'=>null,
            'auth_key'=>'Pwys0TRico7Ha4YSyX2fmjABrFskscxh',
            'status'=> 1,
            'created_at'=>0,
            'updated_at'=>0
        ]);
        $this->insert('{{%profil_admin}}',[
            'id_admin'=>1,
            'nama'=>'Adminev Mazdevmall',
            'avatar'=>'admin.png',
            'no_hp'=>'081322456678',
            'tempat_lahir'=>'Internet',
            'tanggal_lahir'=>0,
            'alamat_1'=>'Jl. Telkom, Perumahan Localhost',
            'alamat_2'=>'Nomor 127.0.0.1',
            'kelurahan'=>'Tuah Madani',
            'kecamatan' =>'Tampan',
            'kota'=>'Pekanbaru',
            'provinsi'=>'Riau',
            'created_at'=>0,
            'updated_at'=>0,
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190426_013609_add_first_admin cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190426_013609_add_first_admin cannot be reverted.\n";

        return false;
    }
    */
}
