<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="main.css"/>
     <link rel="icon" href="calculator.ico" />
     <title>My page</title>
     
     <body>

      <div class="main" >
        <h1>Pagina mea</h1>

        <form id="postForm">
          <input type="text" name="num1" id="num1" >
          +
          <input type="text" name="num2" id="num2" >
          <br>
          <input type="submit" name="calc_btn" id="calc_btn" value="=">
          <div id="result" ></div>
        </form>

      </div>
   </body>
   <script src="../js/ajax.js"></script>
 </html>
