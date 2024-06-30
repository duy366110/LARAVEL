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
     * SECTION FEATURE
     */

    let featureBtnTabs = $$('.f-btn-tab');
    let endFeatureBtnTab = featureBtnTabs[featureBtnTabs.length - 1].dataset.id;

    let siderFeatureTab = setInterval(() => {
        let currentId = '';

        for(let i = 0; i<featureBtnTabs.length; i++) {
            if(featureBtnTabs[i].classList.contains('f-active')) {
                currentId = featureBtnTabs[i].dataset.id;
            }
        }

        if(currentId == endFeatureBtnTab) {
            featureBtnTabs.forEach((btnElm) => {
                btnElm.classList.remove('f-active');
            })

            featureBtnTabs[0].classList.add('f-active');

        } else {

            for(let i = 0; i<featureBtnTabs.length; i++) {
                if(featureBtnTabs[i].classList.contains('f-active')) {
                    if((i+1) < featureBtnTabs.length) {
                        featureBtnTabs[(i+1)-1].classList.remove('f-active');
                        featureBtnTabs[i+1].classList.add('f-active');
                        break
                    }
                }
            }
        }

    }, 4500)

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

    let questions = $$(".question-item");
    questions.forEach((question) => {
        let { id } = question.dataset;

        question.addEventListener("click", function(event) {
            $(`#${id}`).classList.toggle("hidden");
        })
    })
}