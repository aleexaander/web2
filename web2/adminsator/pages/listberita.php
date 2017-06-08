<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>Judul</th>
			<th>Isi</th>
		</tr>
	</thead>
	<tbody>
 <?php foreach ($isi_berita as $ib) { ?>
		<tr>
			<td><?= $ib['id_berita'] ?></td>
			<td><?= $ib['judul'] ?></td>
			<td><?= $ib['isi'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
