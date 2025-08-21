# CSE 135 – Automated Deployment with GitHub Webhooks

This project demonstrates automated deployment of a personal/team website using GitHub Webhooks and a DigitalOcean Ubuntu server running Apache.

## Project Structure

- Live Website: https://yourdomain.com
- Personal Pages: https://yourdomain.com/members/yourname.html
- Deployment Hook Endpoint: https://yourdomain.com/hooks/deploy-site

## Deployment Workflow

1. Push changes to the main branch on GitHub.
2. GitHub sends a webhook payload to the server.
3. Webhook daemon on port 9000 receives the request.
4. It executes deploy.sh, which:
   - Pulls latest changes from GitHub
   - Updates live site files
   - Logs the action to /tmp/deploy.log

## File Overview

- /var/www/html/  
  ├── index.html  
  ├── members/  
  ├── deploy.sh ← Executes the git pull  
  └── favicon.ico

- /etc/webhook/hooks.json  
  Defines the webhook behavior and points to deploy.sh

## Security and SSL

- HTTPS enabled with Let's Encrypt + Certbot
- Port 443 opened in UFW
- Apache reverse proxy forwards /hooks/ to webhook server on port 9000

## Test Deployment

To test the deployment pipeline:
\`\`\`bash
touch index.html
git add .
git commit -m "Test update"
git push origin master
\`\`\`

## Webhook Test

You can also test with curl:
\`\`\`bash
curl -v http://localhost:9000/hooks/deploy-site
\`\`\`

## Deployment Demo

See file: Github-Deploy.gif  
This shows a file being pushed to GitHub and the live website auto-updating via webhook.

## Troubleshooting

- Check logs:
  - Webhook: journalctl -u webhook -f
  - Deploy script output: /tmp/deploy.log
- Ensure webhook service is running:
  \`\`\`bash
  sudo systemctl status webhook
  \`\`\`

---

## Basic Authentication
Passowrd
   987456321Nguyen

© 2025 – CSE 135 HW1 Team
