<?php
$repo_dir = __DIR__; // Root of the project
chdir($repo_dir);

$commands = [
    'git status',
    'git add .',
    'git commit -m "Complete lab 2"',
    'git push origin HEAD' // or just git push
];

echo "<pre>";
foreach ($commands as $cmd) {
    echo "Running: $cmd\n";
    $output = [];
    $return_var = 0;
    exec($cmd . ' 2>&1', $output, $return_var);
    echo implode("\n", $output) . "\n\n";
}
echo "</pre>";
// Self-delete
unlink(__FILE__);
?>
