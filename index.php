<?php
require('./smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->caching = false;
$smarty->cache_lifetime = 300;

$basePath = './';

$smarty->setTemplateDir($basePath . 'templates');
$smarty->setConfigDir($basePath . 'config');
$smarty->setCompileDir($basePath . 'compile');
$smarty->setCacheDir($basePath . 'cache');
# $smarty->testInstall();
# echo "<script>console.log('" . json_encode($csvFile) . "');</script>";

# Info Content
$csvFile = file($basePath . 'content/source/Info_Text.csv');
    $info_text = [];
    $keys = str_getcsv($csvFile[0], ';');
    foreach ($csvFile as $line) {
        $info_text[] = array_combine($keys, str_getcsv($line, ';'));
    }
# removes first element
array_shift($info_text);
$smarty->assign("info_text", $info_text);

$csvFile = file($basePath . 'content/source/Info_Files.csv');
    $info_files = [];
    $keys = str_getcsv($csvFile[0], ';');
    foreach ($csvFile as $line) {
        $info_files[] = array_combine($keys, str_getcsv($line, ';'));
    }
# removes first element
array_shift($info_files);
$smarty->assign("info_files", $info_files[0]);

# Team Content
$csvFile = file($basePath . 'content/source/Team.csv');
    $team = [];
    $keys = str_getcsv($csvFile[0], ';');
    foreach ($csvFile as $line) {
        $team[] = array_combine($keys, str_getcsv($line, ';'));
    }
# removes first element
array_shift($team);
$smarty->assign("team", $team);

# Partner Content
$csvFile = file($basePath . 'content/source/Partners.csv');
    $partners = [];
    $keys = str_getcsv($csvFile[0], ';');
    foreach ($csvFile as $line) {
        $partners[] = array_combine($keys, str_getcsv($line, ';'));
    }
# removes first element
array_shift($partners);
$smarty->assign("partners", $partners);

# get Sub Pages for Team Members
$sub = [];
foreach($team as $member) {
 $sub[] = $member['Name'];
}

$page = isset($_GET['page']) ? $_GET['page'] : '';

if (in_array($page, $sub)) {
    # http://serverpi:81/?page=Carl

    $index = array_search($page, $sub);

    $smarty->assign("name", $team[$index]['Name']);
    $smarty->assign("image", $team[$index]['Image']);
    $smarty->assign("title", $team[$index]['Title']);
    $smarty->assign("description", $team[$index]['Description']);
    $smarty->assign("mail", $team[$index]['Mail']);
    $smarty->assign("website", $team[$index]['Website']);
    $smarty->assign("instagram", $team[$index]['Instagram']);
    $smarty->assign("linkedin", $team[$index]['Linkedin']);
    $smarty->assign("country", $team[$index]['Country']);

    $smarty->assign("page", "sub");
    $page = 'teamsingle.tpl';
  } else {
    $smarty->assign("page", "main");
    $page = 'home.tpl';
  }

$smarty->display($page);
?>