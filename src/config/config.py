from os.path import exists

CONFIGURATION_EXEMPLE = "config/bdd.json.exemple"
CONFIGURATION = "config/bdd.json"
DATABASE_ENV_PATH = ".env/database_pass"

fileExists = exists(CONFIGURATION_EXEMPLE)
if not fileExists:
    print("ERROR: Configuration file doesn't exists")
    quit()

#########################################
#              DATABASE                 #
#########################################
fileExists = exists(DATABASE_ENV_PATH)
if not fileExists:
    print("ERROR: Database environnement file doesn't exists")
    quit()

replace = dict()

with open(DATABASE_ENV_PATH, 'r') as env:
    contents = env.read()
    lines = contents.split('\n')
    replace["databasexx"] = lines[0].split('=')[1]
    replace["userxx"] = lines[1].split('=')[1]
    replace["passwordxx"] = lines[2].split('=')[1]
    env.close()

with open(CONFIGURATION_EXEMPLE, 'r') as conf:
    contents = conf.read()
    for k,v in replace.items():
        contents = contents.replace(k, v)
        
with open(CONFIGURATION, 'w') as conf:
    conf.write(contents)
    conf.close()
