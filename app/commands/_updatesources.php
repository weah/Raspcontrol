<?php
echo '<pre>';

// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
$last_line = system('sudo apt-get update', $retval);

// Printing additional info
echo '
</pre>'; ?>
Source Update Complete!
