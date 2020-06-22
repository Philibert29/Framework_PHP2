<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $skills = App\competence::all();
        factory(App\User::class, 50)->create()->each(function($u) use ($skills) {
            $skillSet = $skills->random((rand(1,4)));
            foreach($skillset as $skill ) {
                 $u->skills()->attachi($skill->id, ['level' => rand(1,5)]);
          }
    }};
}
