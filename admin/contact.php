<?php
require_once('./includes/head.inc.php');

require_once('../includes/init.inc.php');


$pdostatement = $pdo->query("SELECT * FROM contact ORDER BY date DESC ");

$i = 0;

$totalrow = $pdostatement->rowCount();


while ($contact = $pdostatement->fetch(PDO::FETCH_ASSOC)) {

	$contacts[$i]['name'] = $contact['name'];
	$contacts[$i]['email'] = $contact['email'];
	$contacts[$i]['subject'] = $contact['subject'];
	$contacts[$i]['content'] = $contact['content'];
	$contacts[$i]['date'] = $contact['date'];
	$contacts[$i]['id_contact'] = $contact['id_contact'];
	$i++;
}


?>


<section>
	<div class="container">
		<h2>Received contacts (<?php echo $totalrow ?>)</h2>
		<div class="table-header">
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>date</th>
						<th>Subject</th>
						<th>Content</th>
					</tr>
				</thead>
			</table>
		</div>
		<div class="table-content">
			<table>
				<tbody>
					<?php foreach ($contacts as $contact) : ?>
						<tr>
							<td><?php echo $contact['name'] ?></td>
							<td><?php echo $contact['email'] ?></td>
							<td><?php echo $contact['date'] ?></td>
							<td><?php echo $contact['subject'] ?></td>
							<td><a href="./contact-single.php?id=<?php echo $contact['id_contact'] ?>">Open</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

</section>


<?php
require_once('./includes/footer.inc.php');
?>