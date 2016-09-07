#!/bin/bash -l
if [ -z "$1" ]
  then
    echo "No argument supplied"
  else
    git add .
    git commit -m "$1"
    git push -u origin master
fi
