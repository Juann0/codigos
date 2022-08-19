<?php

for ($i = 0; $i < 1000; $i++) {
    $codigo = generarCodigo(11) . "<br/>";
    if (
        strpos($codigo, '0o') !== false || strpos($codigo, 'o0') !== false ||
        strpos($codigo, 'il') !== false || strpos($codigo, 'll') !== false ||
        strpos($codigo, 'ii') !== false || strpos($codigo, 'Ii') !== false ||
        strpos($codigo, '1i') !== false || strpos($codigo, 'i1') !== false ||
        strpos($codigo, 'Oo') !== false ||  strpos($codigo, 'oO') !== false ||
        strpos($codigo, 'OO') !== false || strpos($codigo, 'I1') !== false ||
        strpos($codigo, 'O0') !== false || strpos($codigo, '0O') !== false ||
        strpos($codigo, 'IL') !== false || strpos($codigo, 'LL') !== false ||
        strpos($codigo, '1I') !== false || strpos($codigo, 'oo') !== false ||
        strpos($codigo, 'iL') !== false || strpos($codigo, 'iL') !== false ||
        strpos($codigo, 'Il') !== false || strpos($codigo, 'Li') !== false ||
        strpos($codigo, 'li') !== false || strpos($codigo, 'lI') !== false ||
        strpos($codigo, 'LI') !== false || strpos($codigo, '1L') !== false ||
        strpos($codigo, '1l') !== false || strpos($codigo, 'l1') !== false ||
        strpos($codigo, 'L1') !== false
    ) {
    } else {
        echo $codigo;
    }
    $codigo = '';
}


function generarCodigo($longitud)
{
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYXY';
    $max = strlen($pattern) - 1;
    for ($i = 0; $i < $longitud; $i++) {
        $key .= $pattern{
            mt_rand(0, $max)
        };
    }
    return $key;
}
