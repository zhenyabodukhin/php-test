<?php

class Parser
{

    public $map20092010 = array();
    public $map20102011 = array();
    public $map20112012 = array();
    public $map20122013 = array();
    public $map20132014 = array();
    public $map20142015 = array();
    public $map20152016 = array();
    public $map20162017 = array();
    public $map20172018 = array();
    public $map20182019 = array();
    public $map20192020 = array();

    public function findTeam(string $selectedTeam)
    {
        echo "Команда: " . $selectedTeam;

        echo PHP_EOL;
        echo "2009-2010: " . array_search($selectedTeam, $this->map20092010) . ".";

        echo PHP_EOL;
        echo "2010-2011: " . array_search($selectedTeam, $this->map20102011) . ".";

        echo PHP_EOL;
        echo "2011-2012: " . array_search($selectedTeam, $this->map20112012) . ".";

        echo PHP_EOL;
        echo "2012-2013: " . array_search($selectedTeam, $this->map20122013) . ".";

        echo PHP_EOL;
        echo "2013-2014: " . array_search($selectedTeam, $this->map20132014) . ".";

        echo PHP_EOL;
        echo "2014-2015: " . array_search($selectedTeam, $this->map20142015) . ".";

        echo PHP_EOL;
        echo "2015-2016: " . array_search($selectedTeam, $this->map20152016) . ".";

        echo PHP_EOL;
        echo "2016-2017: " . array_search($selectedTeam, $this->map20162017) . ".";

        echo PHP_EOL;
        echo "2017-2018: " . array_search($selectedTeam, $this->map20172018) . ".";

        echo PHP_EOL;
        echo "2018-2019: " . array_search($selectedTeam, $this->map20182019) . ".";

        echo PHP_EOL;
        echo "2019-2020: " . array_search($selectedTeam, $this->map20192020) . ".";
    }
}

$parser = new Parser();

include('C:\Program Files\Php\simplehtmldom_1_9_1\simple_html_dom.php');
$html = new simple_html_dom();
$html->load_file('https://terrikon.com/football/italy/championship/2009-10/table ');

for ($i = 1; $i < 21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $parser->map20092010[$i] = $team3;
}

$html->load_file('https://terrikon.com/football/italy/championship/2010-11/table ');

for ($i = 1; $i < 21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $parser->map20102011[$i] = $team3;
}

$html->load_file('https://terrikon.com/football/italy/championship/2011-12/table ');

for ($i = 1; $i < 21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $parser->map20112012[$i] = $team3;
}

$html->load_file('https://terrikon.com/football/italy/championship/2012-13/table ');

for ($i = 1; $i < 21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $parser->map20122013[$i] = $team3;
}

$html->load_file('https://terrikon.com/football/italy/championship/2013-14/table ');

for ($i = 1; $i < 21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $parser->map20132014[$i] = $team3;
}

$html->load_file('https://terrikon.com/football/italy/championship/2014-15/table ');

for ($i = 1; $i < 21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $parser->map20142015[$i] = $team3;
}

$html->load_file('https://terrikon.com/football/italy/championship/2015-16/table ');

for ($i = 1; $i < 21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $parser->map20152016[$i] = $team3;
}

$html->load_file('https://terrikon.com/football/italy/championship/2016-17/table ');

for ($i = 1; $i < 21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $parser->map20162017[$i] = $team3;
}

$html->load_file('https://terrikon.com/football/italy/championship/2017-18/table ');

for ($i = 1; $i < 21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $parser->map20172018[$i] = $team3;
}

$html->load_file('https://terrikon.com/football/italy/championship/2018-19/table ');

for ($i = 1; $i < 21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $parser->map20182019[$i] = $team3;
}

$html->load_file('https://terrikon.com/football/italy/championship/2019-20/table ');

for ($i = 1; $i < 21; $i++) {
    $table = $html->find("table", 0)->find("tr", $i)->find("td", 1);
    $team1 = preg_replace("/[\.\=\<\>\"\/]/", "", (string)$table);
    $team2 = preg_replace("/[A-Za-z]/", "", $team1);
    $team3 = trim(preg_replace("/[0-9]/", "", $team2));
    $parser->map20192020[$i] = $team3;
}

if (isset($_POST['name'])) {
    $parser->findTeam(trim($_POST['name']));
}



