<?php

class Kraai extends Vogel implements Vliegbrevet
{

    public function vlieg()
    {
       print 'Liftoff... Flap Flap' . PHP_EOL;
    }
}