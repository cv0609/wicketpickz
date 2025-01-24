<?php
namespace Database\Seeders;

// database/seeders/PlayersTableSeeder.php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PlayersTableSeeder extends Seeder
{
    public function run()
    {
        // Path to the JSON file
        $path = storage_path('app/players.json');

        // Read and decode JSON data
        $json = File::get($path);
        $data = json_decode($json, true);

        // Insert the data into the database
        foreach ($data['data'] as $player) {
            DB::table('players')->insert([
                'id' => $player['id'],
                'name' => $player['name'],
                'country' => $player['country'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $this->command->info('Players data inserted successfully!');
    }
}
