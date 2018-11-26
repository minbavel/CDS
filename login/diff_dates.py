from datetime import date

import smtplib

import threading

def diff_dates(date1, date2):
    return abs(date2-date1).days

def main():
    d1 = date(2016,10,10)
    d2 = date(2018,10,10)
    results = diff_dates(d1, d2)
    if results > 700 :
       print 'Trigger mail for {} days '.format(results)
       
       def mail():
       
           threading.Timer(10.0,mail).start()
           server = smtplib.SMTP('smtp.gmail.com:25')
           server.ehlo()
           server.starttls()
           server.ehlo()
           server.login('kamalakannan1011@gmail.com','hatisrat')
           msg = "\r\n".join([
           "From: kamalakannan1011@gmail.com",
           "To: msgun.mohan@gmail.com",
           "Subject: Vaccination",
           "",
           "Kindly vaccinate your dog"])

           server.sendmail('kamalakannan1011@gmail.com','msgun.mohan@gmail.com',msg)

       mail()
main()