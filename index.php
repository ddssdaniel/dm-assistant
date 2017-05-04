<?

header("Content-Type: text/html;  charset=UTF-8",true);

require_once "Parsedown.php";
$Parsedown = new Parsedown();
$content = file_get_contents('srd\docs\spellcasting\spells\acid_splash.md');
echo $Parsedown->text($content);