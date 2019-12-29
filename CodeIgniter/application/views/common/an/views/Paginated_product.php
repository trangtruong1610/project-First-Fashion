<!doctype html>
<html lang="en">
<head>
    <title>Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Local Sources -->
    <link rel="stylesheet" href="<?php base_url('CodeIgniter/An/assets/css/styles.css') ?>">
    <script src="<?php echo base_url('CodeIgniter/An/assets/scripts/scripts.js') ?>"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
</head>
<body>
<div class="container-fluid debug">
	<div class="product-menu-item">
	<?php
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('file', 'product.file_id = file.file_id', 'left');
		$query = $this->db->get();
		$product_list = $query->result_array();
		$record_per_row = 3;
		$row = round(count($product_list) / $record_per_row,0);
		$remain_record = count($product_list) % $record_per_row;
		if($remain_record > 0) {
			$row_of_list = $row++;
		}
			for ($i = 0; $i < $row_of_list; $i++) {
				$n = $i*$record_per_row;
				$add_j_loop = $remain_record * $record_per_row;
				if($i > $row) {
					$j_loop = $add_j_loop;
				} else {$j_loop = $record_per_row;}
	?>
		<div class="card-decks">
			<?php
			for($j = 0; $j < $j_loop; $j+=$n) {
			?>
			<div class="card">
				<img class="card-img" src="<?php echo $product_list[$j]['ProductName']; ?>" alt="">
				<div class="card-body">
					<h4 class="card-title"><?php echo $product_list[$j]['ProductName']; ?></h4>
					<p class="card-text"><?php echo $product_list[$j]['ListPrice']; ?></p>
				</div>
			</div>
			<?php } ?>
		</div>
	<?php }?>
	</div>
</div>
</body>
</html>
