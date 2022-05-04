<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= ASSETS_URL ?>style.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS_URL ?>app.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="" id="formId">
					<div>
						<input type="text" name="data1">
					</div>
					<div>
						<input type="text" name="data2">
					</div>
					<div>
						<input type="text" name="data3">
					</div>
					<div>
						<input type="text" name="data4">
					</div>

					<div>
						<button class="btn btn-success" type="button" id="submitButton">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
