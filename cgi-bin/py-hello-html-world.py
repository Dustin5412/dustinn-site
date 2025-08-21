#!/usr/bin/env python3
print("Content-Type: text/html\n")
print("<html><body>")
print("<h1>Hello World from Python!</h1>")
import datetime, os
print("<p>Date/Time:", datetime.datetime.now(), "</p>")
print("<p>Your IP:", os.environ.get("REMOTE_ADDR"), "</p>")
print("</body></html>")
