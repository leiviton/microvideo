<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create(
            [
                
                'name' => 'Leiviton Carlos',
                'email' => 'leivitoncs@gmail.com',
                'password' => bcrypt(123456),
                'remember_token' => md5(10),
            ]);

        factory(User::class)->create(
            [
                
                'name' => 'Caio Lavos',
                'email' => 'caio.moraes@drsgroup.com.br',
                'password' => bcrypt(123456),
                'remember_token' => md5(10),
            ]);

        factory(User::class)->create(
            [
                
                'name' => 'Allan Santos',
                'email' => 'allan.santos@drsgroup.com.br',
                'password' => bcrypt(123456),
                'remember_token' => md5(10),
            ]);

        factory(User::class)->create(
            [
                
                'name' => 'Raquel Mota',
                'email' => 'raquel.mota@drsgroup.com.br',
                'password' => bcrypt(123456),
                'remember_token' => md5(10),
            ]);

        factory(User::class)->create(
            [
                
                'name' => 'Lucas Rilko',
                'email' => 'lucas.rolko@drsgroup.com.br',
                'password' => bcrypt(123456),
                'remember_token' => md5(10),
            ]);

        factory(User::class)->create(
            [
                
                'name' => 'Atendente 2',
                'email' => 'atendente1@drsgroup.com.br',
                'password' => bcrypt(123456),
                'remember_token' => md5(10),
            ]);

        factory(User::class)->create(
            [
                
                'name' => 'Atendente 2',
                'email' => 'atendente2@drsgroup.com.br',
                'password' => bcrypt(123456),
                'remember_token' => md5(10),
            ]);

        factory(User::class)->create(
            [
                'name' => 'Atendente 3',
                'email' => 'atendente3@drsgroup.com.br',
                'password' => bcrypt(123456),
                'remember_token' => md5(10),
            ]);

        factory(User::class,50)->create();
    }
}
