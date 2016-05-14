# Combination of MySQL + MongoDB in Laravel [CRUD]

# MongoDB Configuration:
```
driver: mongodb
host: localhost
port: 27017
database: admin
username: root
password: root
```
Create User in MongoDB
```
mongo
use admin
db.createUser({user:"root",pwd:"root",roles:["root"]})
```
