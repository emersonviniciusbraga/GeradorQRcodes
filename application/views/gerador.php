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

label{
    position: relative;
}

label input{
    font-family: sans-serif;
    font-size: 1.2rem;
    color: #f9f9f9;
    background: transparent;

    padding: 1rem 3.2rem 1rem 1.2rem;
    min-width: 35rem;

    border-radius: 0.2rem;
    border: 2px solid #7a7a7a56;

    transition: border-color 0.2s;
}

label input:focus{
    border-color: #2aa6ee;
}

label p{
    color: #f9f9f9;
    font-size: 1.2rem;
    user-select: none;

    position: absolute;
    top: 50%;
    transform: translateY(-50%);

    margin-left: 0.8rem;
    padding: 0 0.4rem;

    background: #040404;

    transition: top 0.2s, font-size 0.0s, color 0.2s;
}

label input:focus + p,
label input:not(:placeholder-shown) + p {
    top: 0;
    font-size: 1rem;
    color: #2aa6ee;
}

label input:not(:focus) + p{
    color:#7a7a7a56
}
</style>
</head>
	<body class="text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-4" style="background-color: #040404;">
                        <div class="card-body" style="background-color: #040404;"><br>
                        <h1 style="color: #f9f9f9;">Gerador de QRcodes</h1><br>
                            <p style="color: #f9f9f9; text-align:center;">Esse gerador de QRcodes foi desenvolvido com o intuito de ajudar quem precisa deste serviço, seja para trabalhos estudantis ou de carreira profissional. Com esse site você consegue criar QRcodes de qualquer link, e no fim terá uma imagem do código disponível para download, podendo assim usar onde quiser.</p><br>
                            <form action="<?= base_url('') ?>index.php/gerador/store" method="post">
                            <label for="link">
                                <input type="text" id="link" name="link" placeholder=" ">
                                <p>Link</p>
                            </label><br><br>
                            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Gerar QRcode</button>
                            </form>
                        </div><br><br>
                    </div>
                </div>
            </div>
        </div>  
    </body>
</html>


<!-- <label for="link">link:</label><br>
  <input type="text" id="link" name="link"><br>
  <input type="submit" value="Submit"> -->