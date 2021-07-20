#  TurtleBot3

In this project aims to simulate the way the robot discovers its' environment in Gazebo while constructing it as a map using SLAM. 
This is done using an online version of ROS (https://app.theconstructsim.com/#/Home) along with robots from Turtlebot3

# PC Setup

1- Install TurtleBot3 Packages

$ sudo apt-get install ros-melodic-dynamixel-sdk

$ sudo apt-get install ros-melodic-turtlebot3-msgs

$ sudo apt-get install ros-melodic-turtlebot3

![image](https://user-images.githubusercontent.com/50388183/126248721-e29fd74d-20ce-4220-a77f-b30462d5e914.png)


# Simulation
After choosing the Trurtlebot you need to run it in an environment using a simulation:

1- Gazebo Simulation

$ cd ~/catkin_ws/src/

$ git clone -b melodic-devel https://github.com/ROBOTIS-GIT/turtlebot3_simulations.git

$ cd ~/catkin_ws && catkin_make

![image](https://user-images.githubusercontent.com/50388183/126249042-f5f512f7-cd61-4d53-8b84-353d5ecdde0d.png)

![image](https://user-images.githubusercontent.com/50388183/126249060-3f6e339b-b7d7-499c-8bcc-70f53184ec0f.png)

2- Launch Simulation World

There are 3 simulation environments prepared for TurtleBot3, you can select any one of these environments to launch Gazebo: 
" I've only done two environments for TurtleBot3 "

1- Empty World

![image](https://user-images.githubusercontent.com/50388183/126249153-ec72a240-aa2f-440f-8636-b9d983ebea6d.png)

![image](https://user-images.githubusercontent.com/50388183/126249188-e4384391-d03f-440b-9cf3-b8435a525e16.png)

2- TurtleBot3 World

![image](https://user-images.githubusercontent.com/50388183/126249330-78921da4-ddd1-48fb-bd3f-c7650946bd16.png)

# SLAM Simulation

1- Launch Simulation World  

![image](https://user-images.githubusercontent.com/50388183/126249658-284ebdc0-f314-4416-8f05-1cf9da082d18.png)

![image](https://user-images.githubusercontent.com/50388183/126249686-6a3c206a-7fab-4bb6-a9d8-217c9b692d0a.png)

2- Run SLAM Node

![image](https://user-images.githubusercontent.com/50388183/126249733-8f00700e-3b8d-458f-bb99-644d3f48066b.png)

![image](https://user-images.githubusercontent.com/50388183/126249742-71967e32-3e34-447d-b993-5a61f38af76d.png)

3- Run Teleoperation Node

![image](https://user-images.githubusercontent.com/50388183/126249824-f18f1d75-8774-4bb2-aa54-dd23e7f328a1.png)

![image](https://user-images.githubusercontent.com/50388183/126249870-89fe9d3a-a50c-48e5-b0b5-909ee1ee8fb8.png)

![image](https://user-images.githubusercontent.com/50388183/126249963-611ecb31-8099-4f5f-9316-cea79b547366.png)


4- Save Map

![image](https://user-images.githubusercontent.com/50388183/126250010-38ab7d3b-988b-4af7-9b1a-ac6285385a15.png)
