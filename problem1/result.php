<?php

if(isset($_POST['submit'])){
	/*
	$name = $_POST['name'];
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$phone = $_POST['phoneNumber'];
	$genger = $_POST['gender'];
	$email = $_POST['email'];
	$roll = $_POST['roll'];
	$dept = $_POST['dept'];
	$semester = $_POST['semester'];
	$year = $_POST['year'];
	$ins = $_POST['institution'];
	$session = $_POST['session'];
	$birth = $_POST['birthDate'];
	*/



	// amar function suru
	
	function isName($namecheck){
        $len = strlen($namecheck);
        if($len==0)return "";
        	for($i=0; $i<$len; $i++){
        		if(($namecheck[$i]>='A' && $namecheck[$i]<='Z') ||  ($namecheck[$i]>='a' && $namecheck[$i]<='z') || ($namecheck[$i]=='.') || $namecheck[$i]==' ') continue;
           		 else return "";
        	}
        return $namecheck;
    }

    function isValidGender($gender){
        if($gender=="Male" || $gender=="Female" || $gender=="Other") return true;
            return false;
    }
                

    function isCorrectPhoneNumber($phoneNumber){
        $len = strlen($phoneNumber);
        $i = 0;
        if($len==0) return false;
        if($len!=11)  return false;
        if($len==11 && ($phoneNumber[0]!='0' || $phoneNumber[1]!='1')) return false;
        while($i<$len){
            if(('0'<=$phoneNumber[$i] && $phoneNumber[$i]<='9')){
            	$i++; 
            	continue;
            }
            else return false;
        }
        return true;
        }


     function isRollValid($roll){
        $i = 0;
        $len = strlen($roll);
        if($len!=8)  return false;
        if($roll>=10000000 && $roll<=99999999){
            while($i<$len){
                $num = $roll[$i];
                if('0'<=$num && $num<='9'){
                	 $i++; 
                	 continue;
                }
                else return false;
            }
        }
        else return false;

        return true;
        }


    // amar function ses 



    // name valid check
    $name = isName($_POST["name"]);
    if($name=="") $name = "Invalid Name";


     // father name valid
     $father = isName($_POST["father"]);
    if($name=="") $father = "Invalid Name";


    //mother name valid
    $mother = isName($_POST["mother"]);
    if($name=="") $mother = "Invalid Name";
 

	// email valid hobe
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $email = $_POST['email'];
	else $email = "invalid email";


	// gender valid
	if(isValidGender($_POST["gender"])) $gender = $_POST["gender"];
    else $gender = "Invalid Gender";

    //Birthday Valid
    if(!empty($_POST['birthDate'])) $birth = $_POST['birthDate'];
    else $birth = "Invalid BirthDate";


    // number check
    if(isCorrectPhoneNumber($_POST["phoneNumber"])) $phone = $_POST["phoneNumber"];
    else $phone = "Invalid number";


    // institution valid
    $ins = isName($_POST["institution"]);
    if($ins=="") $ins = "Invalid Institution Name";


    // roll valid
    if(isRollValid($_POST["roll"])) $roll = $_POST["roll"];
    else $roll = "Invalid Roll";


    // department valid
    if(($_POST['dept'])=="CSE" || ($_POST['dept'])=="EEE" || ($_POST['dept'])=="ESE" || ($_POST['dept'])=="STAT") $dept = $_POST['dept'];
    else $dept = "Invalid Department Name";


    // Session valid
    if(($_POST['session'])=="2016" || ($_POST['session'])=="2017" || ($_POST['session'])=="2018" || ($_POST['session'])=="2019" || ($_POST['session'])=="2020") $session = $_POST['session'];
    else $session = "Invalid Department Name";


    // Year valid
    if(($_POST['year'])=="1st" || ($_POST['year'])=="2nd" || ($_POST['year'])=="3rd" || ($_POST['year'])=="4th") $year = $_POST['year'];
    else $year = "Invalid Department Name";


    // semester valid
    if(($_POST['semester'])=="1st" || ($_POST['semester'])=="2nd" ) $semester = $_POST['semester'];
    else $semester = "Invalid Department Name";



    // show data

    echo "<p>Name : "."  ".$name."</p>";
    echo "<p>Father's Name : "."  ".$father."</p>";
    echo "<p>Mother's Name : "."  ".$mother."</p>";
    echo "<p>Birth Date : "."  ".$birth."</p>";
    echo "<p>Gender : "."  ".$gender."</p>";
    echo "<p>Email : "."  ".$email."</p>";
    echo "<p>Phone : "."  ".$phone."</p>";
    echo "<p>Institution : "."  ".$ins."</p>";
    echo "<p>Department : "."  ".$dept."</p>";
    echo "<p>Roll : "."  ".$roll."</p>";
    echo "<p>Year : "."  ".$year."</p>";
    echo "<p>Semester : "."  ".$semester."</p>";
}

?>