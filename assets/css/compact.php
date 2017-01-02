<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 4/18/16
 * Time: 2:27 PM
 */

/*
 * $argv[] :
 * 0 - current file name (def: "compact.php");
 * 1 - directory to start with
 * 2 - output file
 * 3 - file extension*/

$timeStart = microtime(true);

$GLOBALS["path"] = "";
$GLOBALS["outputFile"] = "";
$GLOBALS["ext"] = "";
$GLOBALS["filesParsed"] = 0;

if ($argc > 0) {
	if ($argv[1] === ".") {
		$argv[1] = getcwd();
	}
	$directory = scandir($argv[1]);
	$GLOBALS["outputFile"] = $argv[1] . "/" . $argv[2];
	$GLOBALS["ext"] = $argv[3];
	if ($msg = processFolder($directory, $argv[1])) {
		echo "$msg\n";
	};
}

$timeEnd = microtime(true);
echo "\nFiles parsed: " . $GLOBALS["filesParsed"] . "\n";
echo (int)(($timeEnd - $timeStart) * 1000) . " ms spent for computation\n";

function processFolder($folder, $xpath) {
	array_shift($folder);
	array_shift($folder);
	if (count($folder) === 0) return "Empty folder $xpath\n";
	foreach ($folder as $item) {
		$path = $xpath . "/" . $item;
		if ($path === $GLOBALS["outputFile"]) break;
		if (is_dir($path)) {
			if ($msg = processFolder(scandir($path), $path)) {
				echo "$msg\n";
			}
		} else {
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			if ($ext === $GLOBALS["ext"]) {
				$tmpContent = file_get_contents($path);
				file_put_contents($GLOBALS["outputFile"], $tmpContent, FILE_APPEND);
				$GLOBALS["filesParsed"]++;
				echo "$path parsed successfully\n";
			} else {
				echo "File $path skipped due to the extension filer\n";
			}
		}
	}

	return true;
}