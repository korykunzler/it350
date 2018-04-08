import sys
from pymongo import MongoClient
client = MongoClient('localhost', 27017)
db = client['ratingsdb']
coll = db['ratingsdb']
print("testing")
print(sys.argv[1])
print("<<br>>")
print(sys.argv[1])
print("<br>Made it here")
username = sys.argv[1]
rating = sys.argv[2]

print("Now here")
print(username, "<br>")
print(rating, "<br>")

coll.insertOne({username:"username", rating: "rating"})
print("<br>After insert statement")
#print("Starting printout... <br><br>")
#or p in printall:
#    print p
#    print("<br>")
#print("<br>End of printout")
