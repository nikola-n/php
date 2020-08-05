<?php
//Abstract classes vs Interfaces differences

//Interfaceot da se misli kako contract(dogovor)
//Koga go proveruvas tipot na objektot za da se izvrsi nesto
//99% treba da upotrebis polimorfizam -interface
interface Provider {

public function authorize();
}
//Moze da definira samo public metodi
function login(Provider $provider)
{
    $provider->authorize();
}
//Sega mozeme da se logirame vo bilo koj provider Github,Fb..
//prethodno go hardkodiravme providerot
//Login funkcijata ne se zamara so koj provider ke se logirame i ne treba da znae
//taa e odvorna da znae deka bilo koj objekt i da i go dademe treba da
//go slusa (da odgovara na provider metodot vo ovoj slucaj authorize();

//Vo laravel
//Auth::attempt()
//
//Vo nekoi slucai mozes da zamenis abstract klasa so interface,
//vo nekoi slucai moze da se koristat i dvete za ist komponent
//abstractnata klasa ne moze da se instancira!
abstract class Providerr{

    //abstract protected getAuthorizationUrlk();
}
class FacebookProvider extends Providerr
{
    protected function getAuthorizationUrlk()
    {
        return '';
    }
}

//so abstraktnata klasa mozeme da kreirame abstract protected metodi

//So abstaktniot metod velime deka barame oficijalna dozvola subklasata da
//kreira i implementira ist takov metod

//Benefitot e, sto ako abstraktnata klasa pravi povekje povici,
//i nekoj od tie povici treba da znae koj e prvailniot
//avtorizaciski url za providerot.
//Na pr. za facebook e eden za twitter e drug
//taka za fb ke vratime eden provider, za tviter ke napraime druga
//klasa i ke vratime drug url.

//mozeme da implemetirame kolku sakame interfejsi, no ne mozeme
//povekje klasi, PHP ne podrzuva multiple inheritance!

//Interfejsot definira public api, contract koj sto treba da go
//pocituva sekoja implementacija, i nema da se zacuvuva logika vo nego.

//moze i dvete da rabotat zaedno

//interface Provider{
//    public function getAuthorization();
//}
//abstract class AbstractProvider {
//    protected function related()
//    {
//
//    }
//}
//class FacebookProvider implements Provider {
//    protected function getAuthorization(){
//
//    }
//}
//class TwitterProvider implements Provider