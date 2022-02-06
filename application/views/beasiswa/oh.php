<?php

$sumber = file_get_contents("assets2/data.geojson");
$data = json_decode($sumber);

?>

<div class="content">
<div class="card-body">
    <div class="table-responsive">
     <table class="table">
        <thead class=" text-primary">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jalan</th>
        <th>Kecamatan</th>
        <th>Spec</th>
        <th>Rating</th>
        <th>Kondisi</th>  
</tr>

  <?php
  foreach ($data as $value){
  ?>
  <tr> 
    <th><?php echo $value->NO. "<br>";?></th>
    <th><?php echo $row['Nama Warnet']?></th>
    <th><?php echo $row['Jalam']?></th>
    <th><?php echo $row['Kecamatan']?></th>
    <th><?php echo $row['Spec PC']?></th>
    <th><?php echo $row['Rating']?></th>
    <th><?php echo $row['Kondisi']?></th>
  </tr>
<?php
  }
  ?>            
    </thead>
</table>
</div>
