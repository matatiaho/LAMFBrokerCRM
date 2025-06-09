# LAMFBrokerCRM Deploy Setup

This repository contains only a deployment script and the Git metadata. The `deploy.php` script pulls changes from GitHub when triggered by a webhook with the secret `my_super_secret_123`.

Clone this repository on your Hostinger site in `/home/u593997835/domains/crm.lamfbroker.com/public_html` and configure the webhook to call `deploy.php`. Any push or PR merge will be reflected on the live site via `git pull`.

The deployment script expects the repository's `origin` remote to use SSH. Configure it with:

```bash
git remote set-url origin git@github.com:matatiaho/LAMFBrokerCRM.git
```

Ensure the server has the appropriate SSH key and host verification set up so `git pull` can run without prompts.
