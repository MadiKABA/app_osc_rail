<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartementsSenegalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departements = [
            'Dakar', 'Guédiawaye', 'Pikine', 'Rufisque', // Dakar
            'Bambey', 'Diourbel', 'Mbacké', // Diourbel
            'Fatick', 'Foundiougne', 'Gossas', // Fatick
            'Birkilane', 'Kaffrine', 'Koungheul', 'Malem Hodar', // Kaffrine
            'Guinguinéo', 'Kaolack', 'Nioro du Rip', // Kaolack
            'Kédougou', 'Salémata', 'Saraya', // Kédougou
            'Kolda', 'Médina Yoro Foulah', 'Vélingara', // Kolda
            'Kébémer', 'Linguère', 'Louga', // Louga
            'Kanel', 'Matam', 'Ranérou Ferlo', // Matam
            'Dagana', 'Podor', 'Saint-Louis', // Saint-Louis
            'Bounkiling', 'Goudomp', 'Sédhiou', // Sédhiou
            'Bakel', 'Goudiry', 'Tambacounda', 'Koumpentoum', // Tambacounda
            'Mbour', 'Thiès', 'Tivaouane', 
            'Bignona', 'Oussouye', 'Ziguinchor'
        ];

        foreach ($departements as $nom) {
            DB::table('departements')->insert([
                'libelle' => $nom
            ]);
        }
    }
}
