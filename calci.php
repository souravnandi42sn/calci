<html>
<head>
<link rel="stylesheet" href="style2.css">
<script src="script.js"></script>
</head>
<body>
	<div align="center" class="calculator">
    <div class="display"><input type="text" readonly size="15.75" id="d" value="0" ></div>
        <p>
        <input type="button" class="buttonld" id="myButton1" value="AC" onclick='display("0")'><!--
         --><input type="button" class="buttonld" value="+/-" onclick='calculate("-")'><!--
         --><input type="button" class="buttonld" value="%" onclick='calculate("%")'><!--
         --><input type="button" class="buttonry" value="/" onclick='calculate("/")'>
        </p>
        <p>
        <input type="button" class="buttonll" value="7" onclick='calculate("7")'><!--
         --><input type="button" class="buttonll" value="8" onclick='calculate("8")'><!--
         --><input type="button" class="buttonll" value="9" onclick='calculate("9")'><!--
         --><input type="button" class="buttonry" value="*" onclick='calculate("*")'>
        </p>
        <p>
        <input type="button" class="buttonll" value="4" onclick='calculate("4")'><!--
         --><input type="button" class="buttonll" value="5" onclick='calculate("5")'><!--
         --><input type="button" class="buttonll" value="6" onclick='calculate("6")'><!--
         --><input type="button" class="buttonry" value="-" onclick='calculate("-")'>
        </p>
        <p>
        <input type="button" class="buttonll" value="1" onclick='calculate("1")'><!--
         --><input type="button" class="buttonll" value="2" onclick='calculate("2")'><!--
         --><input type="button" class="buttonll" value="3" onclick='calculate("3")'><!--
         --><input type="button" class="buttonry" value="+" onclick='calculate("+")'>
        </p>
        <p>
        <input type="button" class="buttonllw" value="0" onclick='calculate("0")'><!--
         --><input type="button" class="buttonll" value="." onclick='calculate(".")'><!--
         --><input type="button" class="buttonry" value="=" onclick='equal()'>
        </p>
    </div>
</body>
</html>
