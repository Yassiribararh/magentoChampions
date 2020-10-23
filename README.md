# magentoChampions
TestForMagento

<strong>Basic Instal magento:</strong>
1- Installing Magento Using Xampp in a localhost appache server.<br>
2- Solving 3 php extention issues before continuing the setup.<br>
3- Creating an SQL database using phpmyadmin.<br>
4- Creating admin account.<br>
5- fixing the black screen when accessing the admin panel by reaching this php file:
\vendor\magento\framework\View\Element\Template\File\Validator.php<br> (Tutorial can be found here : https://webarchers.com/installing-magento-2-on-xampp-got-stuck-at-51/).<br>

<strong>Important commandes for magento2 used after adding a custom module:</strong><br>
1- php bin/magento setup:upgrade (create a custom module inside magento 2 after setting up the files and folders)<br>
2- php bin/magento cache:clear (clear all the recent cache memory)<br>
3- php bin/magento indexer:reindex (arranges all the files again in magento)<br>
4- php bin/magento module:status (Check the status of all the existing modules)<br>
