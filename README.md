# CTF Game

## Description
This CTF game was originally designed and developed by a Codific team member. It was played by the rest of the team on the Christmas company event.

The game is a vulnerable webshop application which contains 11 hidden flags. They will be found after a direct execution of a vulnerability or after a little searching around.

Some hints are present around the website in order to guide the player into the right direction, but some things are also present just to send the player into a pointless "rabbit hole".

Some of the flags will require "thinking out of the box".

All flags start with the "CDF" prefix followed by curly brackets with text inside. Example:
```
CDF{7H1s_1s_3X4MpL3_fl49}
```
## Technical information
The code is written in plain PHP on purpose. The game consists of 3 docker containers - Apache, MariaDB and Cypress. Only the Apache server will be directly accessible.


## How to play
In order to start the game download the code and run:
```
docker-compose up
```

After that the web application will be listening on port 9090.

## Additional infomation
The solutions for the flags are not included.

Like the Codific page on LinkedIn and send a message to Codific and we’ll send you the files within a day.
