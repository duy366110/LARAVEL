window.onload = function(event) {
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    let btnToggleMobileHeader = $("#btn-toggle-header-mobile");
    let headerMobile = $("#header-mobile");
    let headerMobileMask = $("#hm-mask");

    let headerMeraWrapper = $$(".header-mera-wrapper");

    
    btnToggleMobileHeader.addEventListener("click", (event) => {
        headerMobile.classList.toggle('hidden');
        console.log(headerMeraWrapper);
    })

    headerMobileMask.addEventListener("click", (event) => {
        headerMobile.classList.add("hidden");
    })

    headerMeraWrapper.forEach((itemHeaderMera) => {
        itemHeaderMera.addEventListener("click", function(event) {
            console.log(this);
        })
    });
}