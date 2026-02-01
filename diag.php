<?php
define('LARAVEL_START', microtime(true));
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use Spatie\Permission\Models\Permission;

$output = "";
$user = User::where('name', 'Dio')->first();

if (!$user) {
    $output .= "User Dio not found\n";
} else {
    $output .= "User: " . $user->name . "\n";
    $output .= "Roles: " . $user->getRoleNames()->implode(', ') . "\n";
    $output .= "Permissions (Direct): " . $user->getPermissionNames()->implode(', ') . "\n";
    $output .= "All Permissions: " . $user->getAllPermissions()->pluck('name')->implode(', ') . "\n";

    $policy = new App\Policies\UserPolicy();
    $output .= "Policy create check: " . ($policy->create($user) ? 'ALLOWED' : 'DENIED') . "\n";
    $output .= "Policy viewAny check: " . ($policy->viewAny($user) ? 'ALLOWED' : 'DENIED') . "\n";
}

$output .= "Exact Permission names in DB: " . Permission::pluck('name')->implode(', ') . "\n";

file_put_contents('diag_output.txt', $output);
echo "Done\n";
