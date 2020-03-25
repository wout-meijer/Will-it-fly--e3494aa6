<?php

abstract class Dier
{
    public function eet()
    {
        print 'lekker!' . PHP_EOL;
    }

    public function slaap()
    {
        Print 'ZZZZzzzzz....' . PHP_EOL;
    }

    abstract public function praat();
}