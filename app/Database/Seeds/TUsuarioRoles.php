<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TUsuarioRoles extends Seeder
{
    public function run()
    {
        $data = [
            ['id_usuario' => 9, 'id_rol' => 1], // admin_user -> admin
            ['id_usuario' => 10, 'id_rol' => 2], // editor_user -> editor
            ['id_usuario' => 11, 'id_rol' => 3], // viewer_user -> viewer
        ];

        // Insertar datos en la tabla de relación
        $this->db->table('t_usuario_roles')->insertBatch($data);
    }
}
