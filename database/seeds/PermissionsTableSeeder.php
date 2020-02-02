<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\PermissionCategory;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_by_categories = [
            'Users' => [
                'view-user',
                'create-user',
                'modify-user',
                'suspend-user'
            ],

            'Roles' => [
                'view-role',
                'create-role',
                'modify-role'
            ],

            'Companies' => [
                'view-company',
                'create-company',
                'modify-company',
                'suspend-company'
            ],

            'Customers' => [
                'view-customer',
                'create-customer',
                'modify-customer',
                'suspend-customer'
            ],

            'Settings' => [
                'view-setting',
                'database-backup'
            ]
        ];

        foreach ($permissions_by_categories as $key => $permissions) {
            $permission_category = PermissionCategory::create([
                'name' => $key
            ]);
            foreach ($permissions as $permission_name) {
                $permission = new Permission();
                $permission->name = $permission_name;
                $permission->permission_category_id = $permission_category->id;
                $permission->save();
            }
        }
    }
}
