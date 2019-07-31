<div class="container" style="margin-top: 10px">
<?php
if ($page == 'index')
{
?>

<ul class="breadcrumb">
  <li class="active">Home</li>
</ul>

<?php
} elseif ($page == 'browse')
{
?>

<ul class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">browse</li>
</ul>

<?php
}
?>
</div>
