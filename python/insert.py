import sys
from pymongo import MongoClient
client = MongoClient('localhost', 27017)
db = client['ratingsdb']
coll = db['ratingsdb']

username = sys.argv[1]
rating = sys.argv[2]

print("Now here")
print(username, "<br>")
print(rating, "<br>")
print("About to insert")
coll.insert({username:"username", rating: "rating"})
print("<br>After insert statement<br>")
HttpResponseRedirect('/reviewpage.php/')
#print("Starting printout... <br><br>")
#or p in printall:
#    print p
#    print("<br>")
#print("<br>End of printout")
