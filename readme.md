# UBT assignment
This project has been developed using Laravel 5.2 with Service/Repository pattern. for setting up this project,

## Steps to run locally
1. Clone the code of this Repository, then create a database on your local system.
2. Change the MySql database credentials in .env file.
3. In the shell prompt, Change to the project directory.
4. Run this command:
    ```
    php artisan migrate
    ```
This will create the database tables required to run the project.
5. Create the virtualhost for apache (say ubtassign.local) to point to /path/to/project/public
    ```
    <VirtualHost *:80>
        ServerName ubtassign.local
        DocumentRoot "/Library/WebServer/Documents/ubtassignment/public"

        <Directory "/Library/WebServer/Documents/ubtassignment/public">
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>
    ```
6. In the local hosts file, point ubtassign.local to 127.0.0.1
    ```
    127.0.0.1       ubtassign.local
    ```
7. Navigate to ubtassign.local in the browser. You will see the basic landing page of project.
8. You will have to create one user by clicking on Register Link on the top right navbar.
9. After registering, login using the details with which you registered.
10. Go to http://developer.edmunds.com/ and register for a new API Key.
11. Open config/app.php file and put your API Key in 'edmunds' sections
    ```
    'edmunds' => [
            'url'   =>  'http://api.edmunds.com/api/vehicle/v2/',
            'app_key'   =>  '<put your key here>'
        ]
    ```
12. Click on the Link 'Import Makes & Models' on the top navbar being logged in, and click on button 'Click Here' on the page which appears. This will start fetching the makes and models from the edmunds api and putting in the local database if not already exist.
13. On the landing page, you will see two text boxes for Make and Model, Start typing in the Make textbox, e.g. Chevrolet, you will see the autocomplete.
14. When you select one of the options from autocomplete, start typing in Model Text box, this will also show an autocomplete showing the values based on the make selected in the first text box.
15. When you select the model, a photo of car will be displayed in background.

## Web API End points
The Routes of these APIs are defined in app/Http/routes.php file.

1. For fetching all makes or makes starting with some characters.
    ```
    /api/make/{make}
    ```
    or
    ```
    /api/make
    ```
2. For fetching models based on a make.
    ```
    /api/model/{make_id}
    ```
3. For fetching photos of Car.
    ```
    /api/photo/{make}/{model}
    ```

## Considerations in the project

1. Media API of edmunds did not work as it was giving Authentication Error, So could not use the API. Stub for local API and how to fetch in AngularJS has been created.
2. OAuth2.0 was not implemented due to lack of time.
