<?php

$arr =  [

    'Guitar' => 'Electro acoustic',
    'Model' => 'Yamaha'

];


function build(array $arr)
{
    $html = "
        <table border='1'>
            <thead>
                <th>KEY</th>
                <th>VALUE</th>
            </thead>
        <tbody>";

    foreach ($arr as $field => $value) {
        $html .= "<tr>";
        $html .= "<td>$field</td>";
        $html .= "<td>$value</td>";
        $html .= "</tr>";
    }


    $html .= "</tbody></table>";

    return $html;
}


    $bt = build($arr);
    echo $bt;


