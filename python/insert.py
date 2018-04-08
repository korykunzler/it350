import sys
from pymongo import MongoClient
client = MongoClient('localhost', 27017)
db = client['ratingsdb']
coll = db['ratingsdb']

username = sys.argv[1]
rating = sys.argv[2]
coll.insert({username:"username", rating: "rating"})
print("<br>Successfully inserted. Now you have to figure out how to get back. Sorry!<br>")
