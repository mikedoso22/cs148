<?php


include "top.php";
if(isset($_GET['varOffset'])){
    $varOffset = $_GET['varOffset'];
}
$varLimit = 10;


$query = 'SELECT pmkStudentId, fldFirstName, fldLastName, fldStreetAddress, fldCity, fldState, fldZip, fldGender FROM tblStudents ORDER BY fldLastName, fldFirstName LIMIT ' . $varLimit . ' OFFSET ' . $varOffset;
$info2 = $thisDatabaseReader->select($query, "", 0,1, 0, 0, false, false);
echo count($info2);
echo '<p>'.$query.'</p>';
print '<table>';
$columns = 8;
//now print out each record
$highlight = 0; // used to highlight alternate rows
foreach ($info2 as $rec) {
    $highlight++;
    if ($highlight % 2 != 0) {
        $style = ' odd ';
    } else {
        $style = ' even ';
    }
    print '<tr class="' . $style . '">';
    for ($i = 0; $i < $columns; $i++) {
        print '<td>' . $rec[$i] . '</td>';
    }
    print '</tr>';
}
// all done
print '</table>';
$varOffset +=10;
print '<p><a href="https://mcardoso.w3.uvm.edu/cs148dev/misc/friday.php?varOffset=' . $varOffset . '">Next </a></p>'; 

include "footer.php";
?>