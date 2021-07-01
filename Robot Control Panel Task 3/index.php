<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Stylesheet-->
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <?php
  if (isset ($_POST['submit'])) {
  $conn= new mysqli("localhost","root","","robot_arm");
  $stmt=$conn->prepare("insert into arm (motor1,motor2,motor3,motor4,motor5,power)values(?,?,?,?,?,?)");
  $stmt->bind_param("iiiiii",$Base,$Shoulder,$Elbow,$Wrist,$Gripper,$On);
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

  <section class="py-5 my-5">
     <div class="container"style="margin-top:85px;margin-bottom:-88px">

       <div class="bg-white shadow rounded-lg d-block d-sm-flex">
        <div class="control-tab-nav border-right">

          <div class="p-4">
            <div class="text-center mb-3">
              <img src="bg-main.png" alt="Image" >
            </div>
            <h4 class="text-center">Robot Arm Control Panel</h4>
          </div>
           <div class="nav flex-column nav-pills "  id="v-pills-tab" role="tablist" aria-orientation="vertical">

             <a class="nav-link active " data-toggle="pill" href="#Arm" role="tab" aria-controls="Arm" aria-selected="true">
               Arm
             </a>

             <a class="nav-link" data-toggle="pill" href="#Base" role="tab" aria-controls="Base" aria-selected="false">
               Base
             </a>

           </div>
         </div>

         <div class="tab-content p-4 p-md-5" id="v-pills-tabContent" >
           <div class="tab-pane fade show active" id="Arm" role="tabpanel" aria-labelledby="Arm-tab">
             <h2 class="mb-4">Arm</h2>
             <br>
                       <form name="handle" action="index.php" method="post">
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

           <div class="tab-pane fade" id="Base" role="tabpanel" aria-labelledby="Base-tab">
             <h2 class="mb-4">Base</h2>
             <br>
                   <div class="container" style="margin-left: 100px">
                       <form action="handle2.php" method="post">
                       <button class="button button2" name="up" style="margin-left: 27%;"> Up <i class="fa fa-hand-o-up"></i> </button><p>&nbsp;</p>
                        <button class="button button2" name="left"><i class="fa fa-hand-o-left"></i> Left </button> <button class="button button2" name="stop"> Stop <i class="fa fa-hand-stop-o"></i></button> <button class="button button2" name="right">Right <i class="fa fa-hand-o-right"></i></button>
                          <br>
                        <p>&nbsp;</p><button class="button button2" name="down" style="margin-left:27%;">Down <i class="fa fa-hand-o-down"></i> </button>
                       </form>
                  </div>
          </div>
   </section>

   <script type="text/javascript" src="sc.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
