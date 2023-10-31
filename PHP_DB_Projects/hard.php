<?php
    $students = [
        ['name' => 'Jay', 'course' => 'Computer Engineering', 'gender' => 'Male', 'PRELIM' => 1.12, 'MIDTERM' => 1.21, 'FINALS' => 1.55, 'colleges' => 'CoEng'],
        ['name' => 'Mark', 'course' => 'Electronics Engineering', 'gender' => 'Male', 'PRELIM' => 1.61, 'MIDTERM' => 1.19, 'FINALS' => 1.92, 'colleges' => 'CoEng'],
        ['name' => 'Kris', 'course' => 'Tourism Management', 'gender' => 'Female', 'PRELIM' => 1.80, 'MIDTERM' => 1.49, 'FINALS' => 1.23, 'colleges' => 'CHI'],
        ['name' => 'Mae', 'course' => 'Hospital Management', 'gender' => 'Female', 'PRELIM' => 1.10, 'MIDTERM' => 1.02, 'FINALS' => 1.18, 'colleges' => 'CHI' ],
        ['name' => 'Danny', 'course' => 'Business Administration', 'gender' => 'Male', 'PRELIM' => 1.90, 'MIDTERM' => 1.85, 'FINALS' => 1.51, 'colleges' => 'COBA' ],
        ['name' => 'Karl', 'course' => 'Office Administration', 'gender' => 'Male', 'PRELIM' => 1.18, 'MIDTERM' => 1.74, 'FINALS' => 1.36, 'colleges' => 'COBA' ],
        ['name' => 'Yow', 'course' => 'Civil Engineering', 'gender' => 'Male', 'PRELIM' => 1.58, 'MIDTERM' => 1.25, 'FINALS' => 1.09, 'colleges' => 'CoEng' ],
        ['name' => 'Sarah', 'course' => 'Hotel Management', 'gender' => 'Female', 'PRELIM' => 1.93, 'MIDTERM' => 1.38, 'FINALS' => 1.14, 'colleges' => 'CHI' ],
        ['name' => 'Kaye', 'course' => ' Hospital Management', 'gender' => 'Female', 'PRELIM' => 1.44, 'MIDTERM' => 1.32, 'FINALS' => 1.85, 'colleges' => 'CHI' ],
        ['name' => 'Jake', 'course' => 'Hotel Management', 'gender' => 'Male', 'PRELIM' => 1.2, 'MIDTERM' => 1.01, 'FINALS' => 1.11, 'colleges' => 'CHI' ],
        ['name' => 'Mike', 'course' => 'Computer Engineering', 'gender' => 'Male', 'PRELIM' => 1.14, 'MIDTERM' => 1.71, 'FINALS' => 1.76, 'colleges' => 'CoEng' ],
        ['name' => 'Kimmy', 'course' => 'Civil Engineering', 'gender' => 'Female', 'PRELIM' => 1.04, 'MIDTERM' => 1.17, 'FINALS' => 1.13, 'colleges' => 'CoEng' ],
        ['name' => 'Jenny', 'course' => 'Tourism Management', 'gender' => 'Female', 'PRELIM' => 1.33, 'MIDTERM' => 1.22, 'FINALS' => 1.01, 'colleges' => 'CHI' ],
        ['name' => 'Alaiza', 'course' => 'Office Administration', 'gender' => 'Female', 'PRELIM' => 1.22, 'MIDTERM' => 1.72, 'FINALS' => 1.63, 'colleges' => 'COBA' ],
        ['name' => 'Nikki', 'course' => 'Business Administration', 'gender' => 'Female', 'PRELIM' => 1.11, 'MIDTERM' => 1.28, 'FINALS' => 1.75, 'colleges' => 'COBA' ],
        ['name' => 'Ben', 'course' => 'Electronics Engineering', 'gender' => 'Male', 'PRELIM' => 1.16, 'MIDTERM' => 1.49, 'FINALS' => 1.05, 'colleges' => 'CoEng' ],
        ['name' => 'Princess', 'course' => 'Human Resource', 'gender' => 'Female', 'PRELIM' => 1.88, 'MIDTERM' => 1.42, 'FINALS' => 1.77, 'colleges' => 'COBA' ],
        ['name' => 'Rudy', 'course' => 'Human Resource', 'gender' => 'Male', 'PRELIM' => 1.15, 'MIDTERM' => 1.40, 'FINALS' => 1.01, 'colleges' => 'COBA' ]
        ];

    $studentGradeFirst;
    $i = 0;
    $j = 0;

    foreach ($students as $student) {
        $studentGradeFirst[$i]['grade'] = number_format(($student['PRELIM']+$student['MIDTERM']+$student['FINALS'])/3, 2);
        $studentGradeFirst[$i]['name'] = $student['name'];
        $studentGradeFirst[$i]['colleges'] = $student['colleges'];
        $studentGradeFirst[$i]['course'] = $student['course'];

        $i++;
    }

sort($studentGradeFirst);

echo "Here are the list of Students that are Qualified for Suma Cum Laude: (Students with no lower than 1.20 of average): <br>";
for ($k = 0; $k < count($studentGradeFirst); $k++) {
    if ($studentGradeFirst[$k]['grade'] <= 1.20) {
        echo $studentGradeFirst[$k]['name']." is qualified for Suma Cum Laude from ".$studentGradeFirst[$k]['colleges']." with a course of ".$studentGradeFirst[$k]['course']." with an average of ".$studentGradeFirst[$k]['grade']."<br>";
    }
}
echo "<br><br>";

echo "Here are the list of Students that are Qualified for Magna Cum Laude: (Students with no lower than 1.30 of average): <br>";
for ($l = 0; $l < count($studentGradeFirst); $l++) {
    if ($studentGradeFirst[$l]['grade'] > 1.20 && $studentGradeFirst[$l]['grade'] <= 1.30 ) {
        echo $studentGradeFirst[$l]['name']." is qualified for Cum Laude from ".$studentGradeFirst[$l]['colleges']." with a course of ".$studentGradeFirst[$l]['course']." with an average of ".$studentGradeFirst[$l]['grade']."<br>";
    }
}
echo "<br><br>";

echo "Here are the list of Students that are Qualified for Cum Laude: (Students with no lower than 1.40 of average): <br>";
for ($m = 0; $m < count($studentGradeFirst); $m++) {
    if ($studentGradeFirst[$m]['grade'] > 1.30 && $studentGradeFirst[$m]['grade'] <= 1.40) {
        echo $studentGradeFirst[$m]['name']." is qualified for Suma Cum Laude from ".$studentGradeFirst[$m]['colleges']." with a course of ".$studentGradeFirst[$m]['course']." with an average of ".$studentGradeFirst[$m]['grade']."<br>";
    }
}


?>