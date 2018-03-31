print("**Python onestar**")
from pymongo.mongo_client import MongoClient
print("here one <br>")
client = MongoClient('localhost', 27017)
print("here 2 <br>")
db = client['ratingsdb']
print("here three <br>")
col = db['ratingsdb']

db.insert({'username':'Joe Johnny', 'rating':'4'})
print("inserted?")

print(col.find())
print("I am here now<br>")
for onestar in col.find({'rating': '1'}):
    print("Test")
    print onestar['username', 'rating']

#onestar = "col.find({'rating': '1'})"
print("<br>How about now?<br>")
#print(onestar)
print("<br> End of python <br>")

#http://api.mongodb.com/python/current/tutorial.html#making-a-connection-with-mongoclient
#https://stackoverflow.com/questions/19781768/executing-python-script-with-php-variables
