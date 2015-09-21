<?php


include "top.php";
$query = 'select distinct fldBuilding, count(fldNumStudents), fldDays from tblSections where fldDays like "%W%" group by fldBuilding order by count(fldNumStudents) desc ';
$info2 = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);
echo count($info2);
print '<table>';
$columns = 3;
//now print out each record\
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