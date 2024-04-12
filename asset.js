document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('assetForm');
    const retrieveBtn = document.getElementById('retrieveBtn');
    const assetInfo = document.getElementById('assetInfo');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(form);
        fetch('asset.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            form.reset();
        })
        .catch(error => console.error('Error:', error));
    });

    retrieveBtn.addEventListener('click', function() {
        fetch('asset.php', {
            method: 'GET'
        })
        .then(response => response.text())
        .then(data => {
            assetInfo.innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
    });
});
