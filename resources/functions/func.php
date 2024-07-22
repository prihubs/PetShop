<?php 

    function directory($fD, $fN){
        return "\Illuminate\Support\Facades\Vite::asset('resources/$fD/$fN')";
    }

    directory($fD, $fN)