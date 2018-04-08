from pymongo import MongoClient
client = MongoClient('localhost', 27017)
db = client['ratingsdb']
coll = db['ratingsdb']

username = sys.argv[1]
rating = sys.argv[2]

print(username, "<br>")
print(rating, "<br>")

#printall = coll.find()
#print("Starting printout... <br><br>")
#or p in printall:
#    print p
#    print("<br>")
#print("<br>End of printout")
