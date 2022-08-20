<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test insert</title>
    <link rel="stylesheet" href="../../assets/css/main.min.css" />
  <link rel="stylesheet" href="../../assets/css/styles.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h1>test</h1>
    <?php echo date('G')+8?>
<form action="/rate/store" method="post">
@csrf




    <!-- <h2>information</h2>
    <input type="text" placeholder="responden" name="responden[]" value='edwin'><br>
    <h2>environment</h2>
    <input style="display: none;" type="text" name="id[]" value="{{$ide}}">
    <input type="text" name="comments[]" value="test">
    <input type="text" name="rating[]" value="4">
    <h2>service</h2>
    <input style="display: none;" type="text" name="id[]" value="{{$ids}}">
    <input type="text" name="comments[]" value="test">
    <input type="text" name="rating[]" value="4">
    <h2>food</h2>
    <input style="display: none;" type="text" name="id[]" value="{{$idf}}">
    <input type="text" name="comments[]" value="test">
    <input type="text" name="rating[]" value="4"> -->
<div class="rating d-flex flex-row-reverse">
            <input type="radio" id="rating-5" value="5" name="rating[0]"/>
            <label for="rating-5"></label>
            <input type="radio" id="rating-4" value="4" name="rating[0]"/>
            <label for="rating-4"></label>
            <input type="radio" id="rating-3" value="3" name="rating[0]"/>
            <label for="rating-3"></label>
            <input type="radio" id="rating-2" value="2" name="rating[0]"/>
            <label for="rating-2"></label>
            <input type="radio" id="rating-1" value="1" name="rating[0]"/>
            <label for="rating-1"></label>
          </div>
    <br>
<div class="rating d-flex flex-row-reverse">
            <input type="radio" id="rating-5" value="5" name="rating[1]"/>
            <label for="rating-5"></label>
            <input type="radio" id="rating-4" value="4" name="rating[1]"/>
            <label for="rating-4"></label>
            <input type="radio" id="rating-3" value="3" name="rating[1]"/>
            <label for="rating-3"></label>
            <input type="radio" id="rating-2" value="2" name="rating[1]"/>
            <label for="rating-2"></label>
            <input type="radio" id="rating-1" value="1" name="rating[1]"/>
            <label for="rating-1"></label>
          </div><br>
<div class="rating d-flex flex-row-reverse">
            <input type="radio" id="rating-5" value="5" name="rating[2]"/>
            <label for="rating-5"></label>
            <input type="radio" id="rating-4" value="4" name="rating[2]"/>
            <label for="rating-4"></label>
            <input type="radio" id="rating-3" value="3" name="rating[2]"/>
            <label for="rating-3"></label>
            <input type="radio" id="rating-2" value="2" name="rating[2]"/>
            <label for="rating-2"></label>
            <input type="radio" id="rating-1" value="1" name="rating[2]"/>
            <label for="rating-1"></label>
          </div>
    <input type="submit" value="submit">
</form>

</body>
</html>