<!-- "1". I create a function call get_current_year and use the date("Y") method to store the current year in the variable $current_year. The function will echo the variable &current_year where the function 'get_current_year' will be called -->

<?php function get_current_year(){

    $current_year = date("Y");

    echo $current_year;
}