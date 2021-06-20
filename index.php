<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=stylesheet href="style.css"/> //link to the stylesheet
</head>
<body>
  //php code for handel the save button
  <?php
  if (isset ($_POST['submit'])) { //if click save button
  $conn= new mysqli("localhost","root","","robot_arm");
  $stmt=$conn->prepare("insert into arm (motor1,motor2,motor3,motor4,motor5,power)values(?,?,?,?,?,?)");
  $stmt->bind_param("iiiiii",$Base,$Shoulder,$Elbow,$Wrist,$Gripper,$On );
  $Base = $_POST['Base'];
  $Shoulder = $_POST['Shoulder'];
  $Elbow = $_POST['Elbow'];
  $Wrist = $_POST['Wrist'];
  $Gripper = $_POST['Gripper'];
  $On = $_POST['On'];
  $stmt->execute();
  $stmt->close();
  $conn->close();
}
  ?>
  //html code for the interface
  <div class="container">
    <form name="handle" action="index.php" method="post">
    <p class="title">Contorl Panel <img src="arm-pic.jpg" alt="robot arm" style= "width:60px;height:60px;"> </p>

    <div class="slidecontainer">
      <h4>Base: <label><span class="limit"></span></label>  </h4>
      <input type="range" name="Base" value="0" min="0" max="180"  step="1" class="slider" >
    </div>

    <div class="label-container">
      <div class="label-slider">0</div>
	  <div class="label-slider">90</div>
      <div class="label-slider">180</div>
    </div>



    <div class="slidecontainer">
      <h4>Shoulder: <label><span class="limit"></span></label>    </h4>
      <input type="range" name="Shoulder" value="0" min="0" max="180"  step="1" class="slider" >
    </div>

    <div class="label-container">
      <div class="label-slider">0</div>
	  <div class="label-slider">90</div>
      <div class="label-slider">180</div>
    </div>



    <div class="slidecontainer">
      <h4>Elbow: <label><span class="limit"></span></label>  </h4>
      <input type="range" name="Elbow" value="0" min="0" max="180"  step="1" class="slider" >
    </div>

    <div class="label-container">
      <div class="label-slider">0</div>
	  <div class="label-slider">90</div>
      <div class="label-slider">180</div>
    </div>



    <div class="slidecontainer">
      <h4>Wrist: <label><span class="limit"></span></label>  </h4>
      <input type="range" name="Wrist" value="0" min="0" max="180"  step="1" class="slider" >
    </div>

    <div class="label-container">
      <div class="label-slider">0</div>
	  <div class="label-slider">90</div>
      <div class="label-slider">180</div>
    </div>




    <div class="slidecontainer">
        <h4>Gripper: <label><span class="limit"></span></label> </h4>
      <input type="range" name="Gripper" value="0" min="0" max="180"  step="1" class="slider" >
    </div>

    <div class="label-container">
      <div class="label-slider">0</div>
	  <div class="label-slider">90</div>
      <div class="label-slider">180</div>
    </div>
  <button class="button button2" name="submit">Save</button>
  <button class="button button2" onclick="function1();" name="On">On</button>
  <input type="hidden" name="On" value="0" />
</form>
</div>
//link html to the JS file contain 2 function
<script type="text/javascript" src="sc.js"></script>
</body>
</html>
