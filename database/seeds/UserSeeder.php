<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bar = $this->command->getOutput()->createProgressBar(12);
        $bar->setBarCharacter('<comment>=</comment>');
        $bar->setEmptyBarCharacter('-');
        $bar->setProgressCharacter('>');
        $bar->setFormat('verbose');
        $bar->start();

        factory(App\User::class, 12)->create();

        $bar->advance(12);
        $bar->finish();

        $this->command->line("");
    }
}
