<?php
$servername = "localhost";
$username = "rightbiz_rightbiz";
$password = "CdU=XNZy~$5l";

try {
  $conn = new PDO("mysql:host=$servername;dbname=rightbiz_db", $username, $password, array(
        PDO::MYSQL_ATTR_LOCAL_INFILE => true,
    ));
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$path = $_SERVER['DOCUMENT_ROOT'];
$mydir = $path.'/admin_new/insights/split/';
$myfiles = scandir($mydir);
 
foreach($myfiles as $files)
{
	if($files!='..' && $files!='.'){
		
		$dir = "'"."$path/admin_new/insights/split/$files"."'";

		
		
		 $n  = "'"."\\n"."'";
		 $d = '"';
		 $sql1= "LOAD DATA LOCAL INFILE {$dir} INTO TABLE company_data FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '$d' LINES TERMINATED BY $n IGNORE 1 LINES (CompanyName,CompanyNumber,RegAddress_CareOf,RegAddress_POBox,RegAddress_AddressLine1,RegAddress_AddressLine2,RegAddress_PostTown,RegAddress_County,RegAddress_Country,RegAddress_PostCode,CompanyCategory,CompanyStatus,CountryOfOrigin,DissolutionDate,IncorporationDate,Accounts_AccountRefDay,Accounts_AccountRefMonth,Accounts_NextDueDate,Accounts_LastMadeUpDate,Accounts_AccountCategory,Returns_NextDueDate,Returns_LastMadeUpDate,Mortgages_NumMortCharges,Mortgages_NumMortOutstanding,Mortgages_NumMortPartSatisfied,Mortgages_NumMortSatisfied,SICCode_SicText_1,SICCode_SicText_2,SICCode_SicText_3,SICCode_SicText_4,LimitedPartnerships_NumGenPartners,LimitedPartnerships_NumLimPartners,URI,PreviousName_1_CONDATE,PreviousName_1_CompanyName,PreviousName_2_CONDATE,PreviousName_2_CompanyName,PreviousName_3_CONDATE,PreviousName_3_CompanyName,PreviousName_4_CONDATE,PreviousName_4_CompanyName,PreviousName_5_CONDATE,PreviousName_5_CompanyName,PreviousName_6_CONDATE,PreviousName_6_CompanyName,PreviousName_7_CONDATE,PreviousName_7_CompanyName,PreviousName_8_CONDATE,PreviousName_8_CompanyName,PreviousName_9_CONDATE,PreviousName_9_CompanyName,PreviousName_10_CONDATE,PreviousName_10_CompanyName,ConfStmtNextDueDate,ConfStmtLastMadeUpDate)"; 
		
		
		$stmt = $conn->prepare($sql1,array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true));
		$stmt->execute(); 
	}
}
 
 

?>