<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="figma.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="header">
        <ul>    
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#home">Home</a></li>
        </ul>
    </div>
    <div id="main">
        <h1>WELCOME GUEST</h1>
         <p>
            <?php $dateshow = date('Y-m-d H:i:s'); 
				echo $dateshow;
			?>
		</p>
               
    </div> 
    <div id="footer">
        <p>Copyright &copy Oyewole Oluwaseyi</p>               
    </div>
</body>
</html>


