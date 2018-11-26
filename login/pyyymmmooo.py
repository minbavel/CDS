"""
import pymongo

myclient = pymongo.MongoClient("mongodb://localhost:27017/")
mydb = myclient["dogs"]
mycol = mydb["disease"]

mydict = [{"Disease" : "rabies","weightloss" : "","rashes" : "","pimples" : ""},{"Disease" : "diabetics","lethargy" : "","appetite" : "", "weightloss" : ""},{"Disease" : "Distemper","fever" : "","vomitting" : "","cold" : "" }]

x = mycol.insert_many(mydict)


import pymongo

myclient = pymongo.MongoClient("mongodb://localhost:27017/")
mydb = myclient["mydatabase"]
mycol = mydb["customers"]

mylist = [
  { "name": "Amy", "address": "Apple st 652"},
  { "name": "Hannah", "address": "Mountain 21"},
  { "name": "Michael", "address": "Valley 345"},
  { "Sandy": "", "address": "Ocean blvd 2"},
  { "name": "Betty", "address": "Green Grass 1"},
  { "name": "Richard", "address": "Sky st 331"},
  { "name": "Susan", "address": "One way 98"},
  { "Vicky": "", "address": "Yellow Garden 2"},
  { "name": "Ben", "address": "Park Lane 38"},
  { "name": "William", "address": "Central st 954"},
  { "name": "Chuck", "address": "Main Road 989"},
  { "Viola": "", "address": "Sideway 1633"}
]

x = mycol.insert_many(mylist)

"""



from pymongo import MongoClient
sym = raw_input("1 st symptom for the dog")
sym2 = raw_input("2 nd symptom for the dog")

client = MongoClient("mongodb://localhost:27017/")
db1= client.dogs
number = 0
for db in db1.disease.find():
  if(any(s in sym for s in db) and any(p in sym2 for p in db)):
     print("highprobability of",db['Disease'])  
  elif(any(s in sym for s in db) or any(p in sym2 for p in db)):
    print("Chances of",db['Disease'])
  else:
     number = number + 1
	
if number == 3: 
   print("no clues")   


  
  
  
 
  
"""
if ((sym in db) and (sym2 in db)):
      print("high probability of")
  elif ((sym in db) or (sym2 in db)):
      print("chances of")
  else:  
      print("no clues")
	  
#db = db2.replace(':' , ',')
#print(type(db))
#print(db)


if sym in db and sym2 in db:
 #for s in db:
  print("both")
elif sym in db or sym2 in db:
   #for s in db:
      print("one")
else:
 print("No chances")"""
"""if(any(s in sym for s in db) and any(p in sym2 for p in db)):
  print("high probability of",)
elif(any(q in sym for q in db) or any(r in sym2 for r in db)):
  print("Chances of",)
else :
  print("No clueeeeees")
 
if(any(s in sym for s in db) and any(p in sym2 for p in db)):
  print("high probability of",)
 elif(any(q in sym for q in db) or any(r in sym2 for r in db)):
  print("Chances of",)
 else :
  print("No clueeeeees")
 
"""