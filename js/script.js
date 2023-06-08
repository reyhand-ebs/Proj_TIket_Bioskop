$(document).ready(function () {
    // Menangani peristiwa klik pada tombol "Cari"
    $("#searchButton").on('click', function () {
        search();
    });

    // Menangani peristiwa tekan tombol "Enter" di dalam input pencarian
    $("#searchInput").on('keydown', function (event) {
        if (event.keyCode === 13) { // 13 adalah kode tombol "Enter"
            search();
            return false;
        }
    });
    // Fungsi pencarian
    function search() {
        var query = $("#searchInput").val();
        if (query !== '') {
            window.location.href = "index.php?p=search&query=" + query;
        }
    }
    var limitWords = document.getElementsByClassName('limit-words');
    for (var i = 0; i < limitWords.length; i++) {
        var text = limitWords[i].textContent;
        var words = text.split(' ');
        if (words.length > 15) {
            var limitedText = words.slice(0, 15).join(' ');
            limitWords[i].textContent = limitedText + '...';
        }
    }

    const spinnerWrapperEl = document.querySelector('.spinner-wrapper');
    window.addEventListener('load', () => {
        spinnerWrapperEl.style.opacity = 1;

        setTimeout(() => {
            spinnerWrapperEl.style.display = 'none';
        }, 1000);
    })

    // ===============Check user category===============

    var userType = "index"; // Ganti dengan "admin" atau "member" sesuai dengan kategori pengguna

    if (userType === "dashboardadmin") {
        // Kode khusus untuk kategori admin

    } else if (userType === "dashboardmember") {
        // Kode khusus untuk kategori member

        var stars = document.getElementsByClassName('star');
        var selectedRating = document.getElementById('selected-rating');

        for (var i = 0; i < stars.length; i++) {
            stars[i].addEventListener('click', function () {
                var rating = this.getAttribute('data-rating');
                selectedRating.innerHTML = 'Anda memberi rating: ' + rating + ' bintang';

                // Menghapus class 'active' dari semua bintang
                for (var j = 0; j < stars.length; j++) {
                    stars[j].classList.remove('active');
                }

                // Menambahkan class 'active' ke bintang yang dipilih
                for (var k = 0; k < rating; k++) {
                    stars[k].classList.add('active');
                }
            });
        }
    }
});
