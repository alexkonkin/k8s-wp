kubectl cp wp-config.php nginx-wp-dp-7b89f5d74-zv5cn:/var/www/html/wp-config.php


kubectl cp db.sql mysql-deployment-848d5d9db9-fnz2j:/tmp
kubectl exec -it mysql-deployment-848d5d9db9-fnz2j -- bash
mysql -uroot --password=R00t

use kodekloud_db9;
source /tmp/db.sql;
