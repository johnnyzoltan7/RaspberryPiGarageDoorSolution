
# Raspberry PI Zero Garage Door Solution 
## Introduction
Welcome to the Raspbery Pi Garage Door Solution page! This project contains two parts: 1) hardware and wiring, 2) software and configuration. Follow the instructions on each part in order to implement this solution on your own garage door. 

## Part 1: Hardware and wiring
This section refers to the required hardware as well as instructions for wiring your Pi accordingly. Note that the software contained with this solution assumes that you will use the exact wiring as specified here. The hardware and material requirements are:

 - Raspberry Pi (A/B/Zero/W)
 - Micro SD card (4GB bare minimum, 8GB preferred minimum) with latest Raspbian OS
 - GPIO input/output wiring
 - 5v Relay: I recommend as well as assume you will use this [one](https://www.amazon.com/dp/B00VH8926C/ref=asc_df_B00VH8926C5292177/?tag=hyprod-20&creative=395033&creativeASIN=B00VH8926C&linkCode=df0&hvadid=196274408286&hvpos=1o4&hvnetw=g&hvrand=8617023651448850265&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9030088&hvtargid=pla-315539484865)
 - WiFi Dongle (unless using the Pi W)

#### Wiring the Pi to the relay and Remote
![Alt text](/circuit.jpg?raw=true "Wiring Diagram")
![Alt text](/circuit1.jpg?raw=true "Wiring Diagram")
It is important to get a good connection when you solder your wire to your remote. It is also worth noting that many different garage door remotes have similar circuits which we can hack in the exact way as above. 
#### PREFERED OPTION
![Alt text](/circuit0.jpg?raw=true "Prototype 1")
#### ALTERNATIVE OPTION
This is the option that I had to use because my remote has broken and cannot hold a battery. I simply run a connection from GPIO pin 2 to the left power pin on the garage remote, and I run a another connection from GPIO pin 25 to the power pin on the right side of the garage door remote ('left' and 'right' are relative to the photo below). 
![Alt text](/circuit4.jpg?raw=true "Prototype 2")


## Part 2: Software and configuration
#### Pre-requisite software
This solution relies on using an Apache web server with PHP in order to create a online login system to trigger the garage door relay from any internet browser on your network. Instructions for installing both pre-requisite softwares can be found [here](https://www.raspberrypi.org/documentation/remote-access/web-server/apache.md). Once you have Apache and PHP installed on your pi, delete the existing index.html or index.php file found at:
```sh
/var/www/html/
```
You will also need to install wiringPi from [here](http://wiringpi.com/download-and-install/) in order to interface with the GPIO on your raspberry pi. 
#### Installation
From your pi computer, download this project using git by typing the following commands into the Terminal:
```sh
cd
git clone https://github.com/johnnyzoltan7/RaspberryPiGarageDoorSolution.git
```
 Alternatively, you can download the project as a zip file directly from Github by clicking [here](https://github.com/johnnyzoltan7/RaspberryPiGarageDoorSolution/archive/master.zip) and transfer the unzipped files to your pi to a known directory.

From your pi computer, move the 'garagePi' folder to the location:
```c
/home/pi/
```
Next, move index.php, toggle.php, and the 'assets' folder to the following location:
```sh
/var/www/html/
```
#### Configuration
First, change line# 29 inside of index.php to reflect the username that you wish to use when you login to your system. Next, generate a password hash by typing the following command into Terminal:
```sh
php -r 'print openssl_digest("YOUR-PASSWORD-HERE", "sha256");print "\n" ;'
```
Copy the resulted string and paste into line #30 inside of index.php.

You will also need to make both 'initialize.sh' and 'toggle_door.sh' executable by typing the following commands into Terminal:
```sh
cd /home/pi/garagePi/
chmod 755 initialize.sh
chmod 755 toggle_door.sh
```
Next, we need set up your pi to execute your GPIO pin 7 in an output mode every time you boot or reboot your pi. To do this, type the following commands into the Terminal:
```sh
cd /home/pi/garagePi/
./initialize.sh
sudo mv initialize.sh /etc/init.d/
update-rc.d initialize.sh defaults
```
Finally, and with caution, we need to allow your server to execute 1 script as root. This can be done (caution, this is not secure) by typing the following command into Terminal:
```sh
sudo visudo
```
At the very bottom of the file, add the following line of code:
```txt
www-data ALL=NOPASSWD: /var/www/html/toggle.php
```
Save the file before exiting out of the text editor.
#### Accessing your new login
In any web browser, type your pi computer's [IP address](https://learn.adafruit.com/adafruits-raspberry-pi-lesson-3-network-setup/finding-your-pis-ip-address) into the address bar to navigate to your new login page. Now you can log on and toggle your garage door from any web browser that is connected to your local network.
