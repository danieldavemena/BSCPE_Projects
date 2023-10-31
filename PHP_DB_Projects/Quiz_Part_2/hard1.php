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

$i = 0;
$j = 0;

$MathRankA = null;
$ScienceRankA = null;
$FilipinoRankA = null;
$EnglishRankA = null;

$MathRankB = null;
$ScienceRankB = null;
$FilipinoRankB = null;
$EnglishRankB = null;

$OverallAverageA = null;
$OverallAverageB = null; // Placeholder Variables

// Separate Students by Grade, Name, and Subject
	foreach($students as $student) {
		switch($student['section']) {
			case "II-A":
				$MathRankA[$i]['grade'] = $student['Math'];
				$ScienceRankA[$i]['grade'] = $student['Science'];
				$FilipinoRankA[$i]['grade'] = $student['Filipino'];
				$EnglishRankA[$i]['grade'] = $student['English'];
				$OverallAverageA[$i]['grade'] = number_format(($student['Math']+$student['Science']+$student['Filipino']+$student['English'])/4, 2);
				$OverallAverageA[$i]['name'] = $MathRankA[$i]['name'] = $ScienceRankA[$i]['name'] = $FilipinoRankA[$i]['name'] = $EnglishRankA[$i]['name'] = $student['name'];
				$i++;
				break;
			case "II-B":
				$MathRankB[$j]['grade'] = $student['Math'];
				$ScienceRankB[$j]['grade'] = $student['Science'];
				$FilipinoRankB[$j]['grade'] = $student['Filipino'];
				$EnglishRankB[$j]['grade'] = $student['English'];
				$OverallAverageB[$j]['grade'] = number_format(($student['Math']+$student['Science']+$student['Filipino']+$student['English'])/4, 2);
				$OverallAverageB[$j]['name'] = $MathRankB[$j]['name'] = $ScienceRankB[$j]['name'] = $FilipinoRankB[$j]['name'] = $EnglishRankB[$j]['name'] = $student['name'];
				$j++;
				break;
		}
	}

// Sort Variables by Grade
	sort($MathRankA);
	sort($ScienceRankA);
	sort($FilipinoRankA);
	sort($EnglishRankA);

	sort($MathRankB);
	sort($ScienceRankB);
	sort($FilipinoRankB);
	sort($EnglishRankB);

	sort($OverallAverageA);
	sort($OverallAverageB);


// Output
	echo "II-A<br>";
	echo $MathRankA[0]['name']." got the Highest score in Math with ".$MathRankA[0]['grade']." in II-A<br>";
	echo $ScienceRankA[0]['name']." got the Highest score in Science with ".$ScienceRankA[0]['grade']." in II-A<br>";
	echo $FilipinoRankA[0]['name']." got the Highest score in Filipino with ".$FilipinoRankA[0]['grade']." in II-A<br>";
	echo $EnglishRankA[0]['name']." got the Highest score in English with ".$EnglishRankA[0]['grade']." in II-A<br>";
	echo "<br>";
	echo $OverallAverageA[0]['name']." got the Highest Average in Section II-A<br><br><br>";

	echo "II-B<br>";
	echo $MathRankB[0]['name']." got the Highest score in Math with ".$MathRankB[0]['grade']." in II-B<br>";
	echo $ScienceRankB[0]['name']." got the Highest score in Science with ".$ScienceRankB[0]['grade']." in II-B<br>";
	echo $FilipinoRankB[0]['name']." got the Highest score in Filipino with ".$FilipinoRankB[0]['grade']." in II-B<br>";
	echo $EnglishRankB[0]['name']." got the Highest score in English with ".$EnglishRankB[0]['grade']." in II-B<br>";
	echo "<br>";
	echo $OverallAverageB[0]['name']." got the Highest Average in Section II-B<br><br><br>";

?>
