# Vermont_Marathon_DMS
#### Written by Walter Proulx and the South Burlington High School Computer Science Class (2017-2018)

A Documentation Management System for the Vermont City Marathon medical tents to keep track of medical information and people.

---


### Setting Up a Local Testing Environment

Purpose: in order to write the program you need to simulate what the production environment will be like. This local testing environment will be contained to a single computer allowing you to utilize Apache, MySQL, and the Laravel PHP Framework to function without a server. (I will assume you are using a machine running Windows 10 for this tutorial.)

**1.) Download Git Bash**

Purpose: GitHub allows you to download this repository and help contribute to the code base without accidentally writing over another's work. This Terminal will allow you to interact with the repository and run Laravel commands that you will need later on.

- Go to https://git-scm.com/downloads and download the windows version of the Git Bash Terminal.

- Accept the defaults for the installation.

- When you have finished you check if the installation was successful by opening up a File Explorer window. Right click where there is not a file and you should now see a new option that says "Git Bash Here."

**2.) Setting Up the Git Repository**

Purpose: We now need to use the Git Bash to download the repository.

- Make a folder that you can put this program in and enter it in file explorer. Right click the empty space and open a Git Bash here. You should see your directory in the Terminal window look something like ```~/Desktop/Program```. This is the directory path you are currently in. Make sure you are in the folder you just made. (The folder name should be the final part of the Bash line.)

- Run the command ```git clone repository_link``` replacing the 'repository_link' with the actual link to the repository. (You can retrieve the repository link by going to the GitHub page of this program (also called the repository) and click "Clone or download" and copy the link. Remember, you can paste into a terminal by pressing M3 or the scroll wheel button.)

- Once the respository is downloaded you should see a file with the name of the repository. Change into that directory with ```cd Vermont_Marathon_DMS```. (Note: you can see all the files in a directory with the command ```ls```.)

**3.) Installing XAMPP**

Purpose: The Vermont Marathon DMS program uses MySQL and Apache and PHP to work. This means we need to install all these software. XAMPP is a package including all that we need. It'll help manage our local database environments.

- Go to this link https://www.apachefriends.org/index.html and download and install XAMPP for the appropriate OS. (Make sure you accept the defaults. XAMPP should install on the root of the C drive. If it doesn't, change it do install on the C: drive.)

- When starting up XAMPP you will see the control panel. Click start for Apache and MySQL. Both should start up without a problem. NOTE: if you are getting an error about a port being blocked, you need to change the port that the apache server is trying to use. To do this, hit the 'config' button near the start button and select "Apache (httpd-ssl.conf)". Once you have opened the file, look on line 36, it will have the text "listen 443". You must change the number 443 to a number of a port that is not currently being used by another service; I am using port 8080, but typically most ports above 1024 should be free.

- Now we need to point Apache to the public directory of our program. Go to the XAMPP control panel again and click Config on the Apache row, and hit Apache (httpd.conf). This will open up the configuration file. Press ```Ctrl + f``` and search for ```Document Root```. You should see two lines that look similar to the ones below. Change those default directories to the path that leads to your programs public folder. Examples are below. (Note: file explorer shows the directory next to the search bar. Clicking in an empty space in the directory track bar will show you the directory which you can copy.)
```
    DocumentRoot "C:\xampp\apache"
    <Directory "C:\xampp\apache">
    ---------------- CHANGE TO YOUR PUBLIC FOLDER ----------------
    DocumentRoot "C:\Users\Bob\Desktop\Laravel\Vermont_Marathon_DMS\public"
    <Directory "C:\Users\Bob\Desktop\Laravel\Vermont_Marathon_DMS\public">
```

**4.) Installing Composer**

Purpose: Composer is an essential part to get Laravel working. You will need to install this to get Laravel working.


- Download the Composer installer from the link below. There is a direct link to the installation file for Windows for convience. MAC installation is different, directions of which are on the website. Website Directions: https://getcomposer.org/doc/00-intro.md Windows Installation: https://getcomposer.org/Composer-Setup.exe For Windows machines, run Composer-Setup.exe and install on php.exe. The directory location is below if you can't find it.
    ```
        C:\xampp\php\php.exe
    ```

- Go back to your Git Bash (make sure you are in the right directory, use ```pwd``` to see your current directory) and run ```composer install```. Composer should now be installed! Run ```composer -v``` just to be sure. You should some terminal art like the one below if it installed correctly.

    ```
            ______
          / ____/___  ____ ___  ____  ____  ________  _____
         / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
        / /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
        \____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
    ```

- Congrats, you installed Composer! Now a local database needs to be set up. Without a database you can't test your code.

**5.) Setting Up the Database.**

Purpose: This program talks to a database, which currently doesn't exist. First we will make the database on MySQL and in the next step we will migrate the database.

- Open XAMPP and start Apache and MySQL if they are not already started.

- Click Admin under MySQL actions. You have now opened up phpMyAdmin. This is how you will manage your database and create it.

- Click New on the left side of the screen and enter the database name ```reimagined```. Then click create.

- On the top you should see multiple tabs. Click privileges and create a new account (under 'Add User Account'.)

- Fill in the user name with ```wproulx``` and password with ```Reimagine12```. The hostname should be 127.0.0.1. Make sure under 'Global privileges' you check off the 'Check all' box.

- Click the inconspicuous 'Go' button on the bottom right of the screen.

- Now you should have a user account under the 'User accounts tab that has all privileges.

- You may have noticed I gave you the username and password. This is because the .env file was uploaded with this program. Normally env files are kept off the internet, as they store passwords and usernames in plain text which is never a good idea. For this program it is okay, as it will only ever run locally at a very specific time in a very specific place. Under normal circumstances, you would make your own username and password through your own .env file.

**6.) Pushing Migrations to the Database**

Purpose: now we just need to migrate everything from the git repository to the server.

- Open your Git Bash again (making sure you are in the main directory of your program, not in any subfolders/subdirectories) and run ```php artisan migrate```. If everything was successful the Git Bash should have run a bunch of text and said it was successful at the end!

**7.) Checkout**

Purpose: everything is working, let us doublecheck!

- Open the XAMPP control panel and click Admin on the MySQL line. This should open up phpMyAdmin. This is a Graphical User Interface (GUI) that allows you to see the database you made in step five. If you click on 'reimagined' you should now see a bunch of tables listed. This is where our information will be stored.

- Next open up a web browser and type in 127.0.0.1. Now you should see the main page of our program! If you do, you are all set to test and code!

* Assignments:
    * Look at the CSS of the medical form. How can we make this look better/more readable? Here are some resources to help you compile SASS and learn the syntax: https://scout-app.io/ for compiling and https://sass-lang.com/documentation/syntax.
    * This application has little security implemented. Find vulnerabilities and either submit a report or code to fix the vulnerabilities! (For example, how could you submit data that is a different data type than expected?)
    * Finish the admin control panel. What might you want a user to be able to control? Should we have any prvilege hierarchy so only the admin has specific access to specific data?
    * Redesign the front page displaying all documents. What other information could we display that would be important for us to know during the marathon?
