<?php
    $students = [
        ['name' => 'Jay', 'section' => 'II-A', 'gender' => 'Male', 'Math' => 1.2, 'Science' => 2.0, 'Filipino' => 1.5, 'English' => 3.1],
        ['name' => 'Mark', 'section' => 'II-B', 'gender' => 'Male', 'Math' => 2.0, 'Science' => 3.5, 'Filipino' => 2.1, 'English' => 1.2],
        ['name' => 'Kris', 'section' => 'II-A', 'gender' => 'Female', 'Math' => 1.5, 'Science' => 1.5, 'Filipino' => 1.2, 'English' => 3.2],
        ['name' => 'Mae', 'section' => 'II-A', 'gender' => 'Female', 'Math' => 3.5, 'Science' => 1.9, 'Filipino' => 3.3, 'English' => 1.0],
        ['name' => 'Danny', 'section' => 'II-A', 'gender' => 'Male', 'Math' => 3.1, 'Science' => 1.0, 'Filipino' => 1.3, 'English' => 1.9],
        ['name' => 'Karl', 'section' => 'II-B', 'gender' => 'Male', 'Math' => 1.5, 'Science' => 1.8, 'Filipino' => 2.3, 'English' => 2.1],
        ['name' => 'Yow', 'section' => 'II-B', 'gender' => 'Male', 'Math' => 2.3, 'Science' => 4.3, 'Filipino' => 1.1, 'English' => 1.8],
        ['name' => 'Sarah', 'section' => 'II-A', 'gender' => 'Female', 'Math' => 1.3, 'Science' => 3.1, 'Filipino' => 1.8, 'English' => 3.5],
        ['name' => 'Kaye', 'section' => 'II-A', 'gender' => 'Female', 'Math' => 1.1, 'Science' => 2.9, 'Filipino' => 1.4, 'English' => 3.0],
        ['name' => 'Jake', 'section' => 'II-B', 'gender' => 'Male', 'Math' => 2.6, 'Science' => 1.3, 'Filipino' => 2.2, 'English' => 1.4],
        ['name' => 'Mike', 'section' => 'II-B', 'gender' => 'Male', 'Math' => 2.2, 'Science' => 3.2, 'Filipino' => 1.7, 'English' => 2.5],
        ['name' => 'Kimmy', 'section' => 'II-B', 'gender' => 'Female', 'Math' => 1.7, 'Science' => 3.0, 'Filipino' => 1.4, 'English' => 1.3],
        ['name' => 'Jenny', 'section' => 'II-B', 'gender' => 'Female', 'Math' => 3.6, 'Science' => 2.2, 'Filipino' => 3.1, 'English' => 2.7],
        ['name' => 'Alaiza', 'section' => 'II-A', 'gender' => 'Female', 'Math' => 4.2, 'Science' => 2.4, 'Filipino' => 2.8, 'English' => 1.1],
        ['name' => 'Nikki', 'section' => 'II-B', 'gender' => 'Female', 'Math' => 1.6, 'Science' => 1.7, 'Filipino' => 2.3, 'English' => 2.4],
        ['name' => 'Ben', 'section' => 'II-A', 'gender' => 'Male', 'Math' => 1.9, 'Science' => 1.3, 'Filipino' => 3.2, 'English' => 2.9]
        ];

    $twoAis = " are ";
    $twoBis = " are ";
    $twoA = null;
    $twoB = null;
    $MaleA = null;
    $MaleB = null;
    $FemaleA = null;
    $FemaleB = null;
    $i = 0;
    $j = 0;

    // Sort by Section and Gender Counter
    foreach($students as $student) {
        if ($student['section'] === "II-A") {
            $twoA .= $student['name'].", ";

            switch($student['gender']) {
                case 'Male':
                    $MaleA++;
                    break;
                case 'Female':
                    $FemaleA++;
                    break;
            }

            $i++;
        } else if ($student['section'] === "II-B") {
            $twoB .= $student['name'].", ";

            switch($student['gender']) {
                case 'Male':
                    $MaleB++;
                    break;
                case 'Female':
                    $FemaleB++;
                    break;
            }

            $j++;
        }
    }

    $numberA;
    $numberB;
    $numberA1;
    $numberB1;
    $Aand;
    $Band;

// Grammar Correction and Output
if ($i != 0) {
    if ($MaleA > 1) {
        $numberA = " boys";
    } else if ($MaleA === 1) {
        $numberA = " boy";
    } else {
        $MaleA = null;
        $numberA = null;
    }

    if ($FemaleA > 1) {
        $numberA1 = " girls";
    } else if ($FemaleA === 1) {
        $numberA1 = " girl";
    } else {
      $FemaleA = null;
        $numberA1 = null;
    }

    if ($MaleA != 0 && $FemaleA != 0) {
        $Aand = " and ";
    } else {
        $Aand = null;
    }

    if ($MaleA == 1 && $FemaleA == 0 || $MaleA == 0 && $FemaleA == 1) {
      $twoAis = " is ";
    }

    echo "The Student of II-A are ".$twoA;
    echo "<br>There".$twoAis.$FemaleA.$numberA1.$Aand.$MaleA.$numberA." in II-A";
    echo "<br><br>";

} else {
    echo "There are no student in II-A";
    echo "<br><br>";
}

if ($j != 0) {
    if ($MaleB > 1) {
        $numberB = " boys";
    } else if ($MaleB === 1) {
        $numberB = " boy";
    } else {
      $MaleB = null;
        $numberB = null;
    }


    if ($FemaleB > 1) {
        $numberB1 = " girls";
    } else if ($FemaleB === 1) {
        $numberB1 = " girl";
    } else {
      $FemaleB = null;
        $numberB1 = null;
    }


    if ($MaleB != 0 && $FemaleB != 0) {
        $Band = " and ";
    } else {
        $Band = null;
    }

    if ($MaleB == 1 && $FemaleB == 0 || $MaleB == 0 && $FemaleB == 1) {
      $twoBis = " is ";
    }

    echo "The Student of II-B are ".$twoB;
    echo "<br>There".$twoBis.$FemaleB.$numberB1.$Band.$MaleB.$numberB." in II-B";
    echo "<br><br>";
}





?>
