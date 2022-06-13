<?php 
include_once("db_connect.php");
include("header.php"); 
?>
<title>Page édition table BDD</title>
<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<?php include('container.php');?>
<div class="container home">	
	<h2>Create Live Editable Table with jQuery, PHP and MySQL</h2>		 
	<table id="data_table" class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Nombre</th>
				<th>Prix_unitaire</th>	
				<th>Prix_total</th>
				<th>Description</th>
				<th>Date_premiere</th>
				<th>Date_derniere</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql_query = "SELECT id, Nom, Nombre , Prix_unitaire, Prix_total, Description, Date_premiere, Date_derniere FROM BDD LIMIT 10";
			$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $developer = mysqli_fetch_assoc($resultset) ) {
			?>
			   <tr id="<?php echo $developer ['id']; ?>">
			   <td><?php echo $developer ['id']; ?></td>
			   <td><?php echo $developer ['Nom']; ?></td>
			   <td><?php echo $developer ['Nombre']; ?></td>
			   <td><?php echo $developer ['Prix_unitaire']; ?></td>   
			   <td><?php echo $developer ['Prix_total']; ?></td>
			   <td><?php echo $developer ['Description']; ?></td>   
			   <td><?php echo $developer ['Date_premiere']; ?></td>  
			   <td><?php echo $developer ['Date_derniere']; ?></td>  
			   </tr>
			<?php } ?>
		</tbody>
    </table>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="">Clickable button</a>		
	</div>
</div>
<script type="text/javascript" src="custom_table_edit.js"></script>
<?php include('footer.php');?>
 



                                                                                                       