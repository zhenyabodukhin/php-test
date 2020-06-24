<?php

$map20092010 = array();
$map20102011 = array();
$map20112012 = array();
$map20122013 = array();
$map20132014 = array();
$map20142015 = array();
$map20152016 = array();
$map20162017 = array();
$map20172018 = array();
$map20182019 = array();
$map20192020 = array();


include( 'C:\Program Files\Php\simplehtmldom_1_9_1\simple_html_dom.php' );
$html = new simple_html_dom(  );
$html->load_file( 'https://terrikon.com/football/italy/championship/2009-10/table ' );

for($i = 1; $i<21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $map20092010[$team3] = $i;

}

$html->load_file( 'https://terrikon.com/football/italy/championship/2010-11/table ' );

for($i = 1; $i<21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $map20102011[$team3] = $i;

}

$html->load_file( 'https://terrikon.com/football/italy/championship/2011-12/table ' );

for($i = 1; $i<21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $map20112012[$team3] = $i;

}

$html->load_file( 'https://terrikon.com/football/italy/championship/2012-13/table ' );

for($i = 1; $i<21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $map20122013[$team3] = $i;

}

$html->load_file( 'https://terrikon.com/football/italy/championship/2013-14/table ' );

for($i = 1; $i<21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $map20132014[$team3] = $i;

}

$html->load_file( 'https://terrikon.com/football/italy/championship/2014-15/table ' );

for($i = 1; $i<21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $map20142015[$team3] = $i;

}

$html->load_file( 'https://terrikon.com/football/italy/championship/2015-16/table ' );

for($i = 1; $i<21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $map20152016[$team3] = $i;

}

$html->load_file( 'https://terrikon.com/football/italy/championship/2016-17/table ' );

for($i = 1; $i<21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $map20162017[$team3] = $i;

}

$html->load_file( 'https://terrikon.com/football/italy/championship/2017-18/table ' );

for($i = 1; $i<21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $map20172018[$team3] = $i;

}

$html->load_file( 'https://terrikon.com/football/italy/championship/2018-19/table ' );

for($i = 1; $i<21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $map20182019[$team3] = $i;

}

$html->load_file( 'https://terrikon.com/football/italy/championship/2019-20/table ' );

for($i = 1; $i<21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\.\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $map20192020[$team3] = $i;

}

print_r($map20092010);
print_r($map20102011);
print_r($map20112012);
print_r($map20122013);
print_r($map20132014);
print_r($map20142015);
print_r($map20152016);
print_r($map20162017);
print_r($map20172018);
print_r($map20182019);
print_r($map20192020);

class Parser {

}