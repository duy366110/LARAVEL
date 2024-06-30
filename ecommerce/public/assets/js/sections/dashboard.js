window.onload = function(event) {
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

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
}