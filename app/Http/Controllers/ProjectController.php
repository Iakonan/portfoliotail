<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($project)
    {
        $progetti = [
            'livingwoodfb' => [
                'title' => 'LivingwoodFB',
                'description' => "LivingWoodFB è un e-commerce dedicato alla vendita di fingerboard fatti a mano, progettato con un'interfaccia utente intuitiva e dinamiche standard per il commercio online. Il sito offre un catalogo di prodotti che include deck da fingerboard, magliette e accessori, e fornisce la possibilità di ordinare tavole personalizzate tramite un form dedicato. Tra le funzionalità principali, LivingWoodFB supporta la navigazione multilingue (inglese, spagnolo e italiano) per un pubblico internazionale. Il processo di check-out è ottimizzato per garantire un'esperienza di acquisto semplice e sicura, con gestione della spedizione e fatturazione automatica, inviata direttamente all'amministratore del sito. Il sito include anche una sezione &quot;About Us&quot;, che racconta la storia e la mission del brand, aiutando i clienti a connettersi con l'artigianalità dei prodotti.",
                'image' => 'images/logotrasp.png',
                'link' => '/livingwoodfb'
            ],
            'prestoit' => [
                'title' => 'Presto.IT',
                'description' => 'Descrizione di Presto.IT...',
                'image' => 'images/logopresto.png',
                'link' => '/prestoit'
            ],
            'questboard' => [
                'title' => 'Questboard',
                'description' => 'Descrizione di Questboard...',
                'image' => 'images/QuestBoard.png',
                'link' => '/questboard'
            ],
        ];

        if (array_key_exists($project, $progetti)) {
            return view('project', ['project' => $progetti[$project]]);
        } else {
            abort(404);
        }
    }
}
