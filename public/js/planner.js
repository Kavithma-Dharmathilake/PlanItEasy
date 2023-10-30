const fileSelector1 = document.getElementById('file-selector1');
const label1 = document.getElementById('file-label1');

fileSelector1.addEventListener('change', function() {
    const files = fileSelector1.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (file) {
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file); // Create a URL for the selected file
            img.style.maxWidth = '150px'; // Set maximum width
            img.style.maxHeight = '150px'; // Set maximum heigh
            // Append the thumbnail image to the .package-img container
            label1.parentNode.appendChild(img);
        }
    }

    if (files.length > 0) {
        label1.innerHTML = ''; // Clear the label content
    }
});

const fileSelector2 = document.getElementById('file-selector2');
const label2 = document.getElementById('file-label2');

fileSelector2.addEventListener('change', function() {
    const files = fileSelector2.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (file) {
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file); // Create a URL for the selected file
            img.style.maxWidth = '150px'; // Set maximum width
            img.style.maxHeight = '150px'; // Set maximum heigh
            // Append the thumbnail image to the .package-img container
            label2.parentNode.appendChild(img);
        }
    }

    if (files.length > 0) {
        label2.innerHTML = ''; // Clear the label content
    }
});


const fileSelector3 = document.getElementById('file-selector3');
const label3 = document.getElementById('file-label3');

fileSelector3.addEventListener('change', function() {
    const files = fileSelector3.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (file) {
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file); // Create a URL for the selected file
            img.style.maxWidth = '150px'; // Set maximum width
            img.style.maxHeight = '150px'; // Set maximum heigh
            // Append the thumbnail image to the .package-img container
            label3.parentNode.appendChild(img);
        }
    }

    if (files.length > 0) {
        label3.innerHTML = ''; // Clear the label content
    }
});


const fileSelector6 = document.getElementById('file-selector6');
const label6 = document.getElementById('file-label6');

fileSelector6.addEventListener('change', function() {
    const files = fileSelector6.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (file) {
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file); // Create a URL for the selected file
            img.style.maxWidth = '150px'; // Set maximum width
            img.style.maxHeight = '150px'; // Set maximum heigh
            // Append the thumbnail image to the .package-img container
            label6.parentNode.appendChild(img);
        }
    }

    if (files.length > 0) {
        label6.innerHTML = ''; // Clear the label content
    }
});

const fileSelector4 = document.getElementById('file-selector4');
const label4 = document.getElementById('file-label4');

fileSelector4.addEventListener('change', function() {
    const files = fileSelector4.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (file) {
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file); // Create a URL for the selected file
            img.style.maxWidth = '150px'; // Set maximum width
            img.style.maxHeight = '150px'; // Set maximum heigh
            // Append the thumbnail image to the .package-img container
            label4.parentNode.appendChild(img);
        }
    }

    if (files.length > 0) {
        label4.innerHTML = ''; // Clear the label content
    }
});

const fileSelector5 = document.getElementById('file-selector5');
const label5 = document.getElementById('file-label5');

fileSelector5.addEventListener('change', function() {
    const files = fileSelector5.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (file) {
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file); // Create a URL for the selected file
            img.style.maxWidth = '150px'; // Set maximum width
            img.style.maxHeight = '150px'; // Set maximum heigh
            // Append the thumbnail image to the .package-img container
            label5.parentNode.appendChild(img);
        }
    }

    if (files.length > 0) {
        label5.innerHTML = ''; // Clear the label content
    }
});
