print("**Python onestar**")
from pymongo import MongoClient
print("here one <br>")
client = MongoClient('localhost', 27017)
print("here 2 <br>")
#db = ratingsdb
print("here three <br>")
#collection = ratingsdb



for onestar in db.ratingsdb.find({'rating': '1'})
    print(onestar)
    print("<br>How about now?<br>")
print("<br>End of python <br>")

#http://api.mongodb.com/python/current/tutorial.html#making-a-connection-with-mongoclient
#https://stackoverflow.com/questions/19781768/executing-python-script-with-php-variables
