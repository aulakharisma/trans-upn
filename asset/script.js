// SIDEBAR
const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');

allDropdown.forEach(item=> {
    const a = item.parentElement.querySelector('a:first-child');
    a.addEventListener('click', function (e) {
        e.preventDefault();

        if(!this.classList.contains('active')) {
            allDropdown.forEach(i=> {
                const aLink = i.parentElement.querySelector('a:first-child');

                aLink.classList.remove('active');
                i.classList.remove('show');
            })
        }

        this.classList.toggle('active');
        item.classList.toggle('show');
    })
})


// DROPDOWN PROFIL
const profil = document.querySelector('nav.profil');
const imgProfil = profil.querySelector('img');
const dropdownProfil = profil.querySelector('.profil-link');

imgProfil.addEventListener('click', function() {
    dropdownProfil.classList.toggle('show');
})