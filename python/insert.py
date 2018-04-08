from pymongo import MongoClient
client = MongoClient('localhost', 27017)
db = client['ratingsdb']
coll = db['ratingsdb']

print("Made it here")
username = sys.argv[1]
rating = sys.argv[2]

print(username, "<br>")
print(rating, "<br>")

coll.insertOne({username:"username", rating: "rating"})
print("<br>After insert statement")
#print("Starting printout... <br><br>")
#or p in printall:
#    print p
#    print("<br>")
#print("<br>End of printout")
