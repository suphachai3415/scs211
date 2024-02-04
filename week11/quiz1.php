<?php
$movies_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"),true);
$movies = $movies_obj["people"];
?>

<?php foreach($movies as $row){ ?>
    <div><?=$row["name"]?> | <?=$row["role"]?></div>/ <img height = 100 px src = "<?=$row["image"]?>"</div>
<?php } ?>