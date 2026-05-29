document.addEventListener("DOMContentLoaded", function () {
    // Sidebar View State Modifications
    const sidebarCollapse = document.getElementById('sidebarCollapse');
    const sidebar = document.getElementById('sidebar');
    if (sidebarCollapse && sidebar) {
        sidebarCollapse.addEventListener('click', function () {
            sidebar.classList.toggle('active');
        });
    }

    // Toggle Table/Report Views dynamically
    const toggleTableBtn = document.getElementById('toggleTableBtn');
    const tableContainer = document.getElementById('tableContainer');
    if (toggleTableBtn && tableContainer) {
        toggleTableBtn.addEventListener('click', function () {
            if (tableContainer.style.display === 'none' || tableContainer.style.display === '') {
                tableContainer.style.display = 'block';
                toggleTableBtn.textContent = 'លាក់តារាងទិន្នន័យ';
            } else {
                tableContainer.style.display = 'none';
                toggleTableBtn.textContent = 'បង្ហាញតារាងទិន្នន័យ';
            }
        });
    }
});

// Browser Print Pipeline Execution
function printData() {
    window.print();
}