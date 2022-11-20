<?php

function alertError($mensaje)
{
    return '<div class="alert-error mt-2 text-center">' . $mensaje . '</div>';
}
function alertSuccess($mensaje)
{
    return '<div class="alert-success mt-2 text-center">' . $mensaje . '</div>';
}

function validarInputText($value, $mensaje)
{
    if (empty($value)) {
        return '<div class="alert-error mt-2 text-center">' . $mensaje . '</div>';
        exit;
    }
}
