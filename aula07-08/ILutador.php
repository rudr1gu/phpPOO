<?php

interface ILutador {
    public function apresentar();
    public function status();
    public function ganharLuta();
    public function perderLuta();
    public function empatarLuta();
}
