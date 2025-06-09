<?php
$secret = 'my_super_secret_123';  // Same as webhook secret in GitHub
$repoPath = '/home/u593997835/domains/crm.lamfbroker.com/public_html';
$logFile = $repoPath . '/deploy_log.txt';

$payload = file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_X_HUB_SIGNATURE'] ?? '';
$calculated_sig = 'sha1=' . hash_hmac('sha1', $payload, $secret);

file_put_contents($logFile, date('Y-m-d H:i:s') . " - GitHub Sig: $sig_header | Calc Sig: $calculated_sig\n", FILE_APPEND);

if (!hash_equals($calculated_sig, $sig_header)) {
    http_response_code(403);
    file_put_contents($logFile, "Bad signature\n", FILE_APPEND);
    die('Bad signature');
}

chdir($repoPath);
// Pull using the repository's configured remote (SSH expected)
exec('git pull 2>&1', $output);

file_put_contents($logFile, implode("\n", $output) . "\n", FILE_APPEND);
echo implode("\n", $output);
?>
