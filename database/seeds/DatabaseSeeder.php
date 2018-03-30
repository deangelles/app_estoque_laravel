<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('Sabão', 12, 3.50, '2018-11-01'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('Sabonete', 10, 1.50, '2018-11-01'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('Feijao', 30, 8.50, '2018-11-01'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('Arroz', 10, 11.50, '2018-11-01'));
    }
}
