<?php
/* !Foreach Loops! */ 

include ('list.php');
//Create filter array 
$filter = array();

/* Foreach Loop key and value */

foreach ($list as $key => $item){
    if($item['complete']) { //If item = complete (only one is complete)
        $filter[] = $key; //Add key to the filter array
        /* echo '<pre>'; //Preformatted text 
        var_dump($key,$item); //Dispaly details of $key and $item 
        echo '</pre>'; */
    }   
}
/* echo '<pre>';
var_dump($filter, $list); //Display output 
echo '</pre>';
*/ 

/* Create Table */
echo '<table>';
echo '<tr>';//Table row
echo '<th>Title</th>';//Table header
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</th>';
foreach($list as $item){//Item becomes associative array with named key and value
    echo '<tr>';//Each iteration add table row
    echo /*Each iteration add table cell */ '<td>' . $item['title'] . "</td> \n";//Echo value of 'title' on each iteration
    echo '<td>' . $item['priority'] . "<td> \n";
    echo '<td>' . $item['due'] . "<td> \n";
    echo '<td>'; 
    if ($item['complete']){ //Add condtional true/false complete/incomplete 
           echo 'Yes';//Print yes if true
    } else {
        echo 'No';//Print no if false      
    }
    echo "<td> \n";
    echo '</tr>';
}
echo '</table>';

?>