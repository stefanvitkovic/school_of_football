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
        DB::table('users')->insert([
            'name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$Bu/mN17QrsoFaItBI9GTtOIg7bl4TJPMHRn3e5tExBLcM6NBHGSEO',
            "remember_token" => 'NULL',
            'created_at' => '2017-01-05 13:24:14',
            'updated_at' => '2017-01-05 13:24:14',
            'bio' => 'Coach',
            'date' => '1991-07-22',
            'height' => '180',
            'weight' => '75',
            'image' => 'default',
        ]);

        DB::table('categories')->insert([
        	[
        	'name' => 'First team',
        	'starting_age' => '1980',
        	'ending_age' => '2019',
        	'created_at' => '2017-01-05 13:24:14',
        	'updated_at' => '2017-01-05 13:24:14',
        	],
        	[
        	'name' => 'U23',
        	'starting_age' => '1998',
        	'ending_age' => '2019',
        	'created_at' => '2017-01-05 13:24:14',
        	'updated_at' => '2017-01-05 13:24:14',
        	],
        	[
        	'name' => 'U19',
        	'starting_age' => '2000',
        	'ending_age' => '2019',
        	'created_at' => '2017-01-05 13:24:14',
        	'updated_at' => '2017-01-05 13:24:14',
        	],
        	[
        	'name' => 'Youth',
        	'starting_age' => '2014',
        	'ending_age' => '2019',
        	'created_at' => '2017-01-05 13:24:14',
        	'updated_at' => '2017-01-05 13:24:14',
        	]
        ]);

        DB::table('positions')->insert([
            [
            'position_name' => 'Goalkeeper',
            'position_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis cursus lectus. Integer ut ultricies mauris. Nam cursus ante at nisl consequat, id suscipit arcu pellentesque. Morbi sed ante risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ultrices egestas massa, vitae facilisis dolor varius id. Etiam pharetra leo ut aliquam laoreet. Fusce gravida turpis vel enim pharetra, vitae sodales nunc tempor. Pellentesque ac ex fringilla sapien dictum consectetur. Aenean eu pellentesque risus. Donec at lacinia quam. Phasellus libero nulla, rutrum in cursus vel, viverra id urna. Maecenas tristique erat a venenatis bibendum. Pellentesque sed elementum lacus.',
            'ptv' => 'Alisson Becker',
            'created_at' => '2017-01-05 13:24:14',
            'updated_at' => '2017-01-05 13:24:14',
            ],
            [
            'position_name' => 'Central defender',
            'position_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis cursus lectus. Integer ut ultricies mauris. Nam cursus ante at nisl consequat, id suscipit arcu pellentesque. Morbi sed ante risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ultrices egestas massa, vitae facilisis dolor varius id. Etiam pharetra leo ut aliquam laoreet. Fusce gravida turpis vel enim pharetra, vitae sodales nunc tempor. Pellentesque ac ex fringilla sapien dictum consectetur. Aenean eu pellentesque risus. Donec at lacinia quam. Phasellus libero nulla, rutrum in cursus vel, viverra id urna. Maecenas tristique erat a venenatis bibendum. Pellentesque sed elementum lacus.',
            'ptv' => 'Virgil Van Dijk',
            'created_at' => '2017-01-05 13:24:14',
            'updated_at' => '2017-01-05 13:24:14',
            ],
            [
            'position_name' => 'Full back',
            'position_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis cursus lectus. Integer ut ultricies mauris. Nam cursus ante at nisl consequat, id suscipit arcu pellentesque. Morbi sed ante risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ultrices egestas massa, vitae facilisis dolor varius id. Etiam pharetra leo ut aliquam laoreet. Fusce gravida turpis vel enim pharetra, vitae sodales nunc tempor. Pellentesque ac ex fringilla sapien dictum consectetur. Aenean eu pellentesque risus. Donec at lacinia quam. Phasellus libero nulla, rutrum in cursus vel, viverra id urna. Maecenas tristique erat a venenatis bibendum. Pellentesque sed elementum lacus.',
            'ptv' => 'Andrew Robertson',
            'created_at' => '2017-01-05 13:24:14',
            'updated_at' => '2017-01-05 13:24:14',
            ],
            [
            'position_name' => 'Defensive midfielder',
            'position_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis cursus lectus. Integer ut ultricies mauris. Nam cursus ante at nisl consequat, id suscipit arcu pellentesque. Morbi sed ante risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ultrices egestas massa, vitae facilisis dolor varius id. Etiam pharetra leo ut aliquam laoreet. Fusce gravida turpis vel enim pharetra, vitae sodales nunc tempor. Pellentesque ac ex fringilla sapien dictum consectetur. Aenean eu pellentesque risus. Donec at lacinia quam. Phasellus libero nulla, rutrum in cursus vel, viverra id urna. Maecenas tristique erat a venenatis bibendum. Pellentesque sed elementum lacus.',
            'ptv' => 'Fabinho',
            'created_at' => '2017-01-05 13:24:14',
            'updated_at' => '2017-01-05 13:24:14',
            ],
            [
            'position_name' => 'Playmaker',
            'position_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis cursus lectus. Integer ut ultricies mauris. Nam cursus ante at nisl consequat, id suscipit arcu pellentesque. Morbi sed ante risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ultrices egestas massa, vitae facilisis dolor varius id. Etiam pharetra leo ut aliquam laoreet. Fusce gravida turpis vel enim pharetra, vitae sodales nunc tempor. Pellentesque ac ex fringilla sapien dictum consectetur. Aenean eu pellentesque risus. Donec at lacinia quam. Phasellus libero nulla, rutrum in cursus vel, viverra id urna. Maecenas tristique erat a venenatis bibendum. Pellentesque sed elementum lacus.',
            'ptv' => 'Naby Keita',
            'created_at' => '2017-01-05 13:24:14',
            'updated_at' => '2017-01-05 13:24:14',
            ],
            [
            'position_name' => 'Advance midfielder',
            'position_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis cursus lectus. Integer ut ultricies mauris. Nam cursus ante at nisl consequat, id suscipit arcu pellentesque. Morbi sed ante risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ultrices egestas massa, vitae facilisis dolor varius id. Etiam pharetra leo ut aliquam laoreet. Fusce gravida turpis vel enim pharetra, vitae sodales nunc tempor. Pellentesque ac ex fringilla sapien dictum consectetur. Aenean eu pellentesque risus. Donec at lacinia quam. Phasellus libero nulla, rutrum in cursus vel, viverra id urna. Maecenas tristique erat a venenatis bibendum. Pellentesque sed elementum lacus.',
            'ptv' => 'Sadio Mane',
            'created_at' => '2017-01-05 13:24:14',
            'updated_at' => '2017-01-05 13:24:14',
            ],
            [
            'position_name' => 'Winger',
            'position_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis cursus lectus. Integer ut ultricies mauris. Nam cursus ante at nisl consequat, id suscipit arcu pellentesque. Morbi sed ante risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ultrices egestas massa, vitae facilisis dolor varius id. Etiam pharetra leo ut aliquam laoreet. Fusce gravida turpis vel enim pharetra, vitae sodales nunc tempor. Pellentesque ac ex fringilla sapien dictum consectetur. Aenean eu pellentesque risus. Donec at lacinia quam. Phasellus libero nulla, rutrum in cursus vel, viverra id urna. Maecenas tristique erat a venenatis bibendum. Pellentesque sed elementum lacus.',
            'ptv' => 'Mohamed Salah',
            'created_at' => '2017-01-05 13:24:14',
            'updated_at' => '2017-01-05 13:24:14',
            ],
            [
            'position_name' => 'Forward',
            'position_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis cursus lectus. Integer ut ultricies mauris. Nam cursus ante at nisl consequat, id suscipit arcu pellentesque. Morbi sed ante risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ultrices egestas massa, vitae facilisis dolor varius id. Etiam pharetra leo ut aliquam laoreet. Fusce gravida turpis vel enim pharetra, vitae sodales nunc tempor. Pellentesque ac ex fringilla sapien dictum consectetur. Aenean eu pellentesque risus. Donec at lacinia quam. Phasellus libero nulla, rutrum in cursus vel, viverra id urna. Maecenas tristique erat a venenatis bibendum. Pellentesque sed elementum lacus.',
            'ptv' => 'Roberto Firmino',
            'created_at' => '2017-01-05 13:24:14',
            'updated_at' => '2017-01-05 13:24:14',
            ],
       ]);
    }
}
