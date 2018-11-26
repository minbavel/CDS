Preventive measures for treating the Canis lupus familiaris

The main idea of our project is to help the user find out what disease their dog might have depending on the symptoms they provide. We also plan on triggering notification for the users when a dog needs to be vaccinated for rabies.
Decision Model:
	To achieve our goal, we have selected decision tree method which predicts disease based on the symptoms which user provides. The first part of the project is to gather all necessary basic information from users like Name, contact information, License type and breed and Date of birth and store it in Database. We have added a field called Last_vaccinated_date which will be updated and accessed only by clinicians and we will restrict user access to it. One of the main features in our project is to notify the users for vaccination, there are various types of vaccination for dogs and we have selected only rabies. Each dog must be vaccinated once in every two years for rabies. Our program selects last vaccinated date for all the records in database and compares the date with current date if the range is more than 2 years then it triggers an email notification to the users. The second part of the project is to predict the disease for this we will be providing drops down boxes to the users so that they can select the symptoms, based on the input from user and the system predicts the possible disease.
	As this is very rarely used by other, we were not able to get the Dataset for our requirement, so instead we found dataset for pet insurance and tried to clean up the data and loaded the same to database which we created. Another big challenge is to find symptoms in dogs we did not get enough information online about various disease and its symptoms. So, we tried approaching nearby pet clinics asking for information. Unfortunately, doctors are not available, and we didn’t get appointment to discuss in detail. But we had a chance to talk to one of the doctors in north western veterinary and he said the most common symptom in dogs in aggression, vomiting and Diarrhea.

Working:
 
We did our prediction in python and integrate it to php file. When the user selects any symptoms and click submit the python file will be called and by using decision tree it will display the corresponding symptom. For Example, if the user Clicks 2 symptoms like Fever, Restlessness and Aggression it will display that the dog has Rabies and some information regarding their cause and other symptoms and what could happen to the dog. If the user only types 1 symptoms we will display that there is a small possibility of rabies and could be other disease also. We will be storing the values of the user enters and check if it matches the database and print them.

The Output Will be: 
Who uses our system and why?
The output will be used by Dog owners and not any clinics or hospitals. We will help them determine what disease their dog might have without surfing many web browsers showing different symptoms for same diseases. So, it helps them get a clear idea of what the disease could be based on the symptom and not search of each disease and cross verify the symptoms and determining himself that his dog might have this disease.
This website also helps in keeping track of all his dog’s information and trigger notification to him when it needs to be vaccinated


















 

	
