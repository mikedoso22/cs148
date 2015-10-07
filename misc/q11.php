<?php


include "top.php";
$query = 'SELECT fnkCourseId FROM tblSections GROUP BY fnkCourseId HAVING COUNT(fnkCourseId) >= 50';
$info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 1, false, false);
echo count($info2);
echo '<p>'.$query.'</p>';
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