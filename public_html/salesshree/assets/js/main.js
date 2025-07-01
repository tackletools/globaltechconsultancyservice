// Main JavaScript Functions for Sales CRM
document.addEventListener('DOMContentLoaded', function() {
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Initialize sidebar toggle
    initSidebarToggle();
    
    // Initialize notifications
    loadNotifications();
    
    // Set active navigation
    setActiveNavigation();
    
    // Initialize form validation
    initFormValidation();
    
    // Initialize data tables
    if (typeof $.fn.DataTable !== 'undefined') {
        initDataTables();
    }
});

// Sidebar Toggle Functions
function initSidebarToggle() {
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('main-content');
    
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
            
            // Save sidebar state
            localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
        });
    }
    
    // Restore sidebar state
    const sidebarCollapsed = localStorage.getItem('sidebarCollapsed');
    if (sidebarCollapsed === 'true') {
        sidebar.classList.add('collapsed');
        mainContent.classList.add('expanded');
    }
}

// Navigation Functions
function setActiveNavigation() {
    const currentPage = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href && href.includes(currentPage)) {
            link.classList.add('active');
            
            // Expand parent menu if nested
            const parentCollapse = link.closest('.collapse');
            if (parentCollapse) {
                parentCollapse.classList.add('show');
                const parentToggle = document.querySelector(`[data-bs-target="#${parentCollapse.id}"]`);
                if(parentToggle) {
                    parentToggle.setAttribute('aria-expanded', 'true');
                }
            }
        }
    });
}

// Load Module Function
function loadModule(module, params = {}) {
    showLoader();
    
    const formData = new FormData();
    formData.append('module', module);
    
    // Add parameters if provided
    Object.keys(params).forEach(key => {
        formData.append(key, params[key]);
    });
    
    fetch('ajax/load_module.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('main-content').innerHTML = data;
        hideLoader();
        
        // Reinitialize components after loading new content
        initializeNewContent();
    })
    .catch(error => {
        console.error('Error loading module:', error);
        hideLoader();
        showAlert('Error loading module', 'danger');
    });
}

// Initialize new content after AJAX load
function initializeNewContent() {
    // Reinitialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Reinitialize form validation
    initFormValidation();
    
    // Reinitialize data tables
    if (typeof $.fn.DataTable !== 'undefined') {
        initDataTables();
    }
    
    // Reinitialize select2 if available
    if (typeof $.fn.select2 !== 'undefined') {
        $('.select2').select2();
    }
}

// Form Validation
function initFormValidation() {
    const forms = document.querySelectorAll('.needs-validation');
    
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
}

// Data Tables Initialization
function initDataTables() {
    $('.data-table').DataTable({
        responsive: true,
        pageLength: 25,
        lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>' +
             '<"row"<"col-sm-12"tr>>' +
             '<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records...",
            lengthMenu: "Show _MENU_ entries",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
            infoEmpty: "Showing 0 to 0 of 0 entries",
            infoFiltered: "(filtered from _MAX_ total entries)",
            paginate: {
                first: "First",
                last: "Last",
                next: "Next",
                previous: "Previous"
            }
        }
    });
}

// Loader Functions
function showLoader() {
    const loader = document.getElementById('loader');
    if (loader) {
        loader.style.display = 'flex';
    }
}

function hideLoader() {
    const loader = document.getElementById('loader');
    if (loader) {
        loader.style.display = 'none';
    }
}

// Alert Functions
function showAlert(message, type = 'info', duration = 5000) {
    const alertContainer = document.getElementById('alert-container') || createAlertContainer();
    
    const alertId = 'alert-' + Date.now();
    const alertHTML = `
        <div class="alert alert-${type} alert-dismissible fade show" role="alert" id="${alertId}">
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;
    
    alertContainer.insertAdjacentHTML('beforeend', alertHTML);
    
    // Auto dismiss after duration
    if (duration > 0) {
        setTimeout(() => {
            const alert = document.getElementById(alertId);
            if (alert) {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, duration);
    }
}

function createAlertContainer() {
    const container = document.createElement('div');
    container.id = 'alert-container';
    container.className = 'position-fixed top-0 end-0 p-3';
    container.style.zIndex = '9999';
    document.body.appendChild(container);
    return container;
}

// Confirmation Modal
function showConfirmation(title, message, callback) {
    const modalHTML = `
        <div class="modal fade" id="confirmationModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">${title}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        ${message}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmBtn">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    // Remove existing modal if any
    const existingModal = document.getElementById('confirmationModal');
    if (existingModal) {
        existingModal.remove();
    }
    
    document.body.insertAdjacentHTML('beforeend', modalHTML);
    
    const modal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    
    document.getElementById('confirmBtn').addEventListener('click', function() {
        callback();
        modal.hide();
    });
    
    modal.show();
    
    // Remove modal from DOM after hiding
    document.getElementById('confirmationModal').addEventListener('hidden.bs.modal', function() {
        this.remove();
    });
}

// Notifications
function loadNotifications() {
    fetch('ajax/notifications.php?action=get_notifications')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                updateNotificationBadge(data.unread_count);
            }
        })
        .catch(error => console.error('Error loading notifications:', error));
}

function updateNotificationBadge(count) {
    const badge = document.getElementById('notification-badge');
    if (badge) {
        if (count > 0) {
            badge.textContent = count > 99 ? '99+' : count;
            badge.style.display = 'inline';
        } else {
            badge.style.display = 'none';
        }
    }
}

function markNotificationRead(notificationId) {
    const formData = new FormData();
    formData.append('action', 'mark_read');
    formData.append('id', notificationId);
    
    fetch('ajax/notifications.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            loadNotifications();
        }
    });
}

// Utility Functions
function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
}

function formatCurrency(amount) {
    return new Intl.NumberFormat('en-IN', {
        style: 'currency',
        currency: 'INR'
    }).format(amount);
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Export functions for global use
window.loadModule = loadModule;
window.showAlert = showAlert;
window.showConfirmation = showConfirmation;
window.showLoader = showLoader;
window.hideLoader = hideLoader;
window.markNotificationRead = markNotificationRead;