<div class="container">
<div class="row">
	<div class="col-md-4 d-flex justify-content-between">
        </div>
	<div class="col-md-8 align-self-end">
		<?=$this->pagination->create_links(); ?>
	</div>
	</div><div class="container"> <div class="container">
		
			<img src="<?php echo base_url();?>gambar/h.png" class="card-img-top" alt="...">
			<a class="btn btn-light me-md-2" type="button" href="<?=base_url();?>https://open.spotify.com/artist/3Nrfpe0tUJi4K4DXYWgMUX?si=fAbMBcgqQkGt6zVvF2jGgQ">BTS</a>
			<a class="btn btn-light me-md-2" type="button" href="<?=base_url();?>https://open.spotify.com/artist/0ghlgldX5Dd6720Q3qFyQB?si=a0myprMWRJW5AyfQxvXVfg">TXT</a>
			<a class="btn btn-light me-md-2" type="button" href="<?=base_url();?>https://open.spotify.com/artist/5t5FqBwTcgKTaWmfEbwQY9?si=yiP1nRC_R9m8hZZcDh9kpw">EN-</a>
			<a href="<?= base_url() ?>post/tambah" class="btn btn-light align-self-center">Tambah Album</a>
			<div class="row mt-3"> 

	<?php if (isset($posts)) : ?>
		<?php foreach ($posts as $post) : ?>
		<div class="card text-dark bg-light col-md-4 mb-3"><br>
			<h4 class="text-truncate"><?=$post['judul'];?></h4>
			<p class="" style="-webkit-line-clamp:8; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient:vertical;"><?=$post['isi'];?></p>
			<div class="btn-group" role="group" aria-label="Basic outlined example">
					
                    <a role="button" href="<?= base_url() ?>post/update/<?= $post['id_post'] ?>" class="btn btn-outline-dark">Update</a>
                    <a role="button" href="<?= base_url() ?>post/hapus/<?= $post['id_post'] ?>" class="btn btn-outline-dark" onclick="return confirm('Yakin ingin menghapus Album?')">Hapus</a><br>
            </div> <br>
		</hr>
	</div>
<?php endforeach; ?>
<?php endif; ?>
</div>
</div>