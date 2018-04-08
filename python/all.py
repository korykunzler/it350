from pymongo import MongoClient
client = MongoClient('localhost', 27017)
db = client['ratingsdb']
coll = db['ratingsdb']

printall = coll.find()
print("Starting printout... <br><br>")
for p in printall:
    print p
    print("<br>")
print("<br>End of printout")

#http://api.mongodb.com/python/current/tutorial.html#making-a-connection-with-mongoclient
#https://stackoverflow.com/questions/19781768/executing-python-script-with-php-variables
