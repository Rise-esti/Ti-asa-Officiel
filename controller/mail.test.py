

Here is the snippet I use to send HTML emails.

Please also read this

import smtplib

from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

msg = MIMEMultipart('alternative')

msg['Subject'] = "Link"
msg['From'] = "my@email.com"
msg['To'] = "your@email.com"

text = "Hello World!"

html = """\
<html>
  <head></head>
  <body>
    <p style="color: red;">Hello World!</p>
  </body>
</html>
"""

part1 = MIMEText(text, 'plain')
part2 = MIMEText(html, 'html')

msg.attach(part1) # text must be the first one
msg.attach(part2) # html must be the last one

s = smtplib.SMTP('localhost')
s.sendmail(me, you, msg.as_string())
s.quit()
