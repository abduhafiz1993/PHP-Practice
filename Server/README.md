# SERVER variable

In this section we see to access server variable.
Server variable stored in assostive array datatype.

## htmlspecialchars($_SERVER['PHP_SELF'])

use this charcter for secure the page e.g
 <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">