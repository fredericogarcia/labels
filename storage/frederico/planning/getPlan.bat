@echo off
cd /d T:\Planning\archive
for /f "tokens=*" %%a in ('dir /b /od') do set newest=%%a
echo f| xcopy /y "%newest%" E:\xampp\htdocs\web\planning\tmp.csv
findstr /i /b "0" E:\xampp\htdocs\web\planning\tmp.csv > E:\xampp\htdocs\web\planning\dailyPlan.csv
del "E:\xampp\htdocs\web\planning\tmp.csv"
