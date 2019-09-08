#!/usr/bin/python3
import sys, hashlib, random, smtplib, mysql.connector
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
from email.mime.image import MIMEImage


def send_mail(mail, sub):
    if sub == 'verifier_compte':
        # img_data = open('/public/images/logo.PNG', 'rb').read()
        key = random.randint(100000, 999999)
        key_crypt = hashlib.sha1(str(key).encode()).hexdigest()

        msg = MIMEMultipart('alternative')
        msg['Subject'] = 'Confirmation Compte @ti-asa'

        message = MIMEText("@ti-asa")


        html = MIMEText(f"""\
        <html>
        <head>
          <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
          <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        </head>

        <body style="font-family: Sans;">
          <section style=" margin-left: 3%; width:70%;   box-shadow: 0 6px 8px 0 #888; padding-bottom: 1.5%;">
          <h1 style="color: #fff; margin-top: 0%; background-color: #e74926; padding:3%;"> <i class="fa fa-rss"></i> RISE | Ti-asa </h1>
          <h3 style=" margin-left: 13%;  color: #e74926; "> Bonjour <span> Landris Daniel, </span> </h3>
          <p style="margin-left: 4%; margin-right:4%; color: #222">Je suis un des administrateurs de <i>@ti-asa.</i></p>
          <p style="color: #46788D"; padding: 1%;>
                Nous sommes ravis que vous utilisiez notre service comme nous sommes ravis de le développer pour vous. <p>
          </p>
          <p style="margin-left: 8%; color: #222"> Votre  code de confirmation : <span style="color:#e74926; font-size:18px;">688858<span></p>
          <h3 style=" margin-left: 13%;  color: #e74926; "> La flemme d'ecrire? </h3>
          <p style="margin-left: 4%; color: #222"> Veuillez cliquez directement sur ce lien: <a style="color: #e74926" href="ti-asa.esti.mg/index.php?{key_crypt}">ti-asa.esti.mg/index.php?{key_crypt}</a></p>
          <p style="margin-left: 4%; color: #222"> L'équipe @ti-asa : +261 32 53 984 96</p>
          <br>
          </section>
        </body>
    </html>
        """, 'html')
        # image = MIMEImage(img_data)
        msg.attach(message)
        msg.attach(html)
        # msg.attach(image)

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
