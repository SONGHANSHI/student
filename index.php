<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');
        $students = array();
        $first = new Student();
        $first->surname = "honqian";
        $first->first_name = "zhang";
        $first->add_email('home', 'zhang@doe.com');
        $first->add_email('work', 'zhange@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $first->status = "Junior";
        $students['1'] = $first;

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'feufh@braniacs.com');
        $second->add_email('work1', 'iuseafh@bcit.ca');
        $second->add_email('work2', 'sgrg@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $second->status = " pupil";
        $students['2'] = $second;
        
        $third = new Student();
        $third->surname = "fly";
        $third->first_name = "caiquan";
        $third->add_email('home', 'dog@doe.com');
        $third->add_email('work', 'dog@mcdonalds.com');
        $third->add_grade(65);
        $third->add_grade(75);
        $third->add_grade(55);
        $third->status = "senior";
        $students['3'] = $third;
        
        $fourth = new Student();
        $fourth->surname = "SonHan";
        $fourth->first_name = "Shi";
        $fourth->add_email('home', '973305062@qq.com');
        $fourth->add_email('work', '98489@bcit.com');
        $fourth->add_grade(65);
        $fourth->add_grade(75);
        $fourth->add_grade(55);
        $fourth->status = "freshman";
        $students['4'] = $fourth;
        ksort($students); 
        foreach ($students as $student)
            echo $student->toString();
        ?> 
    </body>
</html>
