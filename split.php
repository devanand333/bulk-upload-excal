<?
ini_set('max_execution_time', '1000');
$start = microtime(true);
$outputFile = 'rightbiz-';
$splitSize = 50000; // 50k records in a one file
$in = fopen('file.csv', 'r');
$rows = 0;
$fileCount = 1;
$out = null;
$path = $_SERVER['DOCUMENT_ROOT'];
if (!file_exists($path."/admin_new/insights/splits")) {
	mkdir($path."/admin_new/insights/splits", 0777, true);
}
while (!feof($in)) {
    if (($rows % $splitSize) == 0) {
        if ($rows > 0) {
            fclose($out);
        }
        $fileCount++;
        $fileCounterDisplay = sprintf("%04d", $fileCount);
        $fileCounterDisplay = $fileCount;
        $fileName = "splits/$outputFile$fileCounterDisplay.csv";
        $out = fopen($fileName, 'w');
    }
    $data = fgetcsv($in);
	//echo"<pre>";print_R($data);
	$newdata = [$data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[10],$data[11]];
	
    if ($data)
        fputcsv($out, $newdata);
    $rows++;
	
}

fclose($out);
$end = microtime(true);
$final = $end - $start;

echo json_encode(['status'=>"success","message"=>"Run successfully","data"=>[], "exe_time" => $final]);	exit;

