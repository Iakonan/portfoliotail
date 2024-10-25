<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($project)
    {
        $progetti = [
            'livingwoodfb' => [
                'title1' => 'Panoramica del sito e catalogo prodotti',
                'title2' => 'Navigazione multilingue e accesso globale',
                'title3' => 'Processo di check-out e gestione della spedizione',
                'description1' => "LivingWoodFB è un e-commerce interamente dedicato alla vendita di fingerboard fatti a mano, 
                                con un focus sull'artigianalità e la personalizzazione. Il sito è stato progettato per offrire 
                                un'interfaccia utente intuitiva, dove gli appassionati di fingerboard possono esplorare un 
                                catalogo di prodotti selezionati con cura. La gamma comprende deck da fingerboard realizzati 
                                artigianalmente, magliette con design esclusivi e accessori correlati. L'obiettivo principale 
                                è creare un'esperienza d'acquisto immersiva e su misura per un pubblico di nicchia che apprezza 
                                la qualità dei prodotti fatti a mano, nonché la possibilità di ordinare tavole personalizzate. 
                                Il form di richiesta di tavole personalizzate consente ai clienti di specificare dettagli unici, 
                                offrendo un grado di personalizzazione elevato che rende ogni acquisto speciale.",
                'description2' => "Una delle caratteristiche fondamentali di LivingWoodFB è la sua accessibilità a un pubblico 
                                internazionale grazie alla navigazione multilingue. Il sito è disponibile in tre lingue principali: 
                                inglese, spagnolo e italiano. Questo permette ai clienti di diverse regioni geografiche di interagire 
                                facilmente con il brand, abbattendo le barriere linguistiche e rendendo l'esperienza di acquisto più 
                                fluida e piacevole per chiunque. L'implementazione multilingue non solo amplia la portata del negozio 
                                online, ma dimostra l'impegno di LivingWoodFB nel creare una piattaforma inclusiva, in cui ogni cliente 
                                può sentirsi accolto, indipendentemente dalla propria lingua madre.",
                'description3' => "Il processo di check-out su LivingWoodFB è stato ottimizzato per garantire un'esperienza d'acquisto 
                                semplice, rapida e sicura. L'integrazione di un sistema di pagamento affidabile e sicuro permette ai 
                                clienti di completare gli ordini senza complicazioni, mentre la gestione automatizzata della spedizione 
                                assicura che i prodotti siano inviati tempestivamente. La fatturazione, generata automaticamente per 
                                ogni ordine, viene inviata direttamente all'amministratore del sito per semplificare la gestione 
                                contabile e garantire trasparenza e precisione. In aggiunta, la sezione About Us fornisce una 
                                connessione emotiva con i clienti, raccontando la storia del brand e trasmettendo i valori di autenticità 
                                e passione per il fingerboard.",
                'image1' => 'images/logotrasp.png',
                'image2' => 'images/decks.jpg',
                'image3' => 'images/trick.jpg',
                'icon' => '<i class="fa-solid fa-gear"></i>',
                'icontitle1' => 'Alpha',
            ],
            'prestoit' => [
                'title1' => 'Funzionalità utente e interfaccia di navigazione',
                'title2' => "Candidatura e accesso all'area revisori",
                'title3' => 'Supporto AI per moderazione e protezione dei contenuti',
                'description1' => "Presto.it è un portale di annunci online che consente agli utenti di registrarsi e accedere a 
                            un'esperienza personalizzata per navigare tra varie categorie di prodotti e servizi. Con un sistema di ricerca 
                            flessibile, gli utenti possono trovare gli annunci di loro interesse filtrando per categoria o utilizzando 
                            parole chiave. Il sito supporta inoltre la navigazione multilingue, rendendo Presto.it accessibile a 
                            un’ampia gamma di utenti di diversa provenienza. L'interfaccia, pensata per essere intuitiva, guida gli 
                            utenti passo passo attraverso la registrazione, il log in e la navigazione degli annunci.",
                'description2' => "Una funzionalità interessante di Presto.it è la possibilità per gli utenti di candidarsi come revisori. 
                            Attraverso una candidatura inviata tramite email all'amministratore, gli utenti possono richiedere di entrare a 
                            far parte del team di revisione. Una volta accettati, i revisori ottengono l’accesso a un'area riservata, in cui 
                            possono controllare e moderare gli annunci. La piattaforma offre un’interfaccia semplice per i revisori, con 
                            un form dedicato per la visualizzazione e l'approvazione degli annunci in attesa, garantendo così che il contenuto 
                            del sito sia sicuro e appropriato per tutti.",
                'description3' => "Presto.it implementa tecnologie di intelligenza artificiale avanzate per assistere i revisori nella 
                            moderazione degli annunci. L’AI analizza automaticamente le immagini, assegnando tag specifici e identificando 
                            eventuali contenuti inappropriati. In caso di foto con volti, il sistema applica automaticamente adesivi 
                            per offuscare le identità, assicurando che la privacy sia mantenuta e che le linee guida del sito siano rispettate. 
                            Questo sistema intelligente permette un controllo qualitativo e rapido, contribuendo alla sicurezza e affidabilità 
                            degli annunci pubblicati.",
                'image1' => 'images/logopresto.png',
                'image2' => 'images/prestohome.png',
                'image3' => 'images/prestorev.png',
                'icon' => '<i class="fa-solid fa-flag-checkered"></i>',

            ],
            'questboard' => [
                'title1' => "Un'app dedicata agli appassionati di giochi di ruolo",
                'title2' => 'Scheda del personaggio e azioni interattive',
                'title3' => 'Design ispirato ai classici del genere',
                'description1' => "QuestBoard sarà un’applicazione mobile creata per i fan dei giochi di ruolo come Dungeons & Dragons, 
                                pensata per riunire in un’unica piattaforma funzionalità essenziali per giocatori e master. L'app 
                                offrirà uno spazio dedicato dove gli utenti potranno interagire, personalizzare i personaggi e 
                                seguire l’evoluzione delle loro avventure.",
                'description2' => "Oltre a una chat per la gestione delle campagne, QuestBoard includerà una scheda personaggio completa 
                                e una selezione di azioni predefinite. L’obiettivo sarà rendere ogni sessione intuitiva e immersiva, 
                                permettendo ai giocatori di gestire il proprio personaggio e le sue abilità direttamente dall’app.",
                'description3' => "QuestBoard unirà un’estetica fantasy con una grafica in stile videogioco, semplice e coinvolgente, 
                                che richiamerà le atmosfere dei migliori giochi di ruolo. Ogni dettaglio sarà pensato per rendere 
                                l’esperienza intuitiva e unica, arricchendo le partite con un tocco visivo capace di trasportare 
                                l’utente in un mondo epico.",
                'image1' => 'images/questboard.png',
                'image2' => 'images/board.jpg',
                'image3' => 'images/table.jpg',
                'icon' => '<i class="fa-solid fa-brain"></i>',

            ],
        ];

        if (array_key_exists($project, $progetti)) {
            return view('project', ['project' => $progetti[$project]]);
        } else {
            abort(404);
        }
    }
}
