print("**Python printall**")
from pymongo.mongo_client import MongoClient
print("here one <br>")
client = MongoClient('localhost', 27017)
print("here 2 <br>")
print("here three <br>")
#col = db['ratingsdb']

print(db.ratingsdb())
print("I am here now<br>")
for printall in db.ratingsdb():
    print("Test")
    print printall['username', 'rating']

#onestar = "col.find({'rating': '1'})"
print("<br>How about now?<br>")
#print(onestar)
print("<br> End of python <br>")

#http://api.mongodb.com/python/current/tutorial.html#making-a-connection-with-mongoclient
#https://stackoverflow.com/questions/19781768/executing-python-script-with-php-variables
