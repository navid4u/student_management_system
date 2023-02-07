# Student Management System
A simple PHP/mysqli system to manage your students, their payments and the sessions for which they have paid. 
In this webapp, which I have personally devised for myself, I can add the information of each student pf mine to a database. The name is stored with an ID and all the other information such as their age, purpose, level, etc. 
In addition, after I have held a session with them, I can add the session to the database (stored in another table called sessions), which is linked with the STUDENTS table with the ID as their common column. I added the features I actually needed. For example, for each session, I can take note of the homework/ assignment I have given them. In this way I can always keep track of what they are doing, and what we will be doing in the class the session after. 
Also a page is designed to add the payments they have had in a specific date. 
The outline of pages is developed using CSS and HTML, the backend is PHP and simple queries. The database was developed using Mysqli workbench 2022. 
# How to use it?
You need to config your connection on the file CONN.PHP
* (your database should include 3 tables which can be made through the queries in the files englishcall_students.sql , englishcall_sessions.sql  and englishcall_payment,sql
# Mysqli queries
There are 3 tables in the database of this webapp, the queries of each have been uploaded. To use them, you have gat to make a database called "englishcall" and then import the .sql files in it. For further help, you can contact me. 
