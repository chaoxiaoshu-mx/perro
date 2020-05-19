<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create('zh_CN');
        $data = [
        	'username'		=> 'admin',
        	'password'		=>	bcrypt('zhlonglt12'),	// 使用框架内置bcrypt方法加密密码
        	'mobile'		=>	'18709581727',
        	'email'			=>	'leukotrichia@163.com',
        	'role_id'		=>	'1',	//角色id
        	'created_at'	=>	date('Y-m-d H:i:s', time()),
        	'status'		=>	'2'
        ];
        DB::table('admin_users')->insert($data);
    }
}
