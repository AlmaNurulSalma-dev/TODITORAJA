document.getElementById('view-more-btn').addEventListener('click', function () {
    const hiddenItems = document.querySelectorAll('.w-dyn-item.hidden');
    if (hiddenItems.length === 0) {
        console.warn('No hidden items found!');
        return;
    }
    
    hiddenItems.forEach(item => {
        item.style.display = 'block';
    });

    // Sembunyikan tombol setelah klik
    this.style.display = 'none';
});

function changeImage(src) {
    document.getElementById('mainImage').src = src;
}


