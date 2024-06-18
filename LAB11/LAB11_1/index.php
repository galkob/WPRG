<?php
class NoweAuto{
    protected $model= "", $cena=0.0, $kurs=4.12;

    public function __construct($model,$cena)
    {
        $this->model=$model;
        $this->cena=$cena;
    }
    function ObliczCene(){
    return $this->cena*$this->kurs;
    }
}

class AutoZDodatkami extends NoweAuto{
    protected $alarm,$radio,$klimatyzacja;
    public function __construct($model,$cena,$alarm,$radio,$klimatyzacja){
        parent::__construct($model,$cena);
        $this->alarm=$alarm;
        $this->radio=$radio;
        $this->klimatyzacja=$klimatyzacja;
    }
    public function ObliczCene(){
        return parent::ObliczCene()+$this->alarm+$this->radio+$this->klimatyzacja;
    }
}
class Ubezpieczenie extends AutoZDodatkami {
    protected $procentowawartosc,$wiekauta;
    public function __construct($model, $cena, $alarm, $radio, $klimatyzacja, $ubezpieczenie,$wiekauta)
    {
        parent::__construct($model, $cena, $alarm, $radio, $klimatyzacja);
        $this->ubezpieczenie=$ubezpieczenie;
        $this->wiekauta=$wiekauta;
    }
    public function ObliczCene(){
        return parent::ObliczCene()*((100-$this->wiekauta)/100)*$this->ubezpieczenie;
    }
}
?>