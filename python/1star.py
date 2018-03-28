client = MongoClient('localhost') //Not working yet

onestar = db.ratingsdb.find({'rating': 1})
print(onestar)
