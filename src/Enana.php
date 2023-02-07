<?php

class Enana
{
    public $nombre; #Nombre de la enana
    public $puntosVida; #Valor de la vida que posee
    public $situacion; #La enana estará 'viva', 'muerta' o 'limbo', dependiendo de sus puntos de vida. >0 = viva;
    #<0 = muerta; =0 = limbo

    public function __construct($a1, $a2, $a3)
    {
        $this->nombre = $a1;
        $this->puntosVida = $a2;
        $this->situacion = $a3;
    }

    public function heridaLeve()
    {
        $this->puntosVida - 10;
        if ($this->puntosVida > 0) {
            $this->situacion = 'viva';
        } elseif ($this->puntosVida < 0) {
            $this->situacion = 'muerta';
        } elseif ($this->puntosVida === 0) {
            $this->situacion = 'limbo';
        }
        return $this->situacion;
        #Se le quitan 10 puntos de vida a la Enana y además se cambia el valor de situacion (si fuera necesario)
    }

    public function heridaGrave()
    {
        $this->puntosVida - $this->puntosVida;
        if ($this->puntosVida === 0) {
            $this->situacion = 'limbo';
        }
        return $this->situacion;
        #Se le quita toda la vida que posea hasta tener 0 puntos de vida y cambiarle la situacion a limbo
    }

    public function pocima()
    {

        $this->puntosVida + 10;
        if ($this->puntosVida > 0) {
            $this->situacion = 'viva';
        } elseif ($this->puntosVida < 0) {
            $this->situacion = 'muerta';
        } elseif ($this->puntosVida = 0) {
            $this->situacion = 'limbo';
        }
        return $this->situacion;

        #Recupera 10 puntos de vida y además cambia el valor de situacion si así fuera necesario.
        #Si la Enana está en el limbo, la pocima no le afecta, seguirá en el limbo con 0 puntos de vida.
        #Solo pocimaExtra puede rescatarla del limbo.
    }

    public function pocimaExtra()
    {
        $this->puntosVida + 50;
        if ($this->puntosVida > 0) {
            $this->situacion = 'viva';
        } elseif ($this->puntosVida < 0) {
            $this->situacion = 'muerta';
        } elseif ($this->puntosVida === 0) {
            $this->situacion = 'muerta';
        }
        return $this->situacion;
        #Única manera de devolver a la vida del limbo. Además se otorgarán 50 puntos de vida.
    }
}
