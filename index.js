
            window.onscroll = function () {
                var doc = document.documentElement;
                var top = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);
                var x = document.getElementById('top-');
                var mainnav = document.getElementById('main-nav');

                if (top <= 199) {                    
                     mainnav.classList.remove("nav-fixed");                    
                } else  {
                    mainnav.classList.add("nav-fixed");                    
                }
            }

            function openmenu() {
                var menu = document.getElementById('main-nav');
                if (menu.classList.contains('main-nav-opened')) {
                    menu.classList.remove('main-nav-opened');
                } else {
                    menu.classList.add('main-nav-opened');
                }
            }
  
