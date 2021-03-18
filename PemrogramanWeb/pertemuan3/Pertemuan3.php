<!-- pengulangan for -->
<?php
echo "<h2>Pengulangan 1 - 10</h2>";
for ($i=1; $i<=10; $i++)
{
	echo $i . "<br/>";
}
?>

<!-- pengulangan while -->
<?php
    echo "<h2>Pengulangan 1 - 10</h2>";
    $i=1;
    while ($i<=10)
    {
        echo $i . "<br />";
        $i=1;
        while ($i<=10)
        {
            echo $i . "<br />";
            $i++;
        }
    }
?>

<!-- Pengulangan do while -->
<?php
    echo "<h2>Pengulangan 1 - 10</h2>";
    $i=1;
    do
    {
            echo $i . "<br />";
            $i++;
        
    }
    while ($i<=10);
?>

<!-- pengkondisian if -->
if ($userid == "informatika")
{
    echo "benar";
}

<!-- pengkondisian if else -->
if ($userid == "informatika")
{
    echo "benar";
}   
    {
        echo "salah";
    }

<!-- pengkondisan if else if -->
$nama_hari = date ("1")
if ($nama_hari == "sunday")
{
    echo "Minggu";
}   
elseif ($nama_hari == "Monday")
    {
        echo "senin";
    }
else
    {
        echo "selasa"
    }

<!-- pengkondisian switch -->
$nama_hari = date(“l”);
switch ($nama_hari)
    {
        case "Sunday" : { echo "Minggu"; }
                break;
        case "Monday" : echo "Senin";
                break;
        case "Tuesday" : echo "Selasa";
                break;
        default : echo "Sabtu";
    }
