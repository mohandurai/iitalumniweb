Project : Joy of Giving - IIT alumni Association Website

Environment : PHP 8.1, Laravel 10.48

Follow the steps to enable website from Browser url

1)  Before proceed confirm your apache web server and PHP Ver 8.1 running as per your request given

2)  Next check your server OS under which you are going to run website server

3)  I have followed windows 10 version with Apache 2 and PHP 8.1

4)  git clone the repository from you Command Prompt by adminstrative rights as follows
    git clone https://github.com/mohandurai/iitalumniweb.git

5)  After cloned change director into web app folder called iit-app by
    cd iit-app

6)  Run the following artisan command before running the server
    D:/IIT-Drive/iit-app> php artisan view:clear && php artisan cache:clear && php artisan config:clear && php artisan route:clear && php artisan config:cache

7)  D:/IIT-Drive/iit-app> php artisan key:generate

8)  D:/IIT-Drive/iit-app> php artisan serve

9)  Then go to any of your browser url and run the http://localhost:8000

10) Website open in your url with home page as per your given model url https://joyofgiving.alumni.iitm.ac.in/

11) In the project website link, you can choose the sub menu All Project under main menu View Project under Home menu
    appear at left hand side list of menu given as per your link (Note all are dummy links without any functionality)

12) let me know your Suggestion and feedback to further enhancements with this site.

Thank You, 
Mohan Durai
