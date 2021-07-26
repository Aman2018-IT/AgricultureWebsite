# AgricultureWebsite
Created an website in a field of agriculture to spread and provide  knowledge regarding various conditions ,procedures and requirements  in farming of various crops.
Project: Use of Technology in Agricultural Sector.

Installation: This project requires installation of Xampp to test run the webpage on the local server and a text editor(Sublime text/Visual Studio code) in order to read the code.

              Xampp: 1)After installation 
          
                  1.1) A Xampp file must have been already created after the installation on a particular drive. Cut/Copy and paste the 'Code' file that has been provided to you under the 
                       path directory--> Drive:\Xampp\htdocs
                  1.2) Open Xampp control pannel and start Apache and Mysql.
           
             Browser: 2)Open browser(preferred browser:Google chrome) and type 'http://localhost/phpmyadmin' in order to open phpmyadmin to see the databases.
           
                  2.1) Import the database 'login_db' of the project on the phpmyadmin page.(Database will be provided).
                  2.2) After importing, Open login_db database in order to view the tables under the databases
                       Tables: Crop_management, users.

             Note: If problem occurs while importing the database follow the following steps to create the exact database used in this project(No changes needed to be done in the front end i.e source code in the text editors):
                      
                    1)Click on 'New' on the left panel --> set 'Database name' to 'login_db' --> click on Create button.
                    2)Select the 'log_in" database --> Go to sql panel --> Copy,paste the following queries in order to create the tables i.e 'users','crop_management' :
                          
                     CREATE TABLE `users` (`id` int(20) NOT NULL AUTO_INCREMENT,`user_id` bigint(20) NOT NULL,`user_name` varchar(100) NOT NULL,`password` varchar(100) NOT NULL,
                                            `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),PRIMARY KEY (`user_id`),KEY `user_id` (`user_id`),
                                             KEY `date` (`date`),KEY `user_name` (`user_name`),KEY `password` (`password`) USING BTREE,KEY `id` (`id`) USING BTREE)ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;  

                    CREATE TABLE `crop_management` (`id` int(20) NOT NULL AUTO_INCREMENT,`Enter_crop_name` varchar(100) NOT NULL,`Date_of_production` date NOT NULL,`Production_Amount` varchar(100) NOT NULL,
                                                           `Total_Production_till_date` varchar(100) NOT NULL,`userid` int(20) NOT NULL,PRIMARY KEY (`id`))ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;
                               

Text Editor(Sublime/Visual Studio code): In order to read the code in a proper format,open any one of the text editors that has been installed and open the 'Code' Folder on your text editor.

Run: In order to run the website open a new tab and write 'http://localhost/code/' to start the website(You will be redirected to the login page of the website).
![Screenshot (555)](https://user-images.githubusercontent.com/73181802/126977249-1c521b60-2e8e-4760-8d0c-f8c5dee077f8.png)
![Screenshot (556)](https://user-images.githubusercontent.com/73181802/126977266-1879bf70-64be-4cd5-9d4b-d4400d4333b6.png)
![Screenshot (557)](https://user-images.githubusercontent.com/73181802/126977286-b850af33-bf4a-4e8e-ad52-50a526ca85b8.png)
![Screenshot (551)](https://user-images.githubusercontent.com/73181802/126977299-d3de65d2-e477-4060-baa8-b240d228e648.png)
![Screenshot (552)](https://user-images.githubusercontent.com/73181802/126977307-51410148-8aac-4da1-897a-215c57c479c1.png)
![Screenshot (553)](https://user-images.githubusercontent.com/73181802/126977329-739390b1-559e-4f14-a9e5-9e0ee8aa7d94.png)
![Screenshot (554)](https://user-images.githubusercontent.com/73181802/126977342-51368de0-f9e5-4673-a2a9-cdaeba5b6c2d.png)

