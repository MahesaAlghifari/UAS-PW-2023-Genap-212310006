
const filterButtons = document.querySelectorAll('.filter-button');
const cardTitles = document.querySelectorAll('.card-title');

filterButtons.forEach((button) => {
    button.addEventListener('click', () => {
        const category = button.getAttribute('data-category');

        cardTitles.forEach((title) => {
            const cardCategory = title.getAttribute('data-category');

            if (category === 'all' || category === cardCategory) {
                title.closest('.col').style.display = 'block';
            } else {
                title.closest('.col').style.display = 'none';
            }
        });
    });
});


function toggleButton(button) {
    var buttons = document.getElementsByClassName("filter-button");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove("active"); // Menghapus kelas "active" dari semua tombol
    }

    button.classList.add("active"); // Menambahkan kelas "active" pada tombol yang diklik
}


// initialize swiper js

const swiper = new Swiper('.swiper', {
    loop: true,

     // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


})