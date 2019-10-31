<?php
/* !Foreach Loops! */ 

include ('list.php');

/* Foreach Loop key and value */

foreach ($list as $key => $item){
    echo $key . ' = ' . $item['title'] . "<br />\n";
}
/* Output
0 = Laundry
1 = Dishes
2 = Dust
3 = Vacuum
4 = Make Dinner
5 = Clean Out Fridge
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