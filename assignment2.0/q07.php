<?php


include "top.php";
$query = 'select distinct fldDepartment from tblCourses ';
$info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);
echo count($info2);
print '<table>';
$columns = 1;
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