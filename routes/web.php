<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// allo / verrà mostrata l'home page
Route::get('/', function () {

    // array di articoli
    $data = [
        [
            "id" => 1, 
            "title" => "Le orme fossili di giganteschi rettili preistorici scoperte sulle Alpi",
            "excerpt" => "Sulle montagne del Cuneese sono state rinvenute orme fossili di rettili giganteschi, simili a coccodrilli, vissuti circa 250 milioni di anni fa.",
            "publishedAt" => "26 gennaio 2021",
            "author" => "Gabriele Ferrari",
            "category" => "Ambiente"
        ],
        [
            "id" => 2, 
            "title" => "Scoperto un nuovo dinosauro da record?",
            "excerpt" => "In Argentina sono venute alla luce le vertebre di quello che potrebbe essere un dinosauro di una nuova specie. È il più grande animale terrestre mai trovato?",
            "publishedAt" => "23 gennaio 2021",
            "author" => "Luigi Bignami",
            "category" => "Ambiente"
        ],
        [
            "id" => 3, 
            "title" => "Forse gli inventori della musica non siamo noi umani",
            "excerpt" => "Nella discussione sulle origini della musica, una nuova ipotesi => l'invenzione si deve forse ai primati ed è legata all'abilità di saltare tra gli alberi.",
            "publishedAt" => "25 gennaio 2021",
            "author" => "Gabriele Ferrari",
            "category" => "Ambiente"
        ],
        [
            "id" => 4, 
            "title" => "Gli uccelli sbattono le palpebre quando volano?",
            "excerpt" => "Con un casco dotato di telecamere posizionato sulla testa del gracchio messicano si è scoperto quando, e quanto, gli uccelli sbattono le palpebre durante il volo.",
            "publishedAt" => "24 gennaio 2021",
            "author" => "Gabriele Ferrari",
            "category" => "Ambiente"
        ],
        [
            "id" => 5, 
            "title" => "Gli effetti positivi del lockdown sull'inquinamento? Sovrastimati!",
            "excerpt" => "Non è vero che il lockdown incide positivamente sull'inquinamento. O almeno non quanto ci eravamo illusi. Uno studio ricorda che ridurre lo smog è complicato.",
            "publishedAt" => "25 gennaio 2021",
            "author" => "Elisabetta Intini",
            "category" => "Ambiente"
        ],
        [
            "id" => 6, 
            "title" => "La brina nel Sahara per la quarta volta in 42 anni!",
            "excerpt" => "Un fotografo locale ha immortalato il fenomeno della brina nel Sahara => un evento rarissimo, che trasforma il deserto africano in un paesaggio marziano.",
            "publishedAt" => "25 gennaio 2021",
            "author" => "Roberto Graziosi",
            "category" => "Ambiente"
        ],
        [
            "id" => 7, 
            "title" => "I soldi facilitano il distanziamento sociale",
            "excerpt" => "La pandemia amplifica le disuguaglianze anche quando si tratta di prevenzione => per troppe persone mascherine e distanziamento rimangono un lusso.",
            "publishedAt" => "24 gennaio 2021",
            "author" => "Elisabetta Intini",
            "category" => "Scienza"
        ],
        [
            "id" => 8, 
            "title" => "Se ti alleni al freddo dimagrisci di più?",
            "excerpt" => "Allenarsi al freddo potrebbe aiutere a perdere peso, perché il nostro corpo brucia più calorie per mantenere costante la temperatura.",
            "publishedAt" => "21 gennaio 2021",
            "author" => "Rebecca Mantovani",
            "category" => "Scienza"
        ],
        [
            "id" => 9, 
            "title" => "Il mistero del buco nero mancante",
            "excerpt" => "Lo strano caso di Abell 2261 => una gigantesca galassia ellittica che non ha, al suo centro, il buco nero supermassiccio che ci aspetterebbe di trovare.",
            "publishedAt" => "20 gennaio 2021",
            "author" => "Gianluca Ranzini",
            "category" => "Scienza"
        ],
        [
            "id" => 10, 
            "title" => "Kilauea, il vulcano più attivo del mondo",
            "excerpt" => "Dopo due anni di quiete il Kilauea torna a farsi minaccioso => vivere alle Hawaii ha il suo prezzo, come ben sanno gli abitanti della Big Island.",
            "publishedAt" => "21 gennaio 2021",
            "author" => "Federico Pasquaré Mariotto",
            "category" => "Scienza"
        ],
        [
            "id" => 11, 
            "title" => "Come ridurre il rischio di contagio da covid in auto?",
            "excerpt" => "Spostarsi in auto in epoca covid => quali posti è meglio occupare, e quanti finestrini aprire, per limitare la trasmissione virale. Ecco le risposte.",
            "publishedAt" => "23 gennaio 2021",
            "author" => "Elisabetta Intini",
            "category" => "Scienza"

        ],
        [
            "id" => 12, 
            "title" => "Anticorpi monoclonali => uno scudo temporaneo anti-covid",
            "excerpt" => "In attesa del vaccino, i farmaci a base di anticorpi monoclonali sembrano proteggere i pazienti ad alto rischio contagio dalle infezioni da covid.",
            "publishedAt" => "27 gennaio 2021",
            "author" => "Elisabetta Intini",
            "category" => "Scienza"
        ]
    ];

    $articoli_scienze = [];
    $articoli_ambiente = [];

    // separo gli articoli x categoria
    foreach($data as $articolo) {
        if($articolo['category'] == 'Scienza') {
            $articoli_scienze[] = $articolo;
        } elseif ($articolo['category'] == 'Ambiente'){ // elseif così se ci sono nuovi articoli il codice funziona
            $articoli_ambiente[] = $articolo;
        }
    }

    return view('homepage', compact('articoli_scienze', 'articoli_ambiente')); // passo gli articoli divisi per categoria
})->name('homepage');

// allo /chi-siamo mostrare l'about
Route::get('/chi-siamo', function ($id) {

    //dd($id); // id passato dall'url della pagina
    return view('chi-siamo');

})->name('chi-siamo'); // dichiaro nome rotta

// allo /chi-siamo mostrare l'about
Route::get('/single-article/{idArticle}', function ($idArticle) {

    $data = [
        [
            "id" => 1, 
            "title" => "Le orme fossili di giganteschi rettili preistorici scoperte sulle Alpi",
            "excerpt" => "Sulle montagne del Cuneese sono state rinvenute orme fossili di rettili giganteschi, simili a coccodrilli, vissuti circa 250 milioni di anni fa.",
            "publishedAt" => "26 gennaio 2021",
            "author" => "Gabriele Ferrari",
            "category" => "Ambiente"
        ],
        [
            "id" => 2, 
            "title" => "Scoperto un nuovo dinosauro da record?",
            "excerpt" => "In Argentina sono venute alla luce le vertebre di quello che potrebbe essere un dinosauro di una nuova specie. È il più grande animale terrestre mai trovato?",
            "publishedAt" => "23 gennaio 2021",
            "author" => "Luigi Bignami",
            "category" => "Ambiente"
        ],
        [
            "id" => 3, 
            "title" => "Forse gli inventori della musica non siamo noi umani",
            "excerpt" => "Nella discussione sulle origini della musica, una nuova ipotesi => l'invenzione si deve forse ai primati ed è legata all'abilità di saltare tra gli alberi.",
            "publishedAt" => "25 gennaio 2021",
            "author" => "Gabriele Ferrari",
            "category" => "Ambiente"
        ],
        [
            "id" => 4, 
            "title" => "Gli uccelli sbattono le palpebre quando volano?",
            "excerpt" => "Con un casco dotato di telecamere posizionato sulla testa del gracchio messicano si è scoperto quando, e quanto, gli uccelli sbattono le palpebre durante il volo.",
            "publishedAt" => "24 gennaio 2021",
            "author" => "Gabriele Ferrari",
            "category" => "Ambiente"
        ],
        [
            "id" => 5, 
            "title" => "Gli effetti positivi del lockdown sull'inquinamento? Sovrastimati!",
            "excerpt" => "Non è vero che il lockdown incide positivamente sull'inquinamento. O almeno non quanto ci eravamo illusi. Uno studio ricorda che ridurre lo smog è complicato.",
            "publishedAt" => "25 gennaio 2021",
            "author" => "Elisabetta Intini",
            "category" => "Ambiente"
        ],
        [
            "id" => 6, 
            "title" => "La brina nel Sahara per la quarta volta in 42 anni!",
            "excerpt" => "Un fotografo locale ha immortalato il fenomeno della brina nel Sahara => un evento rarissimo, che trasforma il deserto africano in un paesaggio marziano.",
            "publishedAt" => "25 gennaio 2021",
            "author" => "Roberto Graziosi",
            "category" => "Ambiente"
        ],
        [
            "id" => 7, 
            "title" => "I soldi facilitano il distanziamento sociale",
            "excerpt" => "La pandemia amplifica le disuguaglianze anche quando si tratta di prevenzione => per troppe persone mascherine e distanziamento rimangono un lusso.",
            "publishedAt" => "24 gennaio 2021",
            "author" => "Elisabetta Intini",
            "category" => "Scienza"
        ],
        [
            "id" => 8, 
            "title" => "Se ti alleni al freddo dimagrisci di più?",
            "excerpt" => "Allenarsi al freddo potrebbe aiutere a perdere peso, perché il nostro corpo brucia più calorie per mantenere costante la temperatura.",
            "publishedAt" => "21 gennaio 2021",
            "author" => "Rebecca Mantovani",
            "category" => "Scienza"
        ],
        [
            "id" => 9, 
            "title" => "Il mistero del buco nero mancante",
            "excerpt" => "Lo strano caso di Abell 2261 => una gigantesca galassia ellittica che non ha, al suo centro, il buco nero supermassiccio che ci aspetterebbe di trovare.",
            "publishedAt" => "20 gennaio 2021",
            "author" => "Gianluca Ranzini",
            "category" => "Scienza"
        ],
        [
            "id" => 10, 
            "title" => "Kilauea, il vulcano più attivo del mondo",
            "excerpt" => "Dopo due anni di quiete il Kilauea torna a farsi minaccioso => vivere alle Hawaii ha il suo prezzo, come ben sanno gli abitanti della Big Island.",
            "publishedAt" => "21 gennaio 2021",
            "author" => "Federico Pasquaré Mariotto",
            "category" => "Scienza"
        ],
        [
            "id" => 11, 
            "title" => "Come ridurre il rischio di contagio da covid in auto?",
            "excerpt" => "Spostarsi in auto in epoca covid => quali posti è meglio occupare, e quanti finestrini aprire, per limitare la trasmissione virale. Ecco le risposte.",
            "publishedAt" => "23 gennaio 2021",
            "author" => "Elisabetta Intini",
            "category" => "Scienza"

        ],
        [
            "id" => 12, 
            "title" => "Anticorpi monoclonali => uno scudo temporaneo anti-covid",
            "excerpt" => "In attesa del vaccino, i farmaci a base di anticorpi monoclonali sembrano proteggere i pazienti ad alto rischio contagio dalle infezioni da covid.",
            "publishedAt" => "27 gennaio 2021",
            "author" => "Elisabetta Intini",
            "category" => "Scienza"
        ]
    ];

    // cerco l'articolo nell'array data con id $idArticle
    $articolo = $data[$idArticle-1];

    // passo l'articolo alla view
    return view('single-article', compact('articolo'));

})->name('single-article'); // dichiaro nome rotta
