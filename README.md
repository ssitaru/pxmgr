# pxmgr - practice manager

## this project is work in progress
planned core features:

- users, patients, patient files
- login/logout
- patient file entries (customizable)
- customizable views for each profession/occupation (doctor, helper; registration, treatment, lab, etc.)

other nice to have features:

- portal for patients (so they can get appointments and upload data/pics/messages/etc.)

## install howto

0. install prerequisites (web server, php, mysql, composer)
1. clone this git: `git clone https://github.com/ssitaru/pxmgr`
2. edit `config/app.php` for mysql user/pass/db
3. install dependencies via composer: `composer install`
4. enable pretty urls (for nginx)

> location /pxmgr {
>	rewrite     ^/pxmgr$ /pxmgr/ permanent;
>	rewrite     ^/pxmgr/(.+)$ /$1 break;
>	root        /www/pxmgr/webroot;
> 	try_files $uri $uri/ /pxmgr/index.php?$args;
> }


## license
This work is licensed under the Creative Commons Attribution-ShareAlike 4.0 International License. To view a copy of this license, visit http://creativecommons.org/licenses/by-sa/4.0/ or send a letter to Creative Commons, PO Box 1866, Mountain View, CA 94042, USA.

This software uses the CakePHP framework, which is licensed under the MIT license.
