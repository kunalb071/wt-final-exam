$basic_Salary;
$hra;
$da;
$gross_Salary;

if($basic_Salary <1500)
    {
        $hra=10*$basic_Salary/100;
        $da =90/100*$basic_Salary;
        $gross_Salary = $basic_Salary + $hra + $da;
        echo "gross_Salary is : ".$gross_Salary
    }
if($basic_Salary >= 1500)
    {
        $hra=500;
        $da = 98/100*$basic_Salary;
        $gross_Salary = $basic_Salary + $hra + $da;
        echo "gross_Salary is : ".$gross_Salary
    }

