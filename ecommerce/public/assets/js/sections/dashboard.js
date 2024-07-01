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
    let featureContents = $$('.feature-contents');
    let endFeatureBtnTab = featureBtnTabs[featureBtnTabs.length - 1].dataset.id;

    let siderFeatureTab = setInterval(() => {
        let currentId = '';

        /**
         * Tìm class f-active hiện tại đang ở đâu trong danh sách
         */
        for(let i = 0; i<featureBtnTabs.length; i++) {
            if(featureBtnTabs[i].classList.contains('f-active')) {
                currentId = featureBtnTabs[i].dataset.id;
            }
        }

        /**
         * Nếu class f-active đã đến phần tử cuối
         * add class hidden cho tất cả các phần tử
         * đặt lại cho phần tử đầu tiên
         * và xoá class hidden của phần tử đầu tiên đi
         */
        if(currentId == endFeatureBtnTab) {
            featureBtnTabs.forEach((btnElm) => {
                btnElm.classList.remove('f-active');
            })

            featureContents.forEach((featureContent) => {
                featureContent.classList.add('hidden');
            })

            featureBtnTabs[0].classList.add('f-active');
            featureContents[0].classList.remove('hidden');

        } else {

            /**
             * Add class hidden cho tất cả các content phụ thuộc vào tab
             */
            featureContents.forEach((featureContent) => {
                featureContent.classList.add('hidden');
            })

            for(let i = 0; i<featureBtnTabs.length; i++) {

                /**
                 * Tìm ra phằn tử hiện tại có ladd f-active
                 */
                if(featureBtnTabs[i].classList.contains('f-active')) {
                    /**
                     * Kiểm tra vị trí của phần tử có nhỏ hơn độ dài của danh sách tabs
                     */
                    if((i+1) < featureBtnTabs.length) {
                        /**
                         * Xoá class f-active của phần tử hiện tại đi
                         */
                        featureBtnTabs[(i+1)-1].classList.remove('f-active');

                        /**
                         * Thêm class f-active cho phần tử đứng sau phần tử f-active của hiện tại
                         */
                        featureBtnTabs[i+1].classList.add('f-active');

                        /**
                         * Hiện nội dung của content của tab tương ứng với class f-active của tab mới
                         */
                        $(`#${featureBtnTabs[i+1].dataset.id}`).classList.remove('hidden');

                        /**
                         * Ngăn chặn chạy một lèo hết vòng lặp - chỉ chạy từng phần tử
                         */
                        break
                    }
                }
            }
        }

    }, 4500)


    featureBtnTabs.forEach((featureBtnTab, index, origin) => {
        featureBtnTab.addEventListener("click", function(event) {
            origin.forEach((originFeatureBtnTab) => {
                originFeatureBtnTab.classList.remove("f-active");
            })

            featureContents.forEach((featureContent) => {
                featureContent.classList.add('hidden');
            })

            let currentId = this.dataset.id;
            this.classList.add('f-active');
            $(`#${currentId}`).classList.remove('hidden');

        })
    })

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