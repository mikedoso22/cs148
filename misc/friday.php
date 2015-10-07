<?php


include "top.php";
<<<<<<< HEAD
$query = 'SELECT pmkStudentId, fldFirstName, fldLastName, fldStreetAddress, fldCity, fldState, fldZip, fldGender FROM tblStudents ORDER BY fldLastName, fldFirstName LIMIT 10 offset 1000';
$info2 = $thisDatabaseReader->select($query, "", 0,1, 0, 0, false, false);
=======
$query = 'SELECT pmkStudentId, fldFirstName, fldLastName, fldStreetAddress, fldCity, fldState, fldZip, fldGender FROM tblStudents ORDER BY fldLastName, fldFirstName';
$info2 = $thisDatabaseReader->query($query, "", 0,0, 0, 0, false, false);
>>>>>>> 89864fea9f0510ba364b077303edc883ecaf3b0a
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

include "footer.php";
?>