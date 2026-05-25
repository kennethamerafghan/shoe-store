<!DOCTYPE html>
<html>
<head>

<title>Shoe Collection</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

<style>

/* BACKGROUND */

body{
background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
min-height:100vh;
font-family:'Orbitron', sans-serif;
color:white;
}

/* MAIN CONTAINER */

.container{
background: rgba(255,255,255,0.05);
padding:30px;
border-radius:20px;
backdrop-filter: blur(12px);
margin-top:40px;
box-shadow:0 0 20px rgba(0,0,0,0.5);
}

/* TITLE */

h2{
color:#00f7ff;
text-shadow:0 0 10px #00f7ff,0 0 20px #00f7ff;
font-weight:bold;
}

/* HERO SECTION */

.hero{
background: url('/images/hero-shoe.jpg') center/cover no-repeat;
height:350px;
border-radius:20px;
display:flex;
align-items:center;
padding-left:50px;
margin-bottom:30px;
position:relative;
overflow:hidden;
}

/* DARK OVERLAY */

.hero::before{
content:'';
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
background:linear-gradient(45deg,rgba(0,0,0,0.8),rgba(0,0,0,0.4));
border-radius:20px;
}

/* HERO TEXT */

.hero-content{
position:relative;
z-index:2;
}

.hero h1{
font-size:48px;
font-weight:bold;
color:#00f7ff;
text-shadow:0 0 10px #00f7ff,0 0 20px #00f7ff;
}

.hero p{
font-size:18px;
color:#d1faff;
}

/* CARD DESIGN */

.shoe-card{
background: rgba(255,255,255,0.08);
border-radius:15px;
border:none;
transition:0.4s;
backdrop-filter:blur(10px);
}

.shoe-card:hover{
transform:translateY(-10px) scale(1.03);
box-shadow:0 0 20px #00f7ff;
}

/* IMAGE */

.shoe-card img{
height:180px;
object-fit:contain;
padding:20px;
}

/* PRICE */

.price{
color:#00eaff;
font-weight:bold;
font-size:18px;
text-shadow:0 0 8px #00eaff;
}

/* BUTTON STYLE */

.btn-warning{
background:linear-gradient(45deg,#ff00cc,#3333ff);
border:none;
color:white;
}

.btn-warning:hover{
box-shadow:0 0 15px #ff00cc;
}

.btn-danger:hover{
box-shadow:0 0 15px red;
}

</style>

</head>

<body>

<div class="container">

<h2 class="text-center mb-4"> KENN FlipSole</h2>

@yield('content')

</div>

</body>
</html>