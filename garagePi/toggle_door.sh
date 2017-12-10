#!/bin/sh
#control variables
status=$(gpio read 7) 
case $status in
    0*)
    # the circuit is already firing! Do nothing
    echo "Door is already opening\n"
    ;;
    1*)
    	## the circuit is off
    	gpio write 7 0
    	sleep 4 ### YOU MAY NEED TO ADJUST THIS
    	gpio write 7 1
    ;;
esac
