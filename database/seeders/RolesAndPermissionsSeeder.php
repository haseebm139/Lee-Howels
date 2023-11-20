<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create( [
         'name'=>'user-list',
         'guard_name'=>'web',
         'display_name'=>'List',
         'type'=>'User',
         'created_at'=>'2020-07-09 08:22:42',
         'updated_at'=>'2020-07-09 08:22:42'
         ] );

         Permission::create( [
         'name'=>'user-create',
         'guard_name'=>'web',
         'display_name'=>'Create',
         'type'=>'User',
         'created_at'=>'2020-07-09 08:22:42',
         'updated_at'=>'2020-07-09 08:22:42'
         ] );

         Permission::create( [
         'name'=>'user-edit',
         'guard_name'=>'web',
         'display_name'=>'Edit',
         'type'=>'User',
         'created_at'=>'2020-07-09 08:22:42',
         'updated_at'=>'2020-07-09 08:22:42'
         ] );

         Permission::create( [
         'name'=>'user-delete',
         'guard_name'=>'web',
         'display_name'=>'Delete',
         'type'=>'User',
         'created_at'=>'2020-07-09 08:22:42',
         'updated_at'=>'2020-07-09 08:22:42'
         ] );


         Permission::create( [
         'name'=>'role-list',
         'guard_name'=>'web',
         'display_name'=>'List',
         'type'=>'Role',
         'created_at'=>'2020-07-09 08:22:42',
         'updated_at'=>'2020-07-09 08:22:42'
         ] );

         Permission::create( [
         'name'=>'role-create',
         'guard_name'=>'web',
         'display_name'=>'Create',
         'type'=>'Role',
         'created_at'=>'2020-07-09 08:22:42',
         'updated_at'=>'2020-07-09 08:22:42'
          ] );
         Permission::create( [
         'name'=>'role-edit',
         'guard_name'=>'web',
         'display_name'=>'Edit',
         'type'=>'Role',
         'created_at'=>'2020-07-09 08:22:42',
         'updated_at'=>'2020-07-09 08:22:42'
         ] );
         Permission::create( [
         'name'=>'role-delete',
         'guard_name'=>'web',
         'display_name'=>'Delete',
         'type'=>'Role',
         'created_at'=>'2020-07-09 08:22:42',
         'updated_at'=>'2020-07-09 08:22:42'
         ] );

        $permissions = [
            [
                'id' => 9,
                'name' => 'product-list',
                'guard_name' => 'web',
                'display_name' => 'List',
                'type' => 'Product',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 10,
                'name' => 'product-create',
                'guard_name' => 'web',
                'display_name' => 'Create',
                'type' => 'Product',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 11,
                'name' => 'product-edit',
                'guard_name' => 'web',
                'display_name' => 'Edit',
                'type' => 'Product',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 12,
                'name' => 'product-delete',
                'guard_name' => 'web',
                'display_name' => 'Delete',
                'type' => 'Product',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 13,
                'name' => 'meal-list',
                'guard_name' => 'web',
                'display_name' => 'List',
                'type' => 'Meal Category',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 14,
                'name' => 'meal-create',
                'guard_name' => 'web',
                'display_name' => 'Create',
                'type' => 'Meal Category',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 15,
                'name' => 'meal-edit',
                'guard_name' => 'web',
                'display_name' => 'Edit',
                'type' => 'Meal Category',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 16,
                'name' => 'meal-delete',
                'guard_name' => 'web',
                'display_name' => 'Delete',
                'type' => 'Meal Category',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 17,
                'name' => 'stock-list',
                'guard_name' => 'web',
                'display_name' => 'List',
                'type' => 'Stock',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 18,
                'name' => 'stock-create',
                'guard_name' => 'web',
                'display_name' => 'Create',
                'type' => 'Stock',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 19,
                'name' => 'stock-edit',
                'guard_name' => 'web',
                'display_name' => 'Edit',
                'type' => 'Stock',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 20,
                'name' => 'stock-delete',
                'guard_name' => 'web',
                'display_name' => 'Delete',
                'type' => 'Stock',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 21,
                'name' => 'order-list',
                'guard_name' => 'web',
                'display_name' => 'List',
                'type' => 'Order',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 22,
                'name' => 'order-show',
                'guard_name' => 'web',
                'display_name' => 'Show',
                'type' => 'Order',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 23,
                'name' => 'staff-list',
                'guard_name' => 'web',
                'display_name' => 'List',
                'type' => 'Staff',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 24,
                'name' => 'staff-create',
                'guard_name' => 'web',
                'display_name' => 'Create',
                'type' => 'Staff',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 25,
                'name' => 'staff-edit',
                'guard_name' => 'web',
                'display_name' => 'Edit',
                'type' => 'Staff',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 26,
                'name' => 'staff-delete',
                'guard_name' => 'web',
                'display_name' => 'Delete',
                'type' => 'Staff',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 27,
                'name' => 'location-address-list',
                'guard_name' => 'web',
                'display_name' => 'List',
                'type' => 'Location Address',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 28,
                'name' => 'location-address-create',
                'guard_name' => 'web',
                'display_name' => 'Create',
                'type' => 'Location Address',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 29,
                'name' => 'location-address-edit',
                'guard_name' => 'web',
                'display_name' => 'Edit',
                'type' => 'Location Address',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 30,
                'name' => 'location-address-delete',
                'guard_name' => 'web',
                'display_name' => 'Delete',
                'type' => 'Location Address',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 31,
                'name' => 'user-show',
                'guard_name' => 'web',
                'display_name' => 'Show',
                'type' => 'User',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 32,
                'name' => 'bespoke-meal-list',
                'guard_name' => 'web',
                'display_name' => 'List',
                'type' => 'Bespoken Meal',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 33,
                'name' => 'bespoke-meal-create',
                'guard_name' => 'web',
                'display_name' => 'Create',
                'type' => 'Bespoken Meal',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 34,
                'name' => 'bespoke-meal-edit',
                'guard_name' => 'web',
                'display_name' => 'Edit',
                'type' => 'Bespoken Meal',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 35,
                'name' => 'bespoke-meal-delete',
                'guard_name' => 'web',
                'display_name' => 'Delete',
                'type' => 'Bespoken Meal',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            [
                'id' => 36,
                'name' => 'bespoke-meal-show',
                'guard_name' => 'web',
                'display_name' => 'Show',
                'type' => 'Bespoken Meal',
                'status' => 1,
                'created_at' => '2020-07-09 03:22:42',
                'updated_at' => '2020-07-09 03:22:42',
            ],
            
        ];
        foreach ($permissions as $permissionData) {
            Permission::create($permissionData);
        }


         $role = Role::create(['name' => 'admin', 'slug' => 'admin','display_name' =>'Admin']);
         $role->givePermissionTo(Permission::all());
         $role1 = Role::create(['name' => 'user', 'slug' => 'user','display_name' =>'User']);
         $role2 = Role::create(['name' => 'front-counter-admin', 'slug' => 'front-counter-admin','display_name' =>'Front Counter Admin']);
         $role3 = Role::create(['name' => 'kitchen-admin', 'slug' => 'kitchen-admin','display_name' =>'Kitchen Admin']);
         $role4 = Role::create(['name' => 'delivery-admin', 'slug' => 'delivery-admin','display_name' =>'Delivery Admin']);
         $role5 = Role::create(['name' => 'staff', 'slug' => 'staff','display_name' =>'Staff']);


         $user = \App\Models\User::create([
            'name' => 'Admin',
             'email' => 'admin@gmail.com',
             'email_verified_at' => '2019-11-30 18:24:06',
             'password' => bcrypt('12345'),

             'remember_token' => NULL,
             'status' => 1,
             'type' => 'admin',
             'role_id'=>$role->name,
             'created_at' => NULL,
             'updated_at' => '2019-11-30 18:24:06',
         ]);

         $user->assignRole($role->name);

         $user = \App\Models\User::create([
            'name' => 'User',
             'email' => 'user@gmail.com',
             'email_verified_at' => '2019-11-30 18:24:06',
             'password' => bcrypt('12345'),

             'remember_token' => NULL,
             'status' => 1,
             'type' => 'user',
             'role_id'=>$role1->name,
             'created_at' => NULL,
             'updated_at' => '2019-11-30 18:24:06',
         ]);
         $user->assignRole($role1->name);
         $user = \App\Models\User::create([
            'name' => 'User',
             'email' => 'user1@gmail.com',
             'email_verified_at' => '2019-11-30 18:24:06',
             'password' => bcrypt('12345'),

             'remember_token' => NULL,
             'status' => 1,
             'type' => 'user',
             'role_id'=>$role1->name,
             'created_at' => NULL,
             'updated_at' => '2019-11-30 18:24:06',
         ]);
         $user->assignRole($role1->name);
         $user = \App\Models\User::create([
            'name' => 'User',
             'email' => 'user2@gmail.com',
             'email_verified_at' => '2019-11-30 18:24:06',
             'password' => bcrypt('12345'),

             'remember_token' => NULL,
             'status' => 1,
             'type' => 'user',
             'role_id'=>$role1->name,
             'created_at' => NULL,
             'updated_at' => '2019-11-30 18:24:06',
         ]);
         $user->assignRole($role1->name);

         $user = \App\Models\User::create([
            'name' => 'Front Counter Admin',
             'email' => 'frontcounteradmin@gmail.com',
             'email_verified_at' => '2019-11-30 18:24:06',
             'password' => bcrypt('12345'),

             'remember_token' => NULL,
             'status' => 1,
             'type' => $role2->name,
             'role_id'=>$role2->name,
             'created_at' => NULL,
             'updated_at' => '2019-11-30 18:24:06',
         ]);
         $user->assignRole($role2->name);
         $user = \App\Models\User::create([
            'name' => 'Kitchen Admin',
             'email' => 'kitchen@gmail.com',
             'email_verified_at' => '2019-11-30 18:24:06',
             'password' => bcrypt('12345'),

             'remember_token' => NULL,
             'status' => 1,
             'type' => $role3->name,
             'role_id'=>$role3->name,
             'created_at' => NULL,
             'updated_at' => '2019-11-30 18:24:06',
         ]);
         $user->assignRole($role3->name);
         $user = \App\Models\User::create([
            'name' => 'Delivery Admin',
             'email' => 'delivery@gmail.com',
             'email_verified_at' => '2019-11-30 18:24:06',
             'password' => bcrypt('12345'),

             'remember_token' => NULL,
             'status' => 1,
             'type' => $role4->name,
             'role_id'=>$role4->name,
             'created_at' => NULL,
             'updated_at' => '2019-11-30 18:24:06',
         ]);
         $user->assignRole($role4->name);
         $user = \App\Models\User::create([
            'name' => 'Staff',
             'email' => 'staff@gmail.com',
             'email_verified_at' => '2019-11-30 18:24:06',
             'password' => bcrypt('12345'),

             'remember_token' => NULL,
             'status' => 1,
             'type' => $role5->name,
             'role_id'=>$role5->name,
             'created_at' => NULL,
             'updated_at' => '2019-11-30 18:24:06',
         ]);
         $user->assignRole($role5->name);


    }
}

/* Place This Into SQL Quert */
/*
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `display_name`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'user-list', 'web', 'List', 'User', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(2, 'user-create', 'web', 'Create', 'User', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(3, 'user-edit', 'web', 'Edit', 'User', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(4, 'user-delete', 'web', 'Delete', 'User', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(5, 'role-list', 'web', 'List', 'Role', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(6, 'role-create', 'web', 'Create', 'Role', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(7, 'role-edit', 'web', 'Edit', 'Role', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(8, 'role-delete', 'web', 'Delete', 'Role', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(9, 'product-list', 'web', 'List', 'Product', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(10, 'product-create', 'web', 'Create', 'Product', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(11, 'product-edit', 'web', 'Edit', 'Product', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(12, 'product-delete', 'web', 'Delete', 'Product', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(13, 'meal-list', 'web', 'List', 'Meal Category', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(14, 'meal-create', 'web', 'Create', 'Meal Category', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(15, 'meal-edit', 'web', 'Edit', 'Meal Category', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(16, 'meal-delete', 'web', 'Delete', 'Meal Category', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(17, 'stock-list', 'web', 'List', 'Stock', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(18, 'stock-create', 'web', 'Create', 'Stock', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(19, 'stock-edit', 'web', 'Edit', 'Stock', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(20, 'stock-delete', 'web', 'Delete', 'Stock', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(21, 'order-list', 'web', 'List', 'Order', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(22, 'order-show', 'web', 'Show', 'Order', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(23, 'staff-list', 'web', 'List', 'Staff', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(24, 'staff-create', 'web', 'Create', 'Staff', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(25, 'staff-edit', 'web', 'Edit', 'Staff', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(26, 'staff-delete', 'web', 'Delete', 'Staff', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(27, 'location-address-list', 'web', 'List', 'Location Address', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(28, 'location-address-create', 'web', 'Create', 'Location Address', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(29, 'location-address-edit', 'web', 'Edit', 'Location Address', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(30, 'location-address-delete', 'web', 'Delete', 'Location Address', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42'),
(31, 'user-show', 'web', 'Show', 'User', 1, '2020-07-09 03:22:42', '2020-07-09 03:22:42');
 */
