#!/bin/sh
#Script to initialize the setting for the GPIO board.
gpio mode 7 out && gpio write 7 1
gpio readall
