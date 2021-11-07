<!DOCTYPE html>
<html>
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>
	* {
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
	}

	html,
	body{
		height: 100%;
	}

	body{
		display: flex;
		align-items: center;
		justify-content: center;

		font-family: sans-serif;
		background-image: linear-gradient(160deg, #ff93ff 0, #ae75ff 25%, #5353f2 50%, #0031ae 75%, #001772 100%);
	}
</style>
</head>
	<body>
        <div class="card text-center" style="background-color: #040404;">
            <div class="card-body" style="background-color: #040404;"><br>
			<h1 style="color: #f9f9f9; text-align:center;">Aqui está o seu QRcode!</h1><br>
				<div class="container">
					<div class="row">
						<div class="col-md-auto">
							<?php foreach($valor as $q){?>
								<img width="170px;" height="170px;" src='<?php echo base_url('')?>assets/qrcodes/<?= $q['qr']?>'>
							<?php }?>
						
							<p style="color: #f9f9f9; text-align:center;">
							<br>Este é o seu QRcode, para poder usá-lo clique em Baixar e você será redirecionado para a página de download.<br>
							<br>Tamo junto! <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAArtJREFUSEuFVu112kAQnCF+IDkRxqmAVIDTgVMBuAOoIO4A6CCuAHdguYK4BFJBXEH4UJ4Rfvg270534oROjn7w4HS3OzuzswfhPQQg9rf5bhf87037zXpgo16yL/yjgTBN2W0AQkpwx9M0OZsfi8g/rJdeZNWP+fnZ1OtXWYtUSeBDbCqK2MmfPnH2G8CviMlVIzqXuBo2tF2jcOXrBJsxwQWAx4jJqDjRHIVNAjaJmUv2A8B3gcxjdmeNCTzq/L4p49YwWSS5bJcABgJ8O2fy5LouQL9pQ6+LfCqAV/l79QYZxkzmPgu5ZCZmxMSc3Uk2+wCmbX5ahgSvdxGBvdqOpOC5R8hNh91UH96p7JrATyfwXrYjET6AWBMy6bS66al5vAQFKRoRgaml6LGDw5i8XDu0LWAqwF3E5FbJqveKs3sAQ71fAbOY3fnRroX85lOU2bwQwHSGAPOYiRWxYDiXbUpwqCCTmF0d2JzdqQJUsUvSDt4mDlSZIFdaPA4g2JAydrT49swlWxO4UDh8iXn57Dt2LxtNq056AWAZMfnqGtihWxIciGBNysRPYNyrVn3SGGwTMemdWtjqsQBFvytNWGogsurtLZ+WolnZQbpb1HZMYgHQGuzYyE43W9FjG4dxy+hGeEYr2vSlKnLawcHw6QymgPm51caAkrMFWNXtdBLXPGLKtXwSuOkwSXOV6T43BotbyZPWxu57AGQDYByZNvV96yoIeNkabaTHga5sd2Iwh6owWitt82NpNF/8yiw6lmZdbRdeZHvd8gwWuliaZl7DhVMdG0ZEwRSUu4jd23eGZ3Ak1RaN+npEHwec5nYoxCRmcl9J8O68D91otatRi5ktRTAQnhosgM2Bs5xVZpGP2p8nxRzS16Tv3mDhx38KXuNUTfmfG6iJkfD6CUW12AG6fNzh19VU/wDFpm4yaXEV8gAAAABJRU5ErkJggg=="/></p>
							<a class="btn btn-outline-success my-2 my-sm-0" target="_blank" href="<?php echo base_url();?>assets/qrcodes/<?=$q['qr'];?>"download>Baixar</a>
						</div>
					</div>
				</div><br>		
            </div>
	    </div><br><br>  
    </body>
</html>