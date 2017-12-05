# Raspberry PI Zero Garage Door Solution 
## Introduction
This Project has come about because I broke my garage door remote and was too lazy to buy a new one and re-program the remote. 
With that said: there is some required hardware that you will need in order to implement this project:

 - Raspberry Pi (A/B/Zero/W)
 - Micro SD card (4GB bare minimum, 8GB preferred minimum)
 - GPIO input/output wiring
 - 5v Relay: I recommend this [one](https://www.amazon.com/dp/B00VH8926C/ref=asc_df_B00VH8926C5292177/?tag=hyprod-20&creative=395033&creativeASIN=B00VH8926C&linkCode=df0&hvadid=196274408286&hvpos=1o4&hvnetw=g&hvrand=8617023651448850265&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9030088&hvtargid=pla-315539484865)  or silmilar
 - Garage door
 - WiFi Dongle (unless using the Pi Zero, which is built in)
 - I recommend a small breadboard to help you prototype your unit
********************************************
## Setting up your Pi
There are some dependencies that you will need in order to start & complete this project. First, lets set up your Pi computer. I built my system using the Raspberry Pi Zero. I will continue these instructions assuming that you will follow along using a Pi Zero; feel free to adjust these instructions based on your hardware choices. 

##### Initialize your pi 
If you are comfortable setting up your raspberry Pi on your own, go ahead and skip this section. I recommend that you follow [these instructions](https://www.raspberrypi.org/documentation/installation/) for a super quick installation guide. You can do it yourself, or download software that will help you format/install the required Image on your Raspberry Pi. 
##### Acquiring dependencies
Once you have your Raspberry Pi up and running, you are going to want to have a few dependencies installed. Open up a new terminal window and use 'apt-get' to obtain them. First, lets make sure everything is up to date:
```sh
sudo apt-get update
sudo apt-get upgrade
```
###### install [WiringPi](http://wiringpi.com/download-and-install/) (summarized below)
Now we need to install GIT:
```sh
sudo apt-get install git-core
```
Run the following to obtain wiringPi:
```sh
cd
git clone git://git.drogon.net/wiringPi
```
Now lets make sure we get the latest version:
```sh
cd ~/wiringPi
git pull origin
```
Finally, we can use the included script to build and install the dependencies for us:
```sh
cd ~/wiringPi
./build
```
###### install Apache && php
********************************************
## Please check back for an update on further instructions... They will be up by 12/7/2017!!!
