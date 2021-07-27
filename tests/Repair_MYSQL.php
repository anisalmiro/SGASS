<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

CREATE USER 'anisiobule'@'localhost' IDENTIFIED BY 'An1s1@1990';
GRANT ALL PRIVILEGES ON *.* TO 'anisiobule'@'localhost' WITH GRANT OPTION;
exit
systemctl status mysql.service
sudo mysqladmin -p -u root version
