var searchWrapper = document.querySelector('.search-wrapper'),
    searchInput = document.querySelector('.search-input');

document.addEventListener('click', function (e) {
    if (~e.target.className.indexOf('search')) {
        searchWrapper.classList.add('focused');
        searchInput.focus();
    } else {
        searchWrapper.classList.remove('focused');
    }
});