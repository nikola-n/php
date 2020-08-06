#Differences between include and require

1. If we have errors in the file, the code cannot be found and we use
require, the code will stop executing after the require 'index.php'.
We get fatal error
If we use include it will throw an error but the code will be execute
the rest of the code

2. include_once and require_once 
It will include and require files only once.