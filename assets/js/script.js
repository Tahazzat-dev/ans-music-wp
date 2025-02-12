(($)=>{
    // Modern equivalent of $(document).ready()
    $(function () { 
    
        AOS.init({
            duration: 1000,
            offset:10,
            easing:'ease-in-out',
            once:true,
        });
        /*
        ========= all js code goes here======
        */


        // class for navmenu
        class Navmenu{
            constructor(){
                // get all the necessary element's reference               
                this.isSidebarOpen = false
                this.init();
            }
            
              // initialize the navmenu element
              init(){
                this.bindEvents();

            }

              // bind any eleements event handlers
              bindEvents(){
                $(document).on('mouseover  touchstart', '.nav-category-list',(e)=>this.showSubcategoryOverlay(e, true));
                $(document).on('click  touch', '.sidebar-toggler-btn, .ANS_hamburger-menu',(e)=>{

                    if(!this.isSidebarOpen){
                        $('body').css('overflow-y', 'hidden')
                        this.isSidebarOpen = true;
                    }else{
                        $('body').css('overflow-y', 'auto')
                        this.isSidebarOpen = false;
                    }
                    e.preventDefault();
                    $(e.currentTarget).toggleClass('active');
                    $('.sidebar-drawer-wrap').toggleClass('open');
                    $('#sidebar-small-logo').toggle();
                });
                $(window).on("scroll", function () {
                    if ($(this).scrollTop() > 80) {
                        $('.ANS_sidebar-logo-wrap').removeClass('hide')
                    } else {
                          $('.ANS_sidebar-logo-wrap').addClass('hide')
                      }
                })
            }

            openSidebarDrawer(e){
              
            
                this.sidebarDrawer.addClass('open');
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

    });
})(jQuery)

