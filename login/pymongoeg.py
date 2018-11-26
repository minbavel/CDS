
import pymongo

myclient = pymongo.MongoClient("mongodb://localhost:27017/")
mydb = myclient["dogs"]
mycol = mydb["disease"]

mydict = [{"Disease" : "rabies", "weightloss" : "", "rashes" : "", "arrogant" : "", "appetite" : ""},{"Disease" : "diabetics" , "lethargy" : "" , "appetite" : "" , "weightloss" : ""},{"Disease" : "Distemper" ,"fever" : "","vomitting" : "","cold" : ""}]
#{"Disease" : "rabies", "symptom" : {"symptom1" : "weightloss", "symptom2" : "rashes", "symptom3" : "pimples"}},{"Disease" : "diabetics" , "symptom" : {"symptom1" : "lethargy" , "symptom2" : "appetite" , "symptom3" : "weightloss"}},{"Disease" : "Distemper" , "symptom" : {"symptom1" : "fever","symptom2" : "vomitting","symptom3" : "cold"}}

x = mycol.insert_many(mydict)

"""
client = MongoClient("mongodb://localhost:27017/")
sym = raw_input("1 st symptom for the dog")
sym2 = raw_input("2 nd symptom for the dog")
print(type(sym))
print(type(sym2))
db1= client.raja #database
v = db1.disease.find_raw_batches()
print(type(v))
#print(type(mydict))
#print(mydict)
#o = mydict.values()
#o = mydict.values()
#for o in mydict.values():
 #print(0)

#for x in myList:
#for x in myList:
# if myList == "rashes":
        
   #print("High probability",myList[0])
   
#if sym in db and sym2 in db:
 #print("Both")
#elif sym in db or sym2 in db:
# print("one")
#else:
 #print("no clue")

if(any(s in sym for s in v) and any(p in sym2 for p in v)):
  print("high probability of")
elif(any(s in sym for s in v) or any(p in sym2 for p in v)):
  print("Chances of")
else :
  print("No clueeeeees")
  
"""