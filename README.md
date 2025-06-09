# LAMFBrokerCRM Deploy Setup

This repository contains only a deployment script and the Git metadata. The `deploy.php` script pulls changes from GitHub when triggered by a webhook with the secret `my_super_secret_123`.

Clone this repository on your Hostinger site in `/home/u593997835/domains/crm.lamfbroker.com/public_html` and configure the webhook to call `deploy.php` so that any push or PR merge will be reflected on the live site via `git pull`.
