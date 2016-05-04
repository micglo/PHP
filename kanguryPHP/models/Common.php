<?php

/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-01
 * Time: 17:41
 */
class PageData
{
    public $title = "";
    public $css = "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/style.css\">";
    public $embeddedCss = "";
    public $script ="";
    public $embeddedScript = "";
    public $currentIndex = "";
    public $currentRodzaje = "";
    public $currentHumor = "";
    public $currentCiekawostki = "";
    public $currentGaleria = "";
    public $currentKontakt = "";
    public $currentAplikacjaPHP = "";
    public $currentKlient = "";
    public $currentPracownik = "";
    public $currentZarzPrac = "";
    public $currentZarzKan = "";
    public $slider = "";
    public $section = "";
    public $connectionInfo = "";

    public function AddScript( $href ){
        $this->script .= "<script src=$href></script>";
    }

    public function nazwijRodzaj($id)
    {
        if($id == 1)
            $nazwaRodzaju = "Olbrzymi";
        elseif($id == 2)
            $nazwaRodzaju = "Szary";
        else
            $nazwaRodzaju = "Rudy";
        return $nazwaRodzaju;
    }

    public function wiek($date){
        $now = time(); // or your date as well
        $date1 = $date;
        $your_date = strtotime($date1);
        $datediff = $now - $your_date;
        $wiekkangura = number_format(floor($datediff/(60*60*24))/31);
        $wiekKangura2 = $this->wyliczMiesiace($wiekkangura);
        return $wiekKangura2;
    }

    private function wyliczMiesiace($id){
        if($id <1)
            $wiek = "Kangur nie ma nawet miesiąca";
        elseif($id==1)
            $wiek = "Kangur ma 1 miesiąc";
        elseif($id==2)
            $wiek = "Kangur ma 2 miesiąc";
        elseif($id==3)
            $wiek = "Kangur ma 3 miesiąc";
        elseif($id==4)
            $wiek = "Kangur ma 4 miesiąc";
        elseif($id==5)
            $wiek = "Kangur ma 5 miesiąc";
        elseif($id==6)
            $wiek = "Kangur ma 6 miesiąc";
        elseif($id==7)
            $wiek = "Kangur ma 7 miesiąc";
        elseif($id==8)
            $wiek = "Kangur ma 8 miesiąc";
        elseif($id==9)
            $wiek = "Kangur ma 9 miesiąc";
        elseif($id==10)
            $wiek = "Kangur ma 10 miesiąc";
        elseif($id==11)
            $wiek = "Kangur ma 11 miesiąc";
        elseif($id==12)
            $wiek = "Kangur ma 1 rok";
        elseif($id>12)
            $wiek = "Kangur ma wiecej jak rok";
        return $wiek;
    }
}