<!DOCTYPE html> <html>


<style>
#coolMenu,
#coolMenu ul {
    list-style: none;
}
#coolMenu {
    float: left;
}
#coolMenu > li {
    float: left;
}
#coolMenu li a {
display: block;
    height: 2em;
    line-height: 2em;
    padding: 0 1.5em;
    text-decoration: none;
}
#coolMenu ul {
    position: absolute;
    display: none;
z-index: 999;
}
#coolMenu ul li a {
    width: 80px;
}
#coolMenu li:hover ul {
    display: block;
    margin-left: -40px;
}
li:hover
{
    

}
li:active
{
background-color:yellow;

}
h1{margin-left: 5%;}
#main-img{}
#main{margin-left: 5%;
margin-bottom: -100px;width: 500px;}
#thumb li {
    list-style: none;
    padding: 0;
    display: inline;
    width: 70px;
    margin-left: -3.2%;

}

#main-description {
    padding: 5px 0 0 10px;
    width: 640px;
    text-align: left;
    margin-top: -100px;
    margin-left: auto;
    margin-right: auto;
    height: 75px;
    vertical-align: bottom;
    background: white;
    opacity: .60;
}

.current {
    border: 3px double blue;
}
a{color: black;text-decoration: none;}
label{font-weight: bold;}
#listimage{float: left;margin-top: 30px;}
#Info{float: right;width: 300px;}
#Item{display: block;height: 250px;width: 700px;margin-left: 10%;
overflow-y: auto;
border: solid 1px #CCC;
padding: 15px;
margin-bottom: 60px;
box-shadow: 0px 0px 10px #888888;
border-radius: 8px;}
#Detail{display: block;
margin-left: 10%;
width: 40%;
overflow-y: auto;
border: solid 1px #CCC;
padding: 15px;
margin-bottom: 60px;
box-shadow: 0px 0px 10px #888888;
border-radius: 8px;}
#container{height: 500px;display: block;}
#container2{margin-top: 100px;display: block;}
#listimage{width: 240px;}
#outputimg{width: 240px;}
</style>
<body> 

<h1>Gcom Computer.Ltd</h1>
<nav id="topNav">
     <ul id="coolMenu">
    <li><a href="input.php">Input</a></li>
    <li><a href="print.php">Print</a></li>
     <li><a href="input2.php">Phone</a></li>
    
</ul>
        </nav>
<div id="container">
       
        <!--<div id="main">
            <img id="main-img" src=""/>
            <div id="main-description"></div>
             <nav>
                <ul id="thumb"></ul>
            </nav>
        </div>

    </div>
    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/assign3.js"></script>-->
    <div id="container2">
    <?php
    include("list.php");
?>
</div>
</body>
</html>
                <footer>
           
        </footer>