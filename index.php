<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
     crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calc(){
        if_isset($_REQUEST['btnCalc']){
            echo 'hasgdf'
        }
    }
    ?>
<div class="container">
<h1>Калькулятор v0.01</h1>

<div class="row">
<div class="col-6">
    


    <form>
<div class="mb-3">
    <label class="form-labl"> введите первое число</label>
    <input type="text" class="form-control" name="a">
</div>
<div class="mb-3">
    <label class="form-labl"> введите второе число</label>
    <input type="text" class="form-control" name="b">
</div>
</div>

<select class="from-select" name="action">
    
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>

<button type="submit" class="btn-primary" name="btnCalc"> Посчитать</button>
    </form>

</div>
<div>

</div class="col-6">



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
crossorigin="anonymous"></script>

</body>
</html>