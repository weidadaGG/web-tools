<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class seed_roles_and_permissions_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory(10)->create();

        $user = User::find(1);
        $user->name = 'weidada';
        $user->save();
        // 初始化用户角色，将 1 号用户指派为『站长』
        $user->assignRole('Admin');

        // 将 2 号用户指派为『管理员』
        $user = User::find(2);
        $user->assignRole('AdminTest');
    }
}
