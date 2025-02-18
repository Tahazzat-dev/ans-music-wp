(($) => {
  // Modern equivalent of $(document).ready()
  $(function () {
    AOS.init({
      duration: 1000,
      offset: 10,
      easing: "ease-in-out",
      once: true,
    });
    /*
        ========= all js code goes here======
        */

    // class for navmenu
    class Navmenu {
      constructor() {
        // get all the necessary element's reference
        this.isSidebarOpen = false;
        this.init();
      }

      // initialize the navmenu element
      init() {
        this.bindEvents();
      }

      // bind any eleements event handlers
      bindEvents() {
        $(document).on("mouseover  touchstart", ".nav-category-list", (e) =>
          this.showSubcategoryOverlay(e, true)
        );
        $(document).on(
          "click  touch",
          ".sidebar-toggler-btn, .ANS_hamburger-menu",
          (e) => {
            if (!this.isSidebarOpen) {
              $("body").css("overflow-y", "hidden");
              this.isSidebarOpen = true;
            } else {
              $("body").css("overflow-y", "auto");
              this.isSidebarOpen = false;
            }
            e.preventDefault();
            $(e.currentTarget).toggleClass("active");
            $(".sidebar-drawer-wrap").toggleClass("open");
            $("#sidebar-small-logo").toggle();
          }
        );
        $(window).on("scroll", function () {
          if ($(this).scrollTop() > 80) {
            $(".ANS_sidebar-logo-wrap").removeClass("hide");
          } else {
            $(".ANS_sidebar-logo-wrap").addClass("hide");
          }
        });
      }

      openSidebarDrawer(e) {
        this.sidebarDrawer.addClass("open");
      }
    }

    // class for home banner
    // class HomeBanner{
    //     constructor(){
    //         this.init();
    //         this.bindEvents();
    //     }

    //     // methods
    //     init(){

    //     }

    //     bindEvents() {
    //     }

    // }

    const navmenu = new Navmenu();

    // gradient glowing border hover effect
    const cards = document.querySelectorAll(
      ".ANS_distribution-partners-inner .card"
    );

    let currentBounds;
    cards.forEach((card) => {
      card.addEventListener('mouseenter', ()=>{
        currentBounds = card.getBoundingClientRect();
      })
      card.addEventListener('mouseleave', ()=>{
        card.style.transform = "rotate3d(0, 0, 0, 0deg) skew(0deg, 0deg) scale(1)";
      })
      card.addEventListener("mousemove", handleMouseMove);

    });

    function handleMouseMove(e) {
      if (!currentBounds) return; // Prevent errors
      const rect = this.getBoundingClientRect();
      const mouseX = e.clientX - rect.left - rect.width / 2;
      const mouseY = e.clientY - rect.top - rect.height / 2;

      let angle = Math.atan2(mouseY, mouseX) * (180 / Math.PI);

      angle = (angle + 360) % 360;

      this.style.setProperty("--start", angle + 60);

       const mX = e.clientX;
       const mY = e.clientY;
      const leftX = mX - currentBounds.x;
      const topY = mY - currentBounds.y;
      const center = {
        x: leftX - currentBounds.width / 2,
        y: topY - currentBounds.height / 2
      }
      const distance = Math.sqrt(center.x**2 + center.y**2);
      const rotationAngle = Math.min(Math.log(distance) * 5, 25); // Increased for more rotation
      const skewX = center.x / 25; // Added skew effect
      const skewY = center.y / 25; // Added skew effect
    
      // Smooth animation with requestAnimationFrame
  requestAnimationFrame(() => {
    this.style.transform = `
      rotate3d(
        ${center.y / 100},
        ${-center.x / 100},
        0,
        ${rotationAngle}deg
      )
      skew(${skewX}deg, ${skewY}deg)
      scale(1.05) /* Slight scale-up for better effect */
    `;
  });
      
    }
  });
})(jQuery);
