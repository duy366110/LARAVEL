window.onload = function(event) {
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

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

            this.querySelector(".header-mera-menu-mobile").classList.remove("hidden");
        })
    });
}