<?php 

class Piramide {

    public $escalones;

    public function posicionamiento(array $escalones) {

        $escalones = array();

        if (empty($escalones)) {
            foreach ($escalones as $escalon) {
                $escalonCero = $escalones[0];
                $escalonUno = $escalones[1];
                $escalonDos = $escalones[2];
                $escalonTres = $escalones[3];
                $escalonCuatro = $escalones[4];
                $escalonCinco = $escalones[5];
                $escalonSeis = $escalones[6];
                $escalonSiete = $escalones[7];
                $escalonOcho = $escalones[8];
                $escalonNueve = $escalones[9];
                $escalonDiez = $escalones[10];
            }
        }

    }

    public function rellenarEscalones() {
        if (empty($escalonCero)) {
            array_push($escalones[0][0], $usuarioAscendidoCero);
        }
        if (empty($escalonUno)) {
            array_push($escalones[1][0], $usuarioAscendidoUnoUno);
            array_push($escalones[1][1], $usuarioAscendidoUnoDos);
        }

    }

}

?>
