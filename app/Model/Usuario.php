<?php
class Usuario extends AppModel {
    public $hasMany = array(
        'Pregunta', 'Respuesta'
    );
}
?>