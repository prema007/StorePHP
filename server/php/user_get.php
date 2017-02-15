<?php
session_start();
?>
<table class="table table-bordered table-hover" style="margin-top: 46px;">
	<thead>
	  <tr>
	    <th>User id</th>
		<th>Name</th>
		<th>User email</th>
	    <th>Messages</th>
        <th>Action</th>
	    
		
	  </tr>
	</thead>
	<tbody>
<?php
include "config.php";
$res = $conn->query("select * from users");
while ($row = $res->fetch_assoc()) {
	
?>
    
	  <tr>
	    <td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['msg']; ?></td>
	    
	  <td>
		 <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
		<a class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $row['id']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</td>
	    </tr>
	 <!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['id']; ?>">Edit User Details</h4>
      </div>
      <div class="modal-body">

<form>

 <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name<?php echo $row['id']; ?>" value="<?php echo $row['name']; ?>">
  </div>
  <div class="form-group">
    <label for="name">Email</label>
      <input type="text" class="form-control" id="email<?php echo $row['id']; ?>" value="<?php echo $row['email']; ?>">
  </div>
  <div class="form-group">
    <label for="name">Message</label>
      <textarea type="text" class="form-control" id="msg<?php echo $row['id']; ?>" value=""><?php echo $row['msg']; ?></textarea>
  </div>
 
</form>

</div>
      
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="updatedata('<?php echo $row['id']; ?>')"class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
  </div>
<?php
}
?>

	</tbody>
      </table>
	  

