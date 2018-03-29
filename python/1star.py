from pymongo import MongoClient
client = MongoClient('localhost', 27017)
db = ratingsdb
#collection = ratingsdb


import pprint
onestar = db.ratingsdb.find({'rating': '1'})
pprint(onestar)


#http://api.mongodb.com/python/current/tutorial.html#making-a-connection-with-mongoclient
#https://stackoverflow.com/questions/19781768/executing-python-script-with-php-variables
