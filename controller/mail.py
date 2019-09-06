#!/usr/bin/python3 
import sys
from email.mime.text import MIMEText
import random
import smtplib
import mysql.connector 

def send_mail(mail, sub):
    if sub == 'verifier_compte':
        key = random.randint(100000, 999999)
        message = MIMEText(f"""
        
        Bonjour, 
            Je suis un des administrateurs de @ti-asa.
            Merci d'avoir utiliser notre service. 
            
          Voici votre code de confirmation: {key}
        
         Cordialement,
         
         Gaetan Jonathan BAKARY 
        
        """)
        message['Subject'] = 'Confirmation Compte @ti-asa'

        message['From'] = 'gaetan.jonathan.bakary@esti.mg'
        message['To'] = mail
        

        server = smtplib.SMTP('smtp.gmail.com:587')
        server.starttls()
        server.login("gaetan.jonathan.bakary@esti.mg", "__@ti-asa__!")
        server.send_message(message)
        server.quit()
        cursor.execute("""
            UPDATE PERSONNE SET code=%s where mail=%s; """
            , (key, mail, ) )
        
        connect.commit()
        connect.close()
        
        

connect = mysql.connector.connect(host='localhost', user='rise', password='__@ti-asa__!', database='tia_asa')
cursor = connect.cursor(buffered=True)

send_mail(sys.argv[1], sys.argv[2])