<?php

spl_autoload_register(
    static function ($className) {
        include_once "$className.class.php";
    }
);


class Freek
{
    public function geefEten(Dier $dier)
    {
        $dier->eet();
    }

    public function brengNaarBed(Dier $dier)
    {
        $dier->slaap();
    }

    public function praten(Dier $dier)
    {
        $dier->praat();
    }
}

$vis = new Vis();
$vogel = new Vogel();
$freek = new Freek();

$freek->geefEten($vis);  // Print 'lekker!'
$freek->geefEten($vogel);  // Print 'lekker!'
$freek->brengNaarBed($vis);  // Print 'ZZZZzzzzz....'
$freek->brengNaarBed($vis);  // Print 'ZZZZzzzzz....'

$freek->praten($vis);
$freek->praten($vogel);