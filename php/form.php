
<!DOCTYPE html>
<html lang="en">
<head>
	<title>訂購表單</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">咖啡咖啡</h4>
  <p>填表單訂咖啡 咖啡咖啡</p>
  <hr>
  <p class="mb-0">請輸入以下資訊</p>
</div>

<div class="alert alert-primary" role="alert">
  咖啡咖啡
</div>

<table class="table table-sm table-hover " style="text-align:center;">
	<form style="text-align:center;" method="POST" action='insert.php'>
        <tr style="text-align:center;">
			<td>姓名：<input type='text' name='name'></td>
			<td>電話: <input type='number' name='phone'></td>
			<td>
				<input type='hidden' name='date' value=<?php echo date("Y/m/d") ?>>
				<?php echo date("Y/m/d") ?>
			</td>
			<td><button class="btn btn-outline-success btn-sm" type='submit'>送出</button></td>
		</tr>
	</form>
<table>

</body>


<!--BOOTSTRAP的東西------------------------------------------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</html>





