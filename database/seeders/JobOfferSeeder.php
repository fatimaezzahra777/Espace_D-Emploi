<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User ;
use App\Models\JobOffer ; 

class JobOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Récupérer le recruteur
        $recruteur = User::where('role', 'recreteur')->first();

        // Créer quelques offres
        JobOffer::create([
            'user_id' => $recruteur->id,
            'titre' => 'Développeur Laravel',
            'description' => 'Nous cherchons un développeur Laravel expérimenté.',
            'type_contrat' => 'CDI',
            'image' => 'job_offers/default.png',
            'is_closed' => false,
        ]);

        JobOffer::create([
            'user_id' => $recruteur->id,
            'titre' => 'Designer UI/UX',
            'description' => 'Designer pour améliorer nos applications web.',
            'type_contrat' => 'CDD',
            'image' => 'job_offers/default.png',
            'is_closed' => false,
        ]);
    }
}
