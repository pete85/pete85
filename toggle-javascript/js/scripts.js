document.addEventListener('DOMContentLoaded', function() {
    var tab = document.getElementsByClassName("products-tab");

    for (var i = 0; i < tab.length; i++) {
        console.log(tab[i]);
        tab[i].addEventListener("click", toggleTyres);
    };




    function toggleTyres() {
        var tab_id = this.getAttribute('data-tab');
        var tab = document.querySelectorAll(".products-tab");
        var category = document.querySelectorAll(".prod-cat");
        var activeCat = document.getElementById(tab_id);

            [].forEach.call(tab, function(el) {
                el.classList.remove("active-tab");
            });

            [].forEach.call(category, function(el) {
                el.classList.remove("active-cat");
            });

            this.classList.add("active-tab");
            activeCat.classList.add("active-cat");
    };

});