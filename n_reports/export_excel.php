<?php include "../db_conn.php"; 
                            
                            if(isset($_POST['export_excel'])){

                                

                            $SQL1 = "SELECT COUNT(*) as NumberofResident, Purok from residents group by purok";
                            $SQL2 = "SELECT count(*) as NumberofResident, voter_status FROM residents group by voter_status";
                            $SQL3 = "SELECT count(*) as NumberofResident, sex from residents group by sex";

                            // $SQL4 = "SELECT COUNT( * ) as NumberofResident , date_of_birth FROM residents GROUP BY date_of_birth";

                           

$arrsql = array($SQL1,$SQL2,$SQL3);
$arrhead = array("Population per Purok","Voters Population per Purok","Barangay Population Count by Gender");
foreach(array_combine($arrsql,$arrhead) as $value => $headers)  


{  

$exportData = mysqli_query ( $conn, $value );
$header = "$headers\n";
$result ='';
$exportData = mysqli_query ( $conn, $value );
 
$fields = mysqli_num_fields ( $exportData );
 

 
while( $row = mysqli_fetch_row( $exportData ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $result .= trim( $line ) . "\n";
}
$result = str_replace( "\r" , "" , $result );
 
if ( $result == "" )
{
    $result = "\nNo Record(s) Found!\n";                        
}

$totalheader = "Total";

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=export_test.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$totalheader\n$result\n\n";

                            }}  
                            ?>