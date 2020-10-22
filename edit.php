<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="jumbotron" style="background:url('images/d.jpg')no-repeat;background-size:cover;height:200px;"></div>
<div class="container-fluid">
<div class ="card"> 
  <div class ="card-body" style="background:#95A6A0">
      <div class="row">
      <div class = "col-md-1">
    <a href="admin-panel.php" class = "btn btn-light">Main</a>
  </div>
  <div class="col-mod-4"><h1><b><b>Try It Editor For HTML,CSS,JAVASCRIPT </b> </b></h1></div>
  <div class="col-mod-8">
    <form class="form-group" action="function.php" method="post">
      <div class="row">
         <div class="col-md-11"><input type = "text" name="search"class="form-control"></div>
      </form>
    </div>
  </div></div>
  <div class = "card-body"></div>
<table class="table table-striped">


<!DOCTYPE HTML>
<html>
 <head>
  <style>
    textarea,iframe{
      border:2px solid #ddd;
      height: 500px;
      width:100%;
    }
  </style>
 </head>
 <body>
  <table width ="100%" border ="0" cellspacing = "5" cellpadding = "5">
    <tr>
      <td width ="50%" scope = "col">&nbsp;</td>
      <td width ="50%" scope = "col" align="left">
          <input onclick ="runCode();" type = "button" value = "Run Code">
      </td>
    </tr>

    <td>
      <form>
        <strong><b>Code</b></strong>
        <textarea name= "sourceCode" id="sourceCode">
          <html>
          <head>
               <title>Hello</title>
          </head>
          <body>
            <h1>Hello I am MISUK</h1>
            <p>Write HTML, Javascript or CSS here and click run code!</p>
          </body>
          </html>
        </textarea>
      </form>
    </td>
    <td><strong>OutPut</strong><iframe name = "targetCode" id = "targetCode"></iframe></td>
  </table>
    <script>
       function runCode(){
        var content = document.getElementById('sourceCode').value;
        var iframe = document.getElementById('targetCode');
        iframe = (iframe.contentWindow)? iframe.contentWindow:(iframe.contentDocument)? 
        iframe.contentDocument.document:iframe.contentDocument;

        iframe.document.open();
        iframe.document.write(content);
        iframe.document.close();
        return false;
       }
       runCode();
    </script>
 </body>
 </html>



 </div>
</div>
</div>
</div>
</body>
</html>
 
</table>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html> 