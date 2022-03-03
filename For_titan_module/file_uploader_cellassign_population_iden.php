<?php

$fileName1 = $_FILES["uploaded_file"]['name'][0];//the files name takes from the HTML form
$fileName2 = $_FILES["uploaded_file"]['name'][1];//the files name takes from the HTML form
$fileTmpLoc1 = $_FILES["uploaded_file"]["tmp_name"][0];//file in the PHP tmp folder
$fileTmpLoc2 = $_FILES["uploaded_file"]["tmp_name"][1];//file in the PHP tmp folder
$path_results=preg_replace('/\s+/', '',$_POST["path_results"]);

$target_path1 = "/var/www/html/upload/tmp/" . $fileName1;
$target_path2 = "/var/www/html/upload/tmp/" . $fileName2;


$moveResult1 = move_uploaded_file($fileTmpLoc1, $target_path1);
$moveResult2 = move_uploaded_file($fileTmpLoc2, $target_path2);

if($moveResult1 != true)
    {
        echo '<span style="color:#F00;text-align:center;">ERROR: Biomarker files was not uploaded. Please Try again.</span>';
#        shell_exec("sudo rm /var/www/html/upload/tmp/*");
#        unlink($fileTmpLoc1);//remove the uploaded file from the PHP temp folder
        exit();
    }
    else
    {
        echo "The Sample Sheet was successfully uploaded to the server.<br><br>";
}
if($moveResult2 != true)
    {
        echo '<span style="color:#F00;text-align:center;">ERROR: raw count expression matrix was not uploaded. Please Try again.</span>';
#        shell_exec("sudo rm /var/www/html/upload/tmp/*");
#        unlink($fileTmpLoc2);//remove the uploaded file from the PHP temp folder
        exit();
    }
    else
    {
        echo "The Sample Sheet was successfully uploaded to the server.<br><br>";
}

shell_exec("sudo bash /var/www/html/script/cell_assign.sh $target_path1 $target_path2 $path_results >> /var/www/html/log/cell_assign.log &");

#$return_value=shell_exec("sudo python /var/www/html/script/samplesheet_error_checking.py $target_path");
#exec('sudo python /var/www/html/script/samplesheet_error_checking.py', $output, $ret_code);
#$return_value=shell_exec("sudo python /var/www/html/script/samplesheet_error_checking.py $target_path");
#if($return_value == 1)
#{
#	header('Content-Description: File Transfer');
#        header('Content-Type: application/octet-stream');
#        header('Content-Disposition: attachment; filename="'.basename($target_path).'"');
#        header('Expires: 0');
#        header('Cache-Control: must-revalidate');
#        header('Pragma: public');
#        header('Content-Length: ' . filesize($target_path));
#        readfile($target_path);
#}else{
#	echo "$return_value";
#}

?>
