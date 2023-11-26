<?php include('db_connect.php') ?>
<?php
$twhere ="";
if($_SESSION['login_type'] != 1)
  $twhere = "  ";
?>

<style>
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #000000;
  color: white;
  transform: rotateY(180deg);
}

.column {
  float: left;
  width: 25%;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.left {
    float: left;
}

h1 {
    font-family:'Playfair Display SemiBold';
}

</style>


<!--about us-->
<div class="col-12">
          <div class="card">
            <div class="card-body">

<!--change tab icon in header-->
<div class="left">
<img src="uploads/ANL.png" alt="icon" width="260" height="260">
</div>

<div class="card">
            <div class="card-body">
<h1>Ascension Network</h1>
</div>
</div>

<div class="card">
            <div class="card-body">
<p> <b>Ascension Network</b> is a group of beginners diving into the world of web development. 
    We're on a mission to turn our ideas into reality. 
    With diverse skills and backgrounds, 
    we're working together to create a website that may be a bit rough around the edges but 
    reflects our passion to go beyond what's expected.</p>
</div>
</div>

</div>
</div>
</div>

<!--4 members-->
<div class="row"> 

<div class="column">
<div class="card">
            <div class="card-body">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="uploads/about/chengwei.jpeg" alt="Avatar" width="180" height="255">
    </div>
    <div class="flip-card-back">
    <p></p>
      <h1>Cheng Wei</h1> 
      <p>Back-end Developer</p> 
      <p>Computer Science Student</p>
    </div>
  </div>
</div>
</div>
</div>
</div>

<div class="column">
<div class="card">
            <div class="card-body">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="uploads/about/brandon.jpeg" alt="Avatar" style="width:200px;height:260px;">
    </div>
    <div class="flip-card-back">
    <p></p>
      <h1>Brandon</h1> 
      <p> Scrum-Master</p> 
      <p>Computer Science Student</p>
    </div>
  </div>
</div>
</div>
</div>
</div>

<div class="column">
<div class="card">
            <div class="card-body">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="uploads/about/anita.jpeg" alt="Avatar" style="width:192px;height:256px;">
    </div>
    <div class="flip-card-back">
    <p></p>
      <h1>Anita</h1> 
      <p>Front-end Developer</p> 
      <p>Computer Science Student</p>
    </div>
  </div>
</div>
</div>
</div>
</div>

<div class="column">
<div class="card">
            <div class="card-body">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="uploads/about/jerusha.jpeg" alt="Avatar" style="width:210px;height:280px;">
    </div>
    <div class="flip-card-back">
        <p></p>
      <h1>Jerusha</h1> 
      <p>UI/UX designer</p> 
      <p>Computer Science Student</p>
    </div>
  </div>
</div>
</div>
</div>
</div>


</div>
     
