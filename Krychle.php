<?php

namespace SkolaVDF\Matematika\Telesa;

class Krychle implements ITeleso {
    /*
     * základní hodnota
     */

    private $a ;
    

    /*
     * Deklarace funkce, která vypočítá povrch krychle
     */

    public function povrch(): float {
        return 6 * $a * $a;
    }

    /*
     * Deklarace funkce, která vypočítá objem krychle
     */

    public function objem(): float {
        return $a * $a * $a;
    }

    /*
     * Deklarace funkce, která zjistí, zda je objekt 3D
     */

    public function is3D(): bool {
        if ($this->$a * $a * $a == 0) {
            echo 'Krychle není 3D ';
        } else {
            echo 'Krychle je 3D ';
        }
    }

    /*
     * Deklarace funkce pocetVrcholu
     */

    public function pocetVrcholu(): int {
        
    }

    /*
     * Deklarace funkce info
     */

    public function info(): string {
        echo 'Toto je krychle s hodnotou: ' . $this->$a;
    }

}
