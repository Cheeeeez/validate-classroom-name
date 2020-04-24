<?php
function checkClassroomName($str)
{
    $regex = '/^(C|A|P)[\d]{4}(G|H|I|K|L|M)$/';
    if (preg_match($regex, $str)) {
        echo "Classroom's name is valid";
    } else {
        echo "Classroom's name is invalid";
    }
}

checkClassroomName('C0318G');
echo "<br>";
checkClassroomName('M0318G');
echo "<br>";
checkClassroomName('P0323A');
echo "<br>";