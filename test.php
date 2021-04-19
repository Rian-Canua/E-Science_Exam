<?php 
$_SESSION['counter'] = 0 ;
?>
<!DOCTYPE html >
<html lang=eng>
<head>
<title>Exam E-Science</title>
</head>
<body>
<h1 >
    Please Select a PEN
</h1>
<select id="crud" onchange="crud()" >
    <option value=" "></option>
    <option value="create">Create</option>
    <option value="read">Read</option>
    <option value="update">Update</option>
    <option value="delete">Delete</option>
</select>
<h3 id="label">Pencil </h3>
<select id="selector" onchange="select()" > Pencil Color
    <option value=" "></option>
    <option value="graphite">Graphite Pencil</option>
    <option value="red">Coloured Pencil - Red </option>
    <option value="blue">Coloured Pencil - Blue </option>
    <option value="green">Coloured Pencil - Green </option>
</select>
<h3 id="label1">Input </h3>
<input id="counter" style="width:150px;" maxLength = 30 onchange='counter()'/> 
<label id="test"></label> 
<script>
    function select()
    {
        
        var x =document.getElementById("selector").value;
        if(x =="red"|| x == "blue" || x =="green")
        {
            <?php  $_SESSION['counter1'] = 30 ?> 
            document.getElementById("counter").innerHTML = " ";
            document.getElementById("test").innerHTML = "30";
        }
        else if(x =="graphite")
        {
            <?php $_SESSION['counter2'] = 50; ?> 
            // alert(""); 
            document.getElementById("counter").value = " ";
            document.getElementById("test").innerHTML = "50";
        }
    }
    function counter()
    {
        var lenght = (document.getElementById("counter").value).length;
        document.getElementById("test").innerHTML = (document.getElementById("selector").value);
        
    }
    function crud()
    {
       
        var data_value =document.getElementById("crud").value;
        if(data_value == "create")
        {
            document.getElementById("test").style.display="";
            document.getElementById("label").style.display="";
            document.getElementById("label1").style.display="";
            document.getElementById("selector").style.display="";
            document.getElementById("counter").style.display="";
        }else 
        {
            document.getElementById("test").style.display="NONE";
            document.getElementById("label").style.display="NONE";
            document.getElementById("label1").style.display="NONE";
            document.getElementById("selector").style.display="NONE";
            document.getElementById("counter").style.display="NONE";
        }
        
       
    }
    
</script>
</body>
</html>