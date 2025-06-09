# Odoo CRM Installation

The following steps were used to install Odoo CRM on a fresh system.

1. Install the package from the Ubuntu repositories:
   ```bash
   apt-get install odoo
   ```
2. Install required dependencies if they are missing:
   ```bash
   apt-get install python3-lxml-html-clean
   pip install lxml==4.9.4
   pip install werkzeug==2.3
   ```
3. Verify the installation:
   ```bash
   odoo --version
   ```
   This should output `Odoo Server 16.0`.

Odoo may emit a warning about running as the root user; consider running the
service under a dedicated account in production.
