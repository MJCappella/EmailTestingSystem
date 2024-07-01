<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# EmailTestingSystem
This is a system that mimics the email sending functionality of a system. The system has a form with which a user inputs an email address of the recepient and a button to send a message. The details of the message sent are logged in a database within a table called email_logs and the status of the email i.e failed or successful stored in respective columns.<br>
<h1>Setup</h1>
<p>To setup your environment to run the system make sure you have the following requirements:</p>
<ul>
  <li>PhP v7.x.x</li>
  <li>Laravel 8.x.x</li>
  <li>Composer <any version></li>
</ul>

<p>Run the project using the commands below</p>
<ul>
  <li>php artisan migrate</li>
  <li>php artisan serve</li>
  <li>access the website from http://127.0.0.1:8000</li>
</ul>
