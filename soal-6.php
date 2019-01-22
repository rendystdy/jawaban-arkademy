<?php
$con = mysqli_connect("localhost","root","","db_arkademy");
$q = $con->query("SELECT persons.*FROM persons ORDER BY name ASC");
?>

    			<table border="1">
					<tr>
						<th>Persons_id</th>
						<th>Name</th>
						<th>Persons_Hobbies</th>
					</tr>
					<?php
					while ($data = mysqli_fetch_assoc($q)) {
						$s = $con->query("SELECT *FROM hobbies WHERE person_id='$data[id]'");
					?>
					<tr>
						<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['name']; ?></td>
						<td>
							<?php
							while ($datas = mysqli_fetch_assoc($s)) {
								echo $datas['nameh'].',';
							}
							?>
						</td>
					</tr>
					<?php
					}
					?>
				</table>