@props(['dir'])

<?php 
    $res = 'resources/' . $slot;
?>

<img src="{{\Illuminate\Support\Facades\Vite::asset($res)}}" {{ $attributes }} alt="Image">