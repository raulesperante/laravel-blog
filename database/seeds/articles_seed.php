<?php

use Illuminate\Database\Seeder;

class articles_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     private $body = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Rem neque doloremque, tempora laboriosam hic animi. 
        Cumque, assumenda fugit optio quam provident vel?
        Sed aut voluptatum tempore quibusdam accusantium eius excepturi!";
    
     public function run()
    {
        for($i = 1; $i <= 20; $i++){

            DB::table('articles')
                ->insert(array(
                    'title' => "Article {$i}",
                    'body' => $this->body,
                    'created_at' => date("Y-m-d H:i:s"), 
                    'updated_at' => date("Y-m-d H:i:s"), 
                    'user_id' => random_int(1, 90)
                ));
        }
        $this->command->info('Se cargaron 20 registros en la tabla "articles"');
    }
}
