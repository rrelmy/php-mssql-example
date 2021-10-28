# Based on https://github.com/tometchy/Docker-compose-dotnet-core-and-mssql/tree/master/Db
FROM mcr.microsoft.com/mssql/server:2017-latest

ENV ACCEPT_EULA y
ENV SA_PASSWORD secret!123

RUN mkdir -p /usr/src/app
WORKDIR /usr/src/app
COPY . /usr/src/app
RUN chmod +x /usr/src/app/run-initialization.sh

CMD /bin/bash ./entrypoint.sh
