print("**Python printall**")
from pymongo import MongoClient
print("here one <br>")
client = MongoClient('localhost', 27017)
print("here 2 <br>")
print("here three <br>")
db = client['it350']
coll = db['ratingsdb']
print("I am here now<br>")
printall = coll.find()
print("*************<br><br>")
for p in printall:
    print("Test<br>")
    print p

#onestar = "col.find({'rating': '1'})"
print("<br>How about now?<br>")
#print(onestar)
print("<br> End of python <br>")

#http://api.mongodb.com/python/current/tutorial.html#making-a-connection-with-mongoclient
#https://stackoverflow.com/questions/19781768/executing-python-script-with-php-variables
