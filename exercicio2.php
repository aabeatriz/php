<?php
$numero=9;
if($numero<2)
{
    echo 'bebe';
}
if($numero>3 && $numero<12)
{
    echo 'crianca';
}
if($numero>13 && $numero<17)
{
    echo 'adolescente';
}
if($numero>18 && $numero<64)
{
    echo 'adulto';
}
if($numero>65)
{
    echo 'idoso';
}
?>