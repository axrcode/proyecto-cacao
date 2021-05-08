<?php

use Illuminate\Support\Facades\Request;

/* BOTONES EN ESTADO 'ACTIVE' EN LAS VISTAS */
function active( $path ) {

    return Request::url() == $path ? 'active' : '';
}
