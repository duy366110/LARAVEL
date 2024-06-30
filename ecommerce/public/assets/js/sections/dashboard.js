window.onload = function(event) {
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    /**
     * SECTION HEADER
     */
    let btnToggleMobileHeader = $("#btn-toggle-header-mobile");
    let headerMobile = $("#header-mobile");
    let headerMobileMask = $("#hm-mask");
    let headerMeraWrapper = $$(".header-mera-wrapper");
    
    btnToggleMobileHeader.addEventListener("click", (event) => {
        headerMobile.classList.toggle('hidden');
    })

    headerMobileMask.addEventListener("click", (event) => {
        headerMobile.classList.add("hidden");
    })

    headerMeraWrapper.forEach((itemHeaderMera, index, origin) => {
        itemHeaderMera.addEventListener("click", function(event) {
            origin.forEach((originHeaderMeraWrapper) => {
                let groupHeaderMera = originHeaderMeraWrapper.querySelector(".header-mera-menu-mobile");
                if(groupHeaderMera) {
                    groupHeaderMera.classList.add("hidden");
                }
            })
            if(this.querySelector(".header-mera-menu-mobile")) {
                this.querySelector(".header-mera-menu-mobile").classList.remove("hidden");
            }
        })
    });

    /**
     * SECTION SOLUTION
     */

    let solutionTabBtns = $$(".solution-tab-item-btn");

    solutionTabBtns.forEach((tabBtn, index, origin) => {
        tabBtn.addEventListener("click", function(event) {
            let { id } = this.dataset;

            origin.forEach((tabBtnEln) => {
                let { id: idCheck } = tabBtnEln.dataset;

                if(idCheck != id) {
                    tabBtnEln.classList.remove("st-active");
                    $(`#${idCheck}`).classList.add("hidden");
                }
            })

            this.classList.add("st-active");
            $(`#${id}`).classList.remove("hidden");
        })
    });

    /**
     * SECTION QUESTION
     */

    
}