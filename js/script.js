window.onload = function() {
    var stars = document.getElementsByClassName('star');
    var selectedRating = document.getElementById('selected-rating');

    for (var i = 0; i < stars.length; i++) {
        stars[i].addEventListener('click', function() {
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
};
