<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
                'name' => 'Javascript',
                'description' => 'Langage de script Javascript',
                'logo' => 'js.png';
            ],
               [
                'name' => 'HTML5 - CSS3',
                'description' => 'langage HTML5 et CSS3 pour le développement web',
                'logo' => 'html-css.png';
               ]
               [
                'name' => 'php',
                'description' => 'Langage de script PHP',
                'logo'=> 'php.png';
               ]
                [
                 'name' => 'truc',
                 'description' => 'Langage de script  Javascript',
                 'logo' => 'truc.png';
                ]
}
