<?php


include "top.php";
$query = 'select * from tblSections where fldStart = "10:50:00" and fldBuilding = "Votey" and fnkTeacherNetId = "rerickso"';
$info2 = $thisDatabaseReader->select($query, "", 1, 2, 6, 0, false, false);
echo count($info2);
echo '<p>'.$query.'</p>';
print '<table>';
$columns = 12;
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