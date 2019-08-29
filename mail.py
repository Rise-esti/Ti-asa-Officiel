import sys

def send_mail(mail, sub):
    if sub == 'verification':
 
        message = MIMEText('Votre plante est train de mourir si vous ne reagissez pas')
        message['Subject'] = 'Danger plante'

        message['From'] = 'ti.asa.rise@gmail.com'
        message['To'] = mail

        server = smtplib.SMTP('smtp.gmail.com:587')
        server.starttls()
        server.login('ti.asa.rise@gmail.com','**************')
        server.send_message(message)
        server.quit()
        
        

send_mail(sys.argv[1], sys.argv[2])