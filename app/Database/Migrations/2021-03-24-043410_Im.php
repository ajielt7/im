<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Im extends Migration
{
	public function up()
	{
        /*
         * Tabel Data Supplier
         */
        // $this->forge->addField([
        //     'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
        //     'namasupplier'     => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
        //     'alamatsupplier'   => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
        //     'notelp'           => ['type' => 'varchar', 'constraint' => 13, 'null' => true],
        //     'created_at'       => ['type' => 'datetime', 'null' => true],
        //     'updated_at'       => ['type' => 'datetime', 'null' => true],
        //     'deleted_at'       => ['type' => 'datetime', 'null' => true],
        // ]);

        // $this->forge->addKey('id', true);
        // $this->forge->addUniqueKey('namasupplier');

        // $this->forge->createTable('supplier', true);

        // /*
        //  * Data Terima / Penerimaan Barang
        //  */
        // $fields = [
        //     'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
        //     'kodeterima'       => ['type' => 'varchar', 'constraint' => 15, 'null' => true],
        //     'namabarang'       => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
        //     'supplier_id'      => ['type' => 'int', 'constraint' => 3],
        //     'kondisibarang'    => ['type' => 'varchar', 'constraint' => 11, 'null' => true],
        //     'jumlahterima'     => ['type' => 'int', 'constraint' => 4],
        //     'tanggalterima'    => ['type' => 'datetime', 'null' => true],
        //     'created_at'       => ['type' => 'datetime', 'null' => true],
        //     'updated_at'       => ['type' => 'datetime', 'null' => true],
        //     'deleted_at'       => ['type' => 'datetime', 'null' => true],
        // ];

        // $this->forge->addField($fields);
        // $this->forge->addKey('id', true);
        // $this->forge->addForeignKey('supplier_id', 'supplier', 'id', false, 'CASCADE');

        // $this->forge->createTable('terima_barang', true);
    }

	public function down()
	{
		// // drop constraints first to prevent errors
        // if ($this->db->DBDriver != 'SQLite3')
        // {
        //     $this->forge->dropForeignKey('terima_barang', 'terima_barang_supplier_id_foreign');
            
        // }
		// $this->forge->dropTable('supplier', true);
        // $this->forge->dropTable('terima_barang', true);
    }
}
