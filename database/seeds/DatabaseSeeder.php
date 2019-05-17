<?php

use Illuminate\Database\Seeder;
use App\Livro;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'employee',
        ]);

        DB::table('roles')->insert([
            'name' => 'adm',
        ]);

        DB::table('users')->insert([
            'name' => 'ADMIN',
            'role_id' => 2,
            'email' => 'admin@email.com',
            'password' => bcrypt('secret'),
        ]);

        for($i = 1; $i <= 12; $i++){
            $products[$i] = new Livro();
        }

        $products[1]->name = "Casa de Bonecas - Ibsen";
        $products[1]->image = "item-1.jpg";
        $products[1]->price = "12.99";

        $products[2]->name = "Madame Bovary - Flaubert";
        $products[2]->image = "item-2.jpg";
        $products[2]->price = "9.99";

        $products[3]->name = "Hamlet - Shakespeare";
        $products[3]->image = "item-3.jpg";
        $products[3]->price = "120.97";

        $products[4]->name = "A vida como ela é - Nelson Rodrigues";
        $products[4]->image = "item-4.jpg";
        $products[4]->price = "50.29";

        $products[5]->name = "O assassinato e outras histórias - Tchekhov";
        $products[5]->image = "item-5.jpg";
        $products[5]->price = "33.98";

        $products[6]->name = "Guerra e Paz - Tolstói";
        $products[6]->image = "item-6.jpg";
        $products[6]->price = "21.12";

        $products[7]->name = "A Náusea - Sartre";
        $products[7]->image = "item-7.jpg";
        $products[7]->price = "44.39";

        $products[8]->name = "O Pequeno Herói - Dostoievski";
        $products[8]->image = "item-8.jpg";
        $products[8]->price = "28.39";

        $products[9]->name = "O idiota - Dostoievski";
        $products[9]->image = "item-9.jpg";
        $products[9]->price = "97.69";

        $products[10]->name = "Oliver Twist - Charles Dickens";
        $products[10]->image = "item-10.jpg";
        $products[10]->price = "8.09";

        $products[11]->name = "Fortaleza Digital - Dan Brown";
        $products[11]->image = "item-11.jpg";
        $products[11]->price = "15.22";

        $products[12]->name = "O Universo numa Casca de Noz - Stephen Hawking";
        $products[12]->image = "item-12.jpg";
        $products[12]->price = "60.10";

        for($i = 1; $i <= 12; $i++){
            $products[$i]->save();
        }
    }
}
