from os.path import exists
from os import makedirs

ENV_PATH = ".env"
DATABASE_ENV_PATH = ".env/database_pass"

dirExists = exists(ENV_PATH)
if not dirExists:
    makedirs(ENV_PATH)

#########################################
#              DATABASE                 #
#########################################
with open(DATABASE_ENV_PATH, 'w') as f:
    database = input("Database: ")
    f.write("MYSQL_DATABASE=" + database + "\r\n")
    user = input("Database user: ")
    f.write("MYSQL_USER=" + user + "\r\n")
    password = input("Database password: ")
    f.write("MYSQL_PASSWORD=" + password + "\r\n")
    passwordroot = input("Database root password: ")
    f.write("MYSQL_ROOT_PASSWORD=" + passwordroot + "\r\n")
    f.close()
    