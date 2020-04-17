<?php
  $reportedCases = 57;
  $currentlyInfected = $reportedCases * 10;
  $severeImpact = $reportedCases * 50;
  $infectionsByRequestedTime = $currentlyInfected * 512;
  $infectionsperday = $reportedCases;
  $infectionsperweek = $infectionsperday * 7;
  $infectionspermonth = $infectionsperweek * 30;
  $severeCasesByRequestedTime = $infectionsByRequestedTime * 0.15;
  $totalHospitalBeds = $severeCasesByRequestedTime;
  $hospitalBedsByRequestedTime = $totalHospitalBeds * 0.35;
  $casesForICUByRequestedTime = $infectionsByRequestedTime * 0.05;
  $casesForVentilatorsByRequestedTime = $infectionsByRequestedTime * 0.02;
  $dollarsInFlight = ($infectionsByRequestedTime * 0.65 * 1.5) / 30;
  echo '<ul>';
  echo $reportedCases;
  echo '</ul>';
  echo '<ul>';
  echo $currentlyInfected;
  echo '</ul>';
  echo '<ul>';
  echo $severeImpact;
  echo '</ul>';
  echo '<ul>';
  echo $infectionsByRequestedTime;
  echo '</ul>';
  echo '<ul>';
  echo  $severeCasesByRequestedTime;
  echo '</ul>';
  echo '<ul>';
  echo  $totalHospitalBeds;
  echo '</ul>';
  echo '<ul>';
  echo  $hospitalBedsByRequestedTime;
  echo '</ul>';
  echo '<ul>';
  echo  $casesForICUByRequestedTime;
  echo '</ul>';
  echo '<ul>';
  echo  $casesForVentilatorsByRequestedTime;
  echo '</ul>';
  echo '<ul>';
  echo  $dollarsInFlight;
  echo '</ul>';
  
?>

<!DOCTYPE html>
<html>
<head>
<title>Estimate</title>
</head>
<body>
</body>


</html>