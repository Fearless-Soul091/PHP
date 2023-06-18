<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Example</title>
</head>
<body>
    <pre>
        <?php 
        $person = array(15,'Jishesh','Lalitpur',24154.24,true);
        print_r($person);
        echo '<br>';        // to change index number. i.e [100=> 12,.. so without any num direct value(12) is a 
                        //                                                  index 1].
        var_dump($person);
         ?>
         <table border =1>
             <tr>
                 <th>Roll No.</th>
                 <th><?php echo $person[0] ?></th>
             </tr>
             <tr>
                 <th>Name</th>
                 <th><?php echo $person[1] ?></th>
             </tr>
             <tr>
                 <th>Address</th>
                 <th><?php  echo $person[2] ?></th>
             </tr>
             <tr>
                 <th>Balance Point</th>
                 <th><?php echo $person[3] ?></th>
             </tr>
             <tr>
                 <th>Logic</th>
                 <th><?php echo $person[4] ?></th>
             </tr>
         </table>
                            //true = 1 and false = 0
    </pre>

</body>
</html>