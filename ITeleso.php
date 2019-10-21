<?php
interface IKrychle {
    /*
     * Vypočte a vrátí povrch tělesa
     * 
     * @return float
     */
    public function povrch($a): float;
    /*
     * Vypočte a vrátí objem tělesa
     * 
     * @return float
     */
    public function objem():float;
    /*
     * Testuje, zda je těleso trojrozměrné
     * 
     * @return boolean true značí trojrozměrný, false, že není
     */
    public function is3D(): bool;
    /*
     * Vrací počet vrcholů, když je trojrozměrný, jinak 0
     * 
     * @return integer počet vrcholů
     */
    public function pocetVrcholu(): int;
    /*
     * Vygeneruje řetězec informující o tělecu (název a rozměry)
     * 
     * @return string
     */
    public function info(): string;
}
