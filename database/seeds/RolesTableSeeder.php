<?php
use Illuminate\Database\Seeder;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            'name' => 'admin',
        ];
        $role = Role::create($role);
        // Associamos todas as permissões atuais ao papel:
        $role->givePermissionTo(Permission::pluck('name')->all());
    }
}
