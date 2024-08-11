
function parimpar($arreglo) {
    for ($i = 0; $i < count($arreglo) - 2; $i++) {
        if ($arreglo[$i] % 2 != 0 && $arreglo[$i+1] % 2 != 0 && $arreglo[$i+2] % 2 != 0) {
            return true;
        }
    }
    return false;
}

$arreglo = [3,5];

if (parimpar($arreglo)) {
    echo "verdad";
} else {
    echo "falso";
}