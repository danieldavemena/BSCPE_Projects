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

$i = 0;
$j = 0;
$k = 0;
$l = 0; 

$CoEng;
$COBA;
$CHI; // Placeholder Variables

// Separating Students by Grade and Name
foreach ($students as $student) {
    switch ($student['colleges']) {
        case "CoEng":
            $CoEngGrade[$i] = number_format(($student['PRELIM']+$student['MIDTERM']+$student['FINALS'])/3, 2);
            $CoEng[$i]['grade'] = $CoEngGrade[$i];
            $CoEng[$i]['name'] =  $student['name'];
            $CoEng[$i]['course'] = $student['course'];
            // echo $CoEng[$i]['grade'];
            $i++;
            break;
        case "CHI":
            $CHIGrade[$j] = number_format(($student['PRELIM']+$student['MIDTERM']+$student['FINALS'])/3, 2);
            $CHI[$j]['grade'] = $CHIGrade[$j];
            $CHI[$j]['name'] =  $student['name'];
            $CHI[$j]['course'] = $student['course'];
            // echo $CHI[$j]['grade'];
            $j++;
            break;
        case "COBA":
            $COBAGrade[$k] = number_format(($student['PRELIM']+$student['MIDTERM']+$student['FINALS'])/3, 2);
            $COBA[$k]['grade'] = $COBAGrade[$k];
            $COBA[$k]['name'] =  $student['name'];
            $COBA[$k]['course'] = $student['course'];
            // echo $COBA[$k]['grade'];
            $k++;
            break;
    } 
}

sort($CoEng);
sort($CHI);
sort($COBA); // Sorting by Grade


// Output
echo "The TOP 3 students on CoEng are: <br>";
for ($l = 0; $l < 3; $l++) {
    $rankEng = $l + 1;
    echo "Top ".$rankEng."----- ".$CoEng[$l]['name']." with an average of ".$CoEng[$l]['grade']." from ".$CoEng[$l]['course']."<br>";
}
echo "<br>";

echo "The TOP 3 students on CHI are: <br>";
for ($m = 0; $m < 3; $m++) {
    $rankCHI = $m + 1;
    echo "Top ".$rankCHI."----- ".$CHI[$m]['name']." with an average of ".$CHI[$m]['grade']." from ".$CHI[$m]['course']."<br>";
}
echo "<br>";

echo "The TOP 3 students on COBA are: <br>";
for ($n = 0; $n < 3; $n++) {
    $rankCOBA = $n + 1;
    echo "Top ".$rankCOBA."----- ".$COBA[$n]['name']." with an average of ".$COBA[$n]['grade']." from ".$COBA[$n]['course']."<br>";
}

?>