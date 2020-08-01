<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple calculator</title>
</head>
<body>
    <div id="container">
    <div id="display"></div>
    <div id="calculator">
        <button class="number" id="7" onclick="btnClickedNum(7)">7</button>
        <button class="number" id="8" onclick="btnClickedNum(8)">8</button>
        <button class="number" id="9" onclick="btnClickedNum(9)">9</button>
        <button class="operator" id="/" onclick="btnClickedOpr('/')">&#247;</button>
        <button class="number" id="4" onclick="btnClickedNum(4)">4</button>
        <button class="number" id="5" onclick="btnClickedNum(5)">5</button>
        <button class="number" id="6" onclick="btnClickedNum(6)">6</button>
        <button class="operator" id="*" onclick="btnClickedOpr('*')">&times;</button>
        <button class="number" id="1" onclick="btnClickedNum(1)">1</button>
        <button class="number" id="2" onclick="btnClickedNum(2)">2</button>
        <button class="number" id="3" onclick="btnClickedNum(3)">3</button>
        <button class="operator" id="-" onclick="btnClickedOpr('-')">-</button>
        <button class="operator" id="clear" onclick="myfunction()">C</button> 
        <button class="number" id="0" onclick="btnClickedNum(0)">0</button> 
        <button class="operator" id="=" onclick="switch_page()">=</button>
        <button class="operator" id="+" onclick="btnClickedOpr('+')">+</button>
       
    </div>
    <div id="name">Sisitha jayawardhane <span>SE/2017/019</span></div>
    </div>
    <script src="script.js"> </script>
    
    
</body>
</html> 