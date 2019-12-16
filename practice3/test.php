<html>

<body>
    <?php
    $person = array("id"=>"3","name"=>"john","level"=>5);
    






    ?>
    <table border="1">

        <tr>
            <th>รหัส</th>
            <th><?php echo $person['id'] ?></th>
        </tr>
        <tr>
            <th>ชื่อ</th>
            <th><?php echo $person['name'] ?></th>

        </tr>
        <tr>
            <th>ระดับ</th>
            <th><?php  for ($i=0; $i< $person['level']; $i++) {
 echo ("*");} ?></th>

        </tr>

    </table>

</body>

</html>