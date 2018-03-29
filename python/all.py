from pymongo import MongoClient
client = MongoClient('localhost', 27017)
db = ratingsdb
#collection = ratingsdb


import pprint
myall = db.ratingsdb.find({username:1, rating:1})
print(myall)
