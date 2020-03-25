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

    public function laatVliegen(Vliegbrevet $dier)
    {
        $dier->vlieg();
    }
}

$vis = new Vis();
$vogel = new Vogel();
$freek = new Freek();
$kraai = new Kraai();

$freek->geefEten($vis);  // Print 'lekker!'
$freek->geefEten($vogel);  // Print 'lekker!'
$freek->brengNaarBed($vis);  // Print 'ZZZZzzzzz....'
$freek->brengNaarBed($vis);  // Print 'ZZZZzzzzz....'

$freek->praten($vis); // Blub Blub!
$freek->praten($vogel); // Tjilp Tjilp!

$freek->laatVliegen($kraai); // Liftoff... Flap Flap