<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Usar Encripción
    |--------------------------------------------------------------------------
    |
    | Esta opción cuando en true, envía los IDs de las funciones encriptados
    | y es necesario utilizar decrypt() para obtener el id desencriptado
    | de igual forma, si se pone en false, se mandan los ids sin encriptar
    |
    |
     */

    'usar_encripcion' => true,

    /*
    |--------------------------------------------------------------------------
    | Duración del estado guardado (stateDuration)
    |--------------------------------------------------------------------------
    |
    | Cantidad de segundos que DataTables conserva el estado guardado
    | (ordenamiento, filtros, paginación) en localStorage. Por defecto
    | DataTables lo expira a las 2 horas (7200 segundos). Poniendo este
    | valor en 0 el estado nunca expira.
    |
    |
     */

    'stateDuration' => 0,
];
