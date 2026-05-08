document.addEventListener('DOMContentLoaded', () => {
    const rows = document.querySelectorAll('.request-row');

    rows.forEach(row => {
        row.addEventListener('click', () => {
            const name = row.querySelector('h4').innerText;
            alert('Opening details for: ' + name);
        });
    });
    
    console.log("Dashboard Loaded Successfully");
});