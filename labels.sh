#!/bin/bash 
if [ -z "$1" ]
  then
    echo "No argument supplied"
    echo "try ./git.sh 'message'"
  else
    git add .
    git commit -m "$1"
    git push -u origin master
fi
