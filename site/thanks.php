<!DOCTYPE html>
<html lang="nl">

<head>
	<title>Bedankt</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="#">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico">
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: 'Inter', sans-serif;
			background: #000;
			color: #222;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}

		.thanks-container {
			text-align: center;
			background: #ffffff;
			padding: 60px 40px;
			border-radius: 16px;
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
			animation: fadeIn 0.8s ease-out;
		}

		h1 {
			font-size: 32px;
			margin-bottom: 20px;
			font-weight: 700;
			color: #1a1a1a;
		}

		h2 {
			font-size: 18px;
			font-weight: 400;
			color: #555;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
				transform: translateY(30px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		@media (max-width: 600px) {
			.thanks-container {
				padding: 40px 20px;
			}

			h1 {
				font-size: 26px;
			}

			h2 {
				font-size: 16px;
			}
		}
	</style>
</head>

<body>
	<div class="thanks-container">
		<h1>Bedankt voor je aanvraag!</h1>
		<h2>We nemen zo snel mogelijk contact met je op.</h2>
	</div>
</body>

</html>