<html>
<head>
    <title>Instruction page</title>
    <style>
        *{
            padding:0px;
            margin:0px;

        }
        h1{
            color: rgb(235, 226, 226);
        }
        .main{
            background-color: rgb(208, 203, 203);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
        ;}
        #container{
            width:60%;
            height:70%;
            background-color:rgb(76, 76, 76);
            position:absolute;
            top:13%;
            left:20%;
            border-radius: 15px;
            padding-top:5px;
            box-shadow:10px 20px 20px 10px grey;
        }
        #inner_heading{
            font-family: Arial, Helvetica, sans-serif;
            text-align:center;
        }
        #para{
            width:90%;
            height:70%;
            background-color:rgb(218, 214, 214);
            position:absolute;
            top:13%;
            left:5%;
            border-radius: 15px;
        }
        #ollist{
            padding:10px;
            margin-left:10px;
            font-size:18px;
            color: rgb(44, 43, 43);
        }
        li{
            padding:5px;
            word-wrap: break-word;
        }
        .check{
            position: absolute;
            top: 90%;
            left: 10%;
            color: rgb(230, 224, 224);
        }
        .check:hover{
            cursor: pointer;
        }
        .btn{
            position: relative;
            top: 80%;
            left: 80%;
            color: rgb(29, 25, 25);
            width: 70px;
            height: 30px;
            font-weight: 600;
            font-size:15px;
            border-radius: 3px;
        }
        .btn:hover{
            background-color: rgba(135, 132, 132, 0.639);
            color: white;
            cursor: pointer;
            font-size: 17px;
        }
    </style>
</head>
<body>
<div class="main"></div>>
<img src="C:\Users\Asus\Desktop\onlineCafe.png">
<div id="container">
    <div id="inner_heading">
        <h1>Instructions</h1>
    </div>
    <div id="para">
        <ol id="ollist">
            <li>After this page you will be forwarded to other page in which list of Online authors will be displayed.</li>
            <li>Then You have to select any one of Author of yours choice.</li>
            <li>Then a chat box will be provided to you for further conversation.</li>
            <li>After,Sucessfull Conversation,you have to provide your required documents.</li>
            <li>Then your form will be filled by respective Author.</li>
            <li>After that payment link will be provided.</li>
            <li>You will have to pay the decided amount.</li>
        </ol>
    </div>
    <label class="check">
        <input type="checkbox" id="mycheck">
        <span class="checkmark"></span>
        I,have Read all the instructions carefully.
    </label>
    <button class="btn" ><a href = "./customer_page.php">Next</a></button>

</div>
<script>

    function Click(){
        if(document.querySelector('#mycheck:checked') !== null)
        {
            //alert("ok");

        }
        else{
            alert("Fisrt Read all the instructions")
        }
    }
</script>
</body>
</html>