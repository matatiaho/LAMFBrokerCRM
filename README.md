# LAMFBrokerCRM Deploy Setup

This repository contains a basic deployment script and a small placeholder web page. The `deploy.php` script pulls changes from GitHub when triggered by a webhook with the secret `my_super_secret_123`.

Clone this repository on your Hostinger site in `/home/u593997835/domains/crm.lamfbroker.com/public_html` and configure the webhook to call `deploy.php`. Any push or PR merge will be reflected on the live site via `git pull`.

## Configuring the remote
The deployment script expects the repository's `origin` remote to use SSH. Configure it on the server with:

```bash
git remote set-url origin git@github.com:matatiaho/LAMFBrokerCRM.git
```

Ensure the server has an SSH key registered with GitHub and that host verification is set up so `git pull` can run without prompts.

## Web Root
The `public/` directory contains the site files. Currently it holds a simple `index.php` placeholder. Replace it with your CRM or other application code. The deployment script does not overwrite database or configuration files—only the tracked files in the repository.

## Best Practices
- Keep the webhook secret secure and rotate it if compromised.
- Add logs like `deploy_log.txt` to `.gitignore` (already included).
- Use a separate branch for development and merge into `main` when ready to deploy.

