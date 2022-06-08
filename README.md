# Site Development with XAMPP

This site was developed entirely from scratch (only the CSS was used as-is), with the help of our trusty Notepad++. :)
To run this as intended, you will need to have XAMPP installed in your machine and drag-'n'-drop all of the files (except from
the sorting_algorithms_db.sql one) of this repository into the htdocs folder of your XAMPP's installation directory. Then,
you will need to set up XAMPP to parse html documents as php ones and you can do that by following this simple guide:
https://electrictoolbox.com/apache-parse-html-as-php/
You will then need to start Apache and MySQL through the XAMPP tool and go to localhost/phpmyadmin at
your browser and create a database with the name sorting_algorithms_db. Next, you will need to select it and within it
import the sorting_algorithms_db.sql file which contains the necessary tables (all_questions_db, question_requests, registered_users and tests).
Finally, you can go to the localhost/index.html page and browse away at it!

It should be mentioned here that the saved (registered) users are: 
a with password 1,
mod with password mod and
admin with password admin.
Each of them have the roles user, moderator and administrator, along with the corresponding privileges.

Note: this site is written in Greek.

![1](https://user-images.githubusercontent.com/105225491/172657137-d800ecf4-d640-46ae-b53d-ecd1f7258d6e.png)
