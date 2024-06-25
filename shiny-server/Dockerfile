FROM hvalev/shiny-server-arm

RUN apt update

RUN R -e "install.packages(\"XML\", repos = \"https://cran.rstudio.com/\")"

RUN chmod -R 755 /srv/shiny-server/

EXPOSE 3838

CMD ["/usr/bin/shiny-server.sh"] 
