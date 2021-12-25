<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {

        /*
        $students = Student::all();
        $students =  Student::where('fullname', 'Phi Van A')->get();
        dd($students);
        foreach ($students as $student) {
            echo $student->FullName . '\n';
           
            if ($student->school = 'Harvard') {
                echo $student->name . '\n';
            }
          
        }

        */
        
         //  dd($products);
        //return view('layouts.products', compact('products'));
            $servername = "localhost";
            $username = "root";
            $password = "VanDat@2021";
            $dbname = "laravel8";
            // Create connection
            $conn =  new \MySQLi($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $username = 'Phi Van A'; // get the input username
            $result = $conn->query("SELECT `firstName`, `currentAddress`, `city` FROM `students` WHERE `firstName` = '$username' LIMIT 1");
            if ($user = $result->fetch_assoc()) {
                echo $user['firstName'] . ' is living at ' . $user['currentAddress'];
                $city = strtoupper($user['city']);
                if (strpos($city, 'T')) {
                    echo "\nThis user's city has a T letter.";
                }
            }
            $conn->close();



           
            //$interger = 123006;

            function CheckBeautifulNumber($interger) {
                $mid = strlen((string)$interger);
                if($mid % 2 == 0)
                {
                    $half = $mid/2;
                    $left = substr($interger,0,$half);
                    $right = substr($interger,$half);
                    $sumeofDigit_left = array_sum(str_split($left));
                    $sumofDigit_right  =array_sum(str_split($right));
                    if($sumeofDigit_left == $sumofDigit_right)
                    {
                        return true;
                    }
                    else{
                        return false;
                    }
                }
                else 
                {
                    return false;
                }
            }


            $check = CheckBeautifulNumber(123006);
       
            var_dump($check);




    }

}
