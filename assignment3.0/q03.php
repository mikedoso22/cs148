<?php


include "top.php";
$query = 'SELECT DISTINCT tblCourses.fldCourseName, tblTeachers.fldLastName, tblTeachers.fldFirstName, tblSections.fldDays, tblSections.fldStart, tblSections.fldStop FROM tblTeachers JOIN tblSections ON tblTeachers.pmkNetId=tblSections.fnkTeacherNetId JOIN tblCourses ON tblCourses.pmkCourseId=tblSections.fnkCourseId WHERE fnkTeacherNetId="jlhorton" ORDER BY fldStart';
$info2 = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);
echo count($info2);
echo '<p>'.$query.'</p>';
print '<table>';
$columns = 6;
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