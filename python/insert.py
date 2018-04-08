from pymongo import MongoClient
client = MongoClient('localhost', 27017)
db = client['ratingsdb']
coll = db['ratingsdb']

printall = coll.find()
print("Starting printout... <br><br>")
for p in printall:
    print p
    print("<br>")
print("<br>End of printout")
