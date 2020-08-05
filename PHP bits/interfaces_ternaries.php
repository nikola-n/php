<?php

//Go pravi API to pointeligentno i intuintivno

function deactivate($when = null)
{
$when = $when ?: Carbon::now();
}

//Ako sakame metodot da raboti odma stom ke go povikame so
//se koristi ovoj ternari operator, vo sprotivno nema
//da moze da se povika tuku ke se povika pri promena
//na podatocite vo baza

//$var ? 'this' : 'that';
//Go trga this i ja vrakja vrednosta vo var

//$user->deactivate(Carbon::now()->addWeeks(3));

function getStripeCustomer($id = null)
{
    $id = $id?: auth()->user()->stripe_id;
}
//
//Potrebno e id od customerot, za da se zeme, moze da se zeme
//preku auth, megjutoa ako stavime deka e null
//togas imame moznost da go zememe i na drug
//na pr.getStripeCustomer('mock-id');
//nacin kako so pomos na ternarniot operator sto e dole
////Ova znaci Ako ako mu dades ID sam ke go koristi toa,
//ako ne napravi go toa query i zemi go od baza id-to

//vo Laravel
//Ako sakas da spodelis user varijabla so site views
//i da go zemes auth userot, no sto ako toa vrati null

//I da dade nula, sakame objekt toj sto gi varkja site metodi
//koi sto moze da se povikuvaat preku userot.
//Zatoa se kreira nov user so ternaren operator
//view()->share('user',$this->user ?: new NullUser);

//Fitler koj gi filtrira request parametrite
//class Filter
//{
//    private $params;
//
//    public function __construct($params = null)
//    {
//        //Ili kje gi definirame parametrite
//        //ili ke gi zememe defoltnite od requestot
//        $params = $params ?: request()->all();
//    }
////}
//public function getFeaturedSeries($ids = null)
//{
//
//    //Ili kje mu gi deklarirras ili ke si gi zeme
//    //od config fajlot idnjata
//    $ids= $ids ?: config('laracasts.featured-series');
//    Series::findMany($ids);
//}
