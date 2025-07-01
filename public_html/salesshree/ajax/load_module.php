<?php
/**
 * AJAX Module Loader
 * Loads different modules dynamically via AJAX
 */
require_once '../config/config.php';

// Check if user is logged in
if (!is_logged_in()) {
    json_response(false, 'Unauthorized access');
}

// Get module name from request
$module = $_GET['module'] ?? '';

// Validate module name
$allowed_modules = [
    'dashboard',
    'leads',
    'add-lead',
    'edit-lead',
    'view-lead',
    'junk-leads',
    'followups',
    'add-followup',
    'quotations',
    'create-quote',
    'view-quote',
    'reports',
    'users',
    'profile',
    'settings',
    'notifications'
];

if (!in_array($module, $allowed_modules)) {
    json_response(false, 'Invalid module');
}

// Check user permissions for specific modules
$user_role = $_SESSION['user_role'];
$restricted_modules = [
    'users' => ['admin', 'manager'],
    'settings' => ['admin'],
    'reports' => ['admin', 'manager']
];

if (isset($restricted_modules[$module]) && !in_array($user_role, $restricted_modules[$module])) {
    json_response(false, 'Access denied');
}

// Set content type
header('Content-Type: text/html; charset=utf-8');

// Start output buffering
ob_start();

try {
    // Load the appropriate module
    switch ($module) {
        case 'dashboard':
            include '../modules/dashboard/dashboard.php';
            break;
            
        case 'leads':
            include '../modules/leads/leads.php';
            break;
            
        case 'add-lead':
            include '../modules/leads/add_lead.php';
            break;
            
        case 'edit-lead':
            $lead_id = $_GET['id'] ?? 0;
            if (!$lead_id) {
                throw new Exception('Lead ID is required');
            }
            include '../modules/leads/edit_lead.php';
            break;
            
        case 'view-lead':
            $lead_id = $_GET['id'] ?? 0;
            if (!$lead_id) {
                throw new Exception('Lead ID is required');
            }
            include '../modules/leads/view_lead.php';
            break;
            
        case 'junk-leads':
            include '../modules/leads/junk_leads.php';
            break;
            
        case 'followups':
            include '../modules/followups/followups.php';
            break;
            
        case 'add-followup':
            $lead_id = $_GET['lead_id'] ?? 0;
            if (!$lead_id) {
                throw new Exception('Lead ID is required');
            }
            include '../modules/followups/add_followup.php';
            break;
            
        case 'quotations':
            include '../modules/quotations/quotations.php';
            break;
            
        case 'create-quote':
            $lead_id = $_GET['lead_id'] ?? 0;
            if (!$lead_id) {
                throw new Exception('Lead ID is required');
            }
            include '../modules/quotations/create_quote.php';
            break;
            
        case 'view-quote':
            $quote_id = $_GET['id'] ?? 0;
            if (!$quote_id) {
                throw new Exception('Quote ID is required');
            }
            include '../modules/quotations/view_quote.php';
            break;
            
        case 'reports':
            include '../modules/reports/reports.php';
            break;
            
        case 'users':
            include '../modules/users/users.php';
            break;
            
        case 'profile':
            include '../modules/users/profile.php';
            break;
            
        case 'settings':
            include '../modules/users/settings.php';
            break;
            
        case 'notifications':
            include '../modules/notifications/notifications.php';
            break;
            
        default:
            throw new Exception('Module not found');
    }
    
    // Get the content
    $content = ob_get_clean();
    
    // Log activity
    log_activity($_SESSION['user_id'], 'module_access', "Accessed module: $module");
    
    // Return success response with content
    echo json_encode([
        'success' => true,
        'content' => $content,
        'module' => $module,
        'timestamp' => time()
    ]);
    
} catch (Exception $e) {
    // Clear any output
    ob_end_clean();
    
    // Log error
    log_error("Module loading error: " . $e->getMessage(), __FILE__, __LINE__);
    
    // Return error response
    json_response(false, $e->getMessage());
}
?>