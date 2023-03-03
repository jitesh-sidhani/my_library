<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page3</title>
    <style>
        body{
            background-image: url("page3_img.png");
        }
        
        
        .container {
            height: 400px;
            width: 700px;
            background-color: ;
            position: relative;
            top: 180px;
            left: 200px;
          
            
        }
        
        button {
            display: inline;
            margin: 10px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 22px;

        }
        
        #btn1 {
            height: 150px;
            width: 150px;
            
        }
        
        #btn2 {
            height: 150px;
            width: 150px;
            
        }
        
        #btn3 {
            height: 150px;
            width: 150px;
            
        }
        
        #image{
            z-index: -1;
        }
        .container h1{
            position: relative;
            left: 72px;
        }
        #btn4{
            position:relative;
            top: 220px;
            right: 320px;
            height: 50px;
            width: 100px;
            font-size: 17px;
            
        }
        button:hover{background-color: rosybrown;}
    </style>
</head>

<body>
    <div class="container">
        
        <h1>Choose Your Language :</h1>
        <button id="btn1">English</button>
        <button id="btn2">हिन्दी</button>
        <button id="btn3">मराठी</button>
        <button id="btn4">
            continue
        </button>
    </div>
</body>

</html>