<?php

use Illuminate\Database\Seeder;

class usuarios_seed extends Seeder
{
    /**
     * Run the database seeds.
     * Hash::make($request->password);
     * @return void
     */
    public function run()
    {
        
        for($i = 1; $i <= 100; $i++){
            $pass = "pass" . $i;
            $secure = password_hash($pass, PASSWORD_BCRYPT);
            DB::table('users')
                ->insert(array(
                'name' => "Usuario " . $i,
                'email' => "email" . $i . "@email.com",
                'password' => $secure,
                'created_at' => date("Y-m-d H:i:s")    
            ));
        }
        
        $this->command->info('Se cargaron 100 registros en la tabla "users"');
    }
}
