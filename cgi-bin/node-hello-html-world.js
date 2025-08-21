#!/usr/bin/env node
console.log('Content-Type: text/html\n');
console.log('<html><body>');
console.log('<h1>Hello World from NodeJS!</h1>');
console.log('<p>Date/Time: ' + new Date() + '</p>');
console.log('<p>Your IP: ' + process.env.REMOTE_ADDR + '</p>');
console.log('</body></html>');
