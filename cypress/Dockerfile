FROM cypress/base:12

WORKDIR /app

RUN npm install

RUN npm install cypress

RUN apt-get update

RUN apt-get -y install cron

RUN service cron start

RUN (crontab -l ; echo "* * * * * /app/cypress/cypress-cron.sh  > /proc/1/fd/1 2>/proc/1/fd/2") | crontab

RUN service cron start

ENTRYPOINT ["/app/cypress/cypress-entrypoint.sh"]
