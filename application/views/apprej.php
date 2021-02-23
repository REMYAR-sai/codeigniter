<html>
	<head>
		<title>MY_APPROVE_FORM</title>
	</head>
		<style>
			th,td{border:1px solid;
			padding:15px;border-collapse:collapse;text-align:center;}
			table{border-collapse:collapse;}
		</style>
			<body>
				<form method="post" action="">	
				<table>
					
						<tr>
							<th>NAME</th>
							<th>LASTNAME</th>
							<th>USERNAME</th>
							<th>MOBILE</th>
							<th>EMAIL</th>
							<th colspan="2">status</th>
						</tr>
							
							<?php
				
					if (isset($n))
					{
						foreach ($n->result() as $row)
						{
				?>
							<tr>
								<td><?php echo $row->firstname;?></td>
								<td><?php echo $row->lastname;?></td>
								<td><?php echo $row->username;?></td>
								<td><?php echo $row->mobile;?></td>
								<td><?php echo $row->email;?></td>
								<?php
								if($row->status==1)
								{
									?>
									<td>Approved<td>
									
									<a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a></td>
									<?php

								}
								elseif($row->status==2)
								{
									?>
									<td>Rejected</td>
									
									<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a></td>
									<?php
								}
								else
								{
									?>
									<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a></td>
									<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a></td>
									<?php
								}
								?>

							</tr>
						<?php
						}
						}
						?>		
							
				</form>
			</body>
</html>