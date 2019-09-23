# SQLGeneratorFromJson

This is a ready-to-use script that receives any json file either from your local or external server via http*.
This script  converts your Json file into a *.txt SQL lines properly so you can easily apply it to any SQL Database.
Enjoy it!

# How to start

Directory:
-

:open_file_folder: SQLGeneratorFromJson
- README.md
- dataexporter
- exampleusers.json
   
    :open_file_folder: importer_files
    - Importer.php


Start the Linux terminal and type:
```terminal
    $ php importdata example-users.json
```
A file named example-users.txt will be create in the same directory where the *json file it is.
