#!/usr/bin/python3
import sys, hashlib, random, smtplib, mysql.connector
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
from email.mime.image import MIMEImage


def send_mail(mail, sub):
    if sub == 'verifier_compte':
        #img_data = open('/public/images/logo.PNG', 'rb').read()
        img_data = open('/public/images/logo.PNG', 'rb').read()
        key = random.randint(100000, 999999)
        key_crypt = hashlib.sha1(str(key).encode()).hexdigest()

        msg = MIMEMultipart('alternative')
        msg['Subject'] = 'Confirmation Compte @ti-asa'

        message = MIMEText("@ti-asa")


        html = MIMEText(f"""\
        <html>
          <head></head>
          <body>
            <h1 style="color:#610f91;">  Rise @ti-asa </h1>
            <h2> Bonjour, </h2>
            <p style='font-size:14px;'>Je suis un des administrateurs de @ti-asa <p>
            <p style='font-size:18px;'> Nous sommes ravi que vous utilisez notre service <p>
            <p> Voici votre code de confirmation <span style="font-weight:bold;color:fff;">{key}<span></p>
            <div>
            <h2> La flemme d'ecrire? </h2>
            <p> cliquer directement sur ce lien: <a href="ti-asa.esti.mg/index.php?{key_crypt}">ti-asa.esti.mg/index.php?{key_crypt}</a><p>
            </div>
          </body>
        </html>
        """, 'html')
        image = MIMEImage(img_data)
        msg.attach(message)
        msg.attach(html)
        msg.attach(image)

        server = smtplib.SMTP('smtp.gmail.com:587')
        server.starttls()
        server.login("gaetan.jonathan.bakary@esti.mg", "__@ti-asa__!")
        server.sendmail('gaetan.jonathan.bakary@esti.mg', mail, msg.as_string())
        server.quit()

        cursor.execute("""
            UPDATE PERSONNE SET code=%s where mail=%s; """
            , (key_crypt, mail, ) )

        connect.commit()
        connect.close()


connect = mysql.connector.connect(host='localhost', user='rise', password='__@ti-asa__!', database='tia_asa')
cursor = connect.cursor(buffered=True)

send_mail(sys.argv[1], sys.argv[2])
