<?php

$gpa = 3.22;

if ($gpa ==5 ) {
    echo "You got GPA A+";
}
elseif ($gpa>= 4.00) {
    echo "You got GPA A";
}

elseif ($gpa>= 3.67) {
    echo "You got GPA A-";
}

elseif ($gpa>= 3.33) {
    echo "You got GPA B+";
}

elseif ($gpa>= 3.00) {
    echo "You got GPA B";
}

elseif ($gpa>= 2.67) {
    echo "You got GPA B-";
}

elseif ($gpa>= 2.33) {
    echo "You got GPA C+";
}

elseif ($gpa>= 2.00) {
    echo "You got GPA C";
}

elseif ($gpa>= 1.00) {
    echo "You got GPA D";
}

else {
    echo "You are FAILED";
}


?>