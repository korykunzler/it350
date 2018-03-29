from pymongo import MongoClient
client = MongoClient('localhost', 27017)
db = ratingsdb
#collection = ratingsdb


import pprint
fivestar = db.ratingsdb.find({'rating': 5})
print(fivestar)
