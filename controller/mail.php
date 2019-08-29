import sys
from email.mime.text import MIMEText
import random
import smtplib
import mysql.connector 

def send_mail(mail, sub):
    if sub == 'verification':
 
        message = MIMEText(f"""
        
        Bonjour, 
            Je suis un des administrateurs de @ti-asa.
            Merci d'avoir utiliser notre service. 
            
          Voici votre code de confirmation: {random.randint(100000, 999999)}
        
         Cordialement,
         
         Gaetan Jonathan BAKARY 
        
        """)
        message['Subject'] = 'Confirmation Compte @ti-asa'

        message['From'] = 'gaetan.jonathan.bakary@esti.mg'
        message['To'] = mail
        

        server = smtplib.SMTP('smtp.gmail.com:587')
        server.starttls()
        server.login("gaetan.jonathan.bakary@esti.mg", "__@ti-asa__!")
#         server.login('ti.asa.rise@gmail.com', '123SDFGHJKL')
        server.send_message(message)
        server.quit()
        
        

send_mail(sys.argv[1], sys.argv[2])