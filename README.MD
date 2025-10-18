# Beautix

Small salon & barber website (PHP + MySQL) with an admin dashboard (ElaAdmin).

## Quick start
- Install XAMPP / LAMP and place the project in your web root (e.g. htdocs/beautix).
- Start Apache and MySQL.
- Import database: use `barberz.sql` (or `budgettracker.sql` as needed).
- Open in browser: http://localhost/beautix/index.php

## Important files
- Public site: [index.php](index.php)  
- Services & chat integration: [services.php](services.php)  
- AI backend endpoint: [ai.php](ai.php)  
- Admin pages & template: [admin/ElaAdmin-master](admin/ElaAdmin-master/)  
- Admin add service form: [admin/addservice.php](admin/addservice.php)  
- License: [LICENSE](LICENSE)

## Notes
- Configure database connection in [config.php](config.php).
- Set the API key in [ai.php](ai.php) before using the AI endpoint.
- The admin template (ElaAdmin) includes example assets under [admin/ElaAdmin-master/assets](admin/ElaAdmin-master/assets).

## License
This project is MIT-licensed — see [LICENSE](LICENSE).