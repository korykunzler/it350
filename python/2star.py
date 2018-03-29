from pymongo import MongoClient
client = MongoClient('localhost', 27017)
db = ratingsdb
#collection = ratingsdb


import pprint
twostar = db.ratingsdb.find({'rating': 2})
print(twostar)
