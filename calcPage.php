<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calculator</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php include 'calculator.php'; ?>
</head>
<body>
<br><br><br>
<form method="post">
    <div class="w3-center ">
        <input name="input" id="input" class="w3-border w3-border-black w3-xlarge"
               type="text" placeholder="enter a math expression" style="width: 30%">
        <button class="w3-red w3-xlarge w3-hover-gray w3-border w3-border-black"
                style="cursor: pointer" name="calc">calculate
        </button>
        <p class="w3-xlarge" id="result">  <?php echo calc($_POST['input'], $_POST['calc'], $_POST['clear']); ?> </p>
        <br>
        <button class="w3-xlarge w3-blue w3-button " name="clear"
                style="cursor: pointer"> clear
        </button>
    </div>
</form>
<br><br>

</body>
</html>