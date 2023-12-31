<?php

$movies = [
    new Movie(
        'Ant-Man and the Wasp: Quantumania',
        'English',
        2023,
        "assets/img/antman.jpg",
        [
            new Genre('Azione', "'Film d'azione' si riferisce piuttosto a un genere hollywoodiano diffusosi negli ultimi vent'anni del 20° sec., e caratterizzato dal conflitto manicheo e violento tra un eroe positivo e atletico e diversi antagonisti, anch'essi atletici e spesso dotati di una considerevole forza tecnologica.", 1),
            new Genre('Fantascienza', 'Questo genere di film viene ambientato in un contesto legato a una visione più o meno lontana del futuro, come quello dei viaggi interstellari, quello del contatto con entità extraterrestri, quello dei conflitti nucleari o delle catastrofi climatiche globali.', 2),
            new Genre('Avventura', "Genere cinematografico destinato al divertimento e all'evasione, basato sul racconto di imprese rischiose e piene di imprevisti, inserite all'interno di viaggi in luoghi misteriosi e irti di pericoli.", 3),
        ],
    ),
    new Movie(
        'Super Mario Bros. - Il film',
        'English',
        2023,
        "assets/img/mario.jpg",
        [
            new Genre('Animazione', "Da un punto di vista tecnico il cinema di a. si differenzia da quello fotografico, o 'dal vero', per il fatto che l'effetto del movimento è ottenuto attraverso il proiettore e non la macchina da presa.", 4),
            new Genre('Commedia', "Un film commedia è un genere di film che pone l'accento sull'umorismo. I film di questo genere solitamente hanno un lieto fine. Il genere non va scambiato col film comico, nel quale lo scopo principale è quello di far ridere il pubblico.", 5),
            new Genre('Avventura', "Genere cinematografico destinato al divertimento e all'evasione, basato sul racconto di imprese rischiose e piene di imprevisti, inserite all'interno di viaggi in luoghi misteriosi e irti di pericoli.", 3),
        ],
    ),
    new Movie(
        "C'era una volta a... Hollywood",
        'English',
        2019,
        "assets/img/hollywood.jpg",
        [
            new Genre('Commedia', "Un film commedia è un genere di film che pone l'accento sull'umorismo. I film di questo genere solitamente hanno un lieto fine. Il genere non va scambiato col film comico, nel quale lo scopo principale è quello di far ridere il pubblico.", 5),
            new Genre('Drammatico', "Un film drammatico è un genere di film che si basa sullo sviluppo dei personaggi, dell'interazione tra essi e che tratta temi di impatto emotivo.", 6),
        ],
    ),
    new Movie(
        "Il primo re",
        'Italiano',
        2019,
        "assets/img/king.jpg",
        [
            new Genre('Storico', "Un film storico è un film in costume che tratta vicende reali, veramente o almeno verosimilmente avvenute nel passato e comunque ambientate in un preciso contesto storico, ricostruito nei dettagli in modo da apparire credibile allo spettatore.", 7),
            new Genre('Drammatico', "Un film drammatico è un genere di film che si basa sullo sviluppo dei personaggi, dell'interazione tra essi e che tratta temi di impatto emotivo.", 6),
        ],
    ),
];
