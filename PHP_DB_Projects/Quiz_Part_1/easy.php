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
$k = 0; //Counter Variables

$COBAis = " are ";
$CHIis = " are ";
$CoEngis = " are ";

$COBABOYS = 0;
$COBAGIRLS = 0;

$ENGBOYS = 0;
$ENGGIRLS = 0;

$CHIBOYS = 0;
$CHIGIRLS = 0;

$COBplu1 = "girls";
$Engplu1 = "girls";
$CHIplu1 = "girls";
$COBplu = "boys";
$Engplu = "boys";
$CHIplu = "boys";

$COBprint1 = null;
$Engprint1 = null;
$CHIprint1 = null;
$COBprint = null;
$Engprint = null;
$CHIprint = null;

$COBand = null;
$Engand = null;
$CHIand = null; //Placeholder Variables


//Student to College Sorter

foreach ($students as $student) {
    if ( $student["colleges"] === "COBA") {
        if ($student["gender"] === "Female") {
            $COBAGIRLS++;
        } else {
            $COBABOYS++;
        }

        $COBA[$i] = $student['name'].", ";
        $i++;
    } else if ( $student["colleges"] === "CoEng") {
        if ($student["gender"] === "Female") {
            $ENGGIRLS++;
        } else {
            $ENGBOYS++;
        }

        $CoEng[$j] = $student['name'].", ";
        $j++;
    } else {
        if ($student["gender"] === "Female") {
            $CHIGIRLS++;
        } else {
            $CHIBOYS++;
        }

        $CHI[$k] = $student['name'].", ";
        $k++;
    }
}

// Singular/Plural/None Checker
if ($COBAGIRLS === 1 ) {
    $COBplu1 = "girl";
    $COBprint1 = " ".$COBAGIRLS." ".$COBplu1." ";
} else if ($COBAGIRLS === 0) {
    $COBplu1 = null;
    $COBprint1 = null;
} else if ($COBAGIRLS > 1) {
    $COBprint1 = " ".$COBAGIRLS." ".$COBplu1." ";
}

if ($ENGGIRLS === 1 ) {
    $Engplu1 = "girl";
    $Engprint1 = " ".$ENGGIRLS." ".$Engplu1." ";
} else if ($ENGGIRLS === 0) {
    $Engplu1 = null;
    $Engprint1 = null;
} else if ($ENGGIRLS > 1) {
    $Engprint1 = " ".$ENGGIRLS." ".$Engplu1." ";
}

if ($CHIGIRLS === 1 ) {
    $CHIplu1 = "girl";
    $CHIprint1 = " ".$CHIGIRLS." ".$CHIplu1." ";
} else if ($CHIGIRLS === 0) {
    $CHIplu1 = null;
    $CHIprint1 = null;
} else if ($CHIGIRLS > 1) {
    $CHIprint1 = " ".$CHIGIRLS." ".$CHIplu1." ";
}


if ($COBABOYS === 1 ) {
    $COBplu = "boy";
    $COBprint = " ".$COBABOYS." ".$COBplu." ";
} else if ($COBABOYS === 0) {
    $COBplu = null;
    $COBprint = null;
} else if ($COBABOYS > 1) {
    $COBprint = " ".$COBABOYS." ".$COBplu." ";
}

if ($ENGBOYS === 1 ) {
    $Engplu = "boy";
    $Engprint = " ".$ENGBOYS." ".$Engplu." ";
} else if ($ENGBOYS === 0) {
    $Engplu = null;
    $Engprint = null;
} else if ($ENGBOYS > 1) {
    $Engprint = " ".$ENGBOYS." ".$Engplu." ";
}

if ($CHIBOYS === 1 ) {
    $CHIplu = "boy";
    $CHIprint = " ".$CHIBOYS." ".$CHIplu." ";
} else if ($CHIBOYS === 0) {
    $CHIplu = null;
    $CHIprint = null;
} else if ($CHIBOYS > 1) {
    $CHIprint = " ".$CHIBOYS." ".$CHIplu." ";
}


// Use of AND word checker

if ($COBABOYS != 0 && $COBAGIRLS != 0) {
    $COBand = " and";
}

if ($ENGBOYS != 0 && $ENGGIRLS != 0) {
    $Engand = " and";
}

if ($CHIBOYS != 0 && $CHIGIRLS != 0) {
    $CHIand = " and";
}


if ($COBABOYS == 1 && $COBAGIRLS == 0 || $COBABOYS == 0 && $COBAGIRLS == 1) {
  $COBAis = " is ";
}

if ($CHIBOYS == 1 && $CHIGIRLS == 0 || $CHIBOYS == 0 && $CHIGIRLS == 1) {
  $CHIis = " is ";
}

if ($ENGBOYS == 1 && $ENGGIRLS == 0 || $ENGBOYS == 0 && $ENGGIRLS == 1) {
  $CoEngis = " is ";
}

// Output

if($COBA != 0) {
    echo "The Student Representative for COBA are ";
    foreach ($COBA as $cob) {
        echo $cob;
    }

    echo "<br>";
    echo "There".$COBAis.$COBprint1.$COBand.$COBprint."in COBA Representatives.";
    echo "<br><br>";

} else {
    echo "There are no Student Representative for COBA";
    echo "<br><br>";
}


if($CoEng != 0) {
    echo "The Student Representative for CoEng are ";
    foreach ($CoEng as $eng) {
        echo $eng;
    }

    echo "<br>";
    echo "There".$CoEngis.$Engprint1.$Engand.$Engprint."in CoEng Representatives.";
    echo "<br><br>";
} else {
    echo "There are no Student Representative for CoEng";
}


if($CHI != 0) {
    echo "The Student Representative for CHI are ";
    foreach ($CHI as $chi) {
        echo $chi;
    }

    echo "<br>";
    echo "There".$CHIis.$CHIprint1.$CHIand.$CHIprint."in CHI Representatives.";
    echo "<br><br>";
} else {
    echo "There are no Student Representative for CHI";
    echo "<br><br>";
}




?>
