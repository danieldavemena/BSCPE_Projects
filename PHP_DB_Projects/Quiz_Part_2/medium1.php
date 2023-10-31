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

    $MathAPass = null;
    $ScienceAPass = null;
    $FilipinoAPass = null;
    $EnglishAPass = null;

    $MathBPass = null;
    $ScienceBPass = null;
    $FilipinoBPass = null;
    $EnglishBPass = null;

    $MathAGrammar = null;
    $MathAVerb = null;
    $ScinceAGrammar = null;
    $ScienceAVerb = null;
    $FilipinoAGrammar = null;
    $FilipinoAVerb = null;
    $EnglishAGrammar = null;
    $EnglishAVerb = null; // Placeholder Variables

    // Passed Students Counter
    foreach($students as $student) {
        if ($student['section'] === "II-A") {
            if($student['Math'] < 3.0) {
                $MathAPass++;

                if ($MathAPass === 1) {
                    $MathAVerb = " is ";
                    $MathAGrammar = " student ";
                } else if ($MathAPass > 1){
                    $MathAVerb = " are ";
                    $MathAGrammar = " students ";
                }
            }

            if($student['Science'] < 3.0) {
                $ScienceAPass++;

                if ($ScienceAPass === 1) {
                    $ScienceAVerb = " is ";
                    $ScienceAGrammar = " student ";
                } else if ($ScienceAPass > 1){
                    $ScienceAVerb = " are ";
                    $ScienceAGrammar = " students ";
                }
            }

            if($student['Filipino'] < 3.0) {
                $FilipinoAPass++;

                if ($FilipinoAPass === 1) {
                    $FilipinoAVerb = " is ";
                    $FilipinoAGrammar = " student ";
                } else if ($FilipinoAPass > 1){
                    $FilipinoAVerb = " are ";
                    $FilipinoAGrammar = " students ";
                }
            }

            if($student['English'] < 3.0) {
                $EnglishAPass++;

                if ($EnglishAPass === 1) {
                    $EnglishAVerb = " is ";
                    $EnglishAGrammar = " student ";
                } else if ($EnglishAPass > 1){
                    $EnglishAVerb = " are ";
                    $EnglishAGrammar = " students ";
                }
            }

        } else if ($student['section'] === "II-B") {
            if($student['Math'] < 3.0) {
                $MathBPass++;

                if ($MathBPass === 1) {
                    $MathBVerb = " is ";
                    $MathBGrammar = " student ";
                } else if ($MathBPass > 1){
                    $MathBVerb = " are ";
                    $MathBGrammar = " students ";
                }
            }

            if($student['Science'] < 3.0) {
                $ScienceBPass++;

                if ($ScienceBPass === 1) {
                    $ScienceBVerb = " is ";
                    $ScienceBGrammar = " student ";
                } else if ($ScienceBPass > 1){
                    $ScienceBVerb = " are ";
                    $ScienceBGrammar = " students ";
                }
            }

            if($student['Filipino'] < 3.0) {
                $FilipinoBPass++;

                if ($FilipinoBPass === 1) {
                    $FilipinoBVerb = " is ";
                    $FilipinoBGrammar = " student ";
                } else if ($FilipinoBPass > 1){
                    $FilipinoBVerb = " are ";
                    $FilipinoBGrammar = " students ";
                }
            }

            if($student['English'] < 3.0) {
                $EnglishBPass++;

                if ($EnglishBPass === 1) {
                    $EnglishBVerb = " is ";
                    $EnglishBGrammar = " student ";
                } else if ($EnglishBPass > 1){
                    $EnglishBVerb = " are ";
                    $EnglishBGrammar = " students ";
                }
            }
        }
    }


    // Output
    if ($MathAPass != 0) {
        echo "There".$MathAVerb.$MathAPass.$MathAGrammar."who PASSED their exam on MATH in II-A";
    } else {
        echo "All students FAILED their exam on MATH in II-A";
    }
    echo "<br>";
    if ($ScienceAPass != 0) {
        echo "There".$ScienceAVerb.$ScienceAPass.$ScienceAGrammar."who PASSED their exam on SCIENCE in II-A";
    } else {
        echo "All students FAILED their exam on SCIENCE in II-A";
    }
    echo "<br>";
    if ($FilipinoAPass != 0) {
        echo "There".$FilipinoAVerb.$FilipinoAPass.$FilipinoAGrammar."who PASSED their exam on FILIPINO in II-A";
    } else {
        echo "All students FAILED their exam on FILIPINO in II-A";
    }
    echo "<br>";
    if ($EnglishAPass != 0) {
        echo "There".$EnglishAVerb.$EnglishAPass.$EnglishAGrammar."who PASSED their exam on ENGLISH in II-A";
    } else {
        echo "All students FAILED their exam on ENGLISH in II-A";
    }
    echo "<br><br>";

    if ($MathBPass != 0) {
        echo "There".$MathBVerb.$MathBPass.$MathBGrammar."who PASSED their exam on MATH in II-B";
    } else {
        echo "All students FAILED their exam on MATH in II-B";
    }
    echo "<br>";
    if ($ScienceBPass != 0) {
        echo "There".$ScienceBVerb.$ScienceBPass.$ScienceBGrammar."who PASSED their exam on SCIENCE in II-B";
    } else {
        echo "All students FAILED their exam on SCIENCE in II-B";
    }
    echo "<br>";
    if ($FilipinoBPass != 0) {
        echo "There".$FilipinoBVerb.$FilipinoBPass.$FilipinoBGrammar."who PASSED their exam on FILIPINO in II-B";
    } else {
        echo "All students FAILED their exam on FILIPINO in II-B";
    }
    echo "<br>";
    if ($EnglishAPass != 0) {
        echo "There".$EnglishBVerb.$EnglishBPass.$EnglishBGrammar."who PASSED their exam on ENGLISH in II-B";
    } else {
        echo "All students FAILED their exam on ENGLISH in II-B";
    }
    echo "<br><br>";
?>
