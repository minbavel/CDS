import smtplib
import threading
from datetime import date

def diff_dates(date1, date2):
    return abs(date2-date1).days

	
def main():
    d1 = date(2016,10,10)
    d2 = date(2018,10,10)
	results = diff_dates(d1, d2)
	if results > 700 :
           print 'Trigger mail for {} days '.format(results)
	       printit()
main()

def printit():
        threading.Timer(5.0, printit).start()
        server = smtplib.SMTP('smtp.gmail.com:25')
        server.ehlo()
        server.starttls()
        server.ehlo()
        server.login('kamalakannan1011@gmail.com','hatisrat')
        msg = "\r\n".join([
        "From: kamalakannan1011@gmail.com",
        "To: kamalakannan1011@gmail.com",
        "Subject: goofy da",
        "",
        "Why, oh why"
        ])
        server.sendmail('kamalakannan1011@gmail.com','kamalakannan1011@gmail.com',msg)
printit()
    
  

