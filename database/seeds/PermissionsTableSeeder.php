<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'id' => 1,
                'name' => 'Manage Users',
                'slug' => 'manage.users',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ], [
                'id' => 2,
                'name' => 'Manage Roles',
                'slug' => 'manage.roles',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ], [
                'id' => 3,
                'name' => 'Manage Permissions',
                'slug' => 'manage.permissions',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ], [
                'id' => 4,
                'name' => 'Manage informs',
                'slug' => 'manage.informs',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ], [
                'id' => 5,
                'name' => 'Manage dtinforms',
                'slug' => 'manage.dtinforms',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ], [
                'id' => 6,
                'name' => 'Manage teainforms',
                'slug' => 'manage.teainforms',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],[
                'id' => 7,
                'name' => 'Manage industryinforms',
                'slug' => 'manage.industryinforms',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ], [
                'id' => 8,
                'name' => 'Manage teacultures',
                'slug' => 'manage.teacultures',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ], [
                'id' => 9,
                'name' => 'Manage teaknowledges',
                'slug' => 'manage.teaknowledges',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ], [
                'id' => 10,
                'name' => 'Manage collectionteas',
                'slug' => 'manage.collectionteas',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],[
                'id' => 11,
                'name' => 'Manage announcements',
                'slug' => 'manage.announcements',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],[
                'id' => 12,
                'name' => 'Manage traderules',
                'slug' => 'manage.traderules',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
        ]);
    }
}
