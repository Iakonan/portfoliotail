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
                                contabile e garantire trasparenza e precisione. In aggiunta, la sezione &quot;About Us&quot; fornisce una 
                                connessione emotiva con i clienti, raccontando la storia del brand e trasmettendo i valori di autenticità 
                                e passione per il fingerboard.",
                'image1' => 'images/logotrasp.png',
                'image2' => 'images/decks.jpg',
                'image3' => 'images/trick.jpg',
            ],
            'prestoit' => [
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
                                contabile e garantire trasparenza e precisione. In aggiunta, la sezione &quot;About Us&quot; fornisce una 
                                connessione emotiva con i clienti, raccontando la storia del brand e trasmettendo i valori di autenticità 
                                e passione per il fingerboard.",
                'image1' => 'images/logopresto.png',
                'image2' => 'images/prestohome.png',
                'image3' => 'images/prestorev.png',
            ],
            'questboard' => [
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
                                contabile e garantire trasparenza e precisione. In aggiunta, la sezione &quot;About Us&quot; fornisce una 
                                connessione emotiva con i clienti, raccontando la storia del brand e trasmettendo i valori di autenticità 
                                e passione per il fingerboard.",
                'image1' => 'images/logotrasp.png',
                'image2' => 'images/decks.jpg',
                'image3' => 'images/trick.jpg',
            ],
        ];

        if (array_key_exists($project, $progetti)) {
            return view('project', ['project' => $progetti[$project]]);
        } else {
            abort(404);
        }
    }
}
