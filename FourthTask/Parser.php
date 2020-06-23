<?php

$map = array();

include( 'C:\Program Files\Php\simplehtmldom_1_9_1\simple_html_dom.php' );
$html = new simple_html_dom(  );
$html->load_file( 'https://terrikon.com/football/italy/championship/2009-10/table ' );

for($i = 1; $i<21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $map[$team3] = $i;

}

print_r($map);