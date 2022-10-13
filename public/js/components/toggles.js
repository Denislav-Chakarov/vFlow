export const navBar = () => {
    let burger = document.getElementsByClassName("burger")[0];
    let navBar = document.getElementsByClassName("mobileLinks")[0];

    burger.addEventListener("click", () => {
        burger.classList.toggle("toggle");
        navBar.classList.toggle("mobileLinks-active");
        document.body.classList.toggle("stopScrolling");
    });
};

export const signIn = () => {
    let signIn = document.getElementsByClassName("signIn");
    let signInModal = document.getElementsByClassName("loginModal")[0];
    let signUpModal = document.getElementsByClassName("registerModal")[0];
    let forgotPWModal = document.getElementsByClassName("forgotPWModal")[0];
    let exitBtn = document.getElementById("exitDivId");
    let navBar = document.getElementsByClassName("mobileLinks")[0];
    let burger = document.getElementsByClassName("burger")[0];
    for (var i = 0; i < signIn.length; i++) {
        signIn[i].addEventListener("click", () => {
            signInModal.classList.toggle("loginModal-active");
            $(".darkness").fadeIn();
            if (navBar.classList.contains("mobileLinks-active")) {
                navBar.classList.toggle("mobileLinks-active");
                burger.classList.toggle("toggle");
            } else {
                document.body.classList.toggle("stopScrolling");
            }
        });
    }

    $(document).keydown(function (e) {
        // ESCAPE key pressed
        if (e.keyCode == 27) {
            if (
                signInModal.classList.contains("loginModal-active") ||
                signUpModal.classList.contains("loginModal-active") ||
                forgotPWModal.classList.contains("loginModal-active")
            ) {
                $(".darkness").fadeOut();
                document.body.classList.toggle("stopScrolling");
                signInModal.classList.remove("loginModal-active");
                signUpModal.classList.remove("loginModal-active");
                forgotPWModal.classList.remove("loginModal-active");
            }
        }
    });

    exitBtn.addEventListener("click", () => {
        signInModal.classList.toggle("loginModal-active");
        $(".darkness").fadeOut();
        document.body.classList.toggle("stopScrolling");
    });
};

export const showHidePW = () => {
    let PWbutton = document.getElementsByClassName("showPW");
    for (let i = 0; i < PWbutton.length; i++) {
        PWbutton[i].addEventListener("click", (event) => {
            let getEventTarget = event.target;
            let getInputDiv = getEventTarget.parentElement;
            let getInput = getInputDiv.getElementsByClassName("authInputs")[0];
            if (getInput.type == "password") {
                getInput.type = "text";
                PWbutton[i].innerText = "Hide";
            } else {
                getInput.type = "password";
                PWbutton[i].innerText = "Show";
            }
        });
    }
};

export const signUp = () => {
    let signUp = document.getElementsByClassName("signUp");
    let signUpModal = document.getElementsByClassName("registerModal")[0];
    let signInModal = document.getElementsByClassName("loginModal")[0];
    let exitBtn = document.getElementById("exitDivId2");
    let navBar = document.getElementsByClassName("mobileLinks")[0];
    let burger = document.getElementsByClassName("burger")[0];
    let haveAccount = document.getElementsByClassName("haveAccount")[0];
    let getStarted = document.getElementById("getStarted");
    for (var i = 0; i < signUp.length; i++) {
        signUp[i].addEventListener("click", () => {
            signInModal.classList.toggle("loginModal-active");
            signUpModal.classList.toggle("loginModal-active");
            $(".darkness").fadeIn();
            if (navBar.classList.contains("mobileLinks-active")) {
                navBar.classList.toggle("mobileLinks-active");
                burger.classList.toggle("toggle");
            }
            let els = document.getElementsByClassName("authInputs");
            Array.prototype.forEach.call(els, function (el) {
                el.value = "";
                $(".alert").hide();
            });
        });
    }

    exitBtn.addEventListener("click", () => {
        signUpModal.classList.toggle("loginModal-active");
        $(".darkness").fadeOut();
        document.body.classList.toggle("stopScrolling");
    });

    haveAccount.addEventListener("click", () => {
        signInModal.classList.toggle("loginModal-active");
        signUpModal.classList.toggle("loginModal-active");

        let els = document.getElementsByClassName("authInputs");
        Array.prototype.forEach.call(els, function (el) {
            el.value = "";
        });
    });

    if (getStarted !== null) {
        getStarted.addEventListener("click", () => {
            signUpModal.classList.toggle("loginModal-active");
            $(".darkness").fadeIn();
            document.body.classList.toggle("stopScrolling");
        });
    }
};

export const forgotPW = () => {
    let exitBtn = document.getElementById("exitDivId3");
    let signInModal = document.getElementsByClassName("loginModal")[0];
    let forgotPWModal = document.getElementsByClassName("forgotPWModal")[0];
    let signUpBtn = document.getElementsByClassName("haveAccount")[1];
    let forgotPWBtn = document.getElementsByClassName("forgotPW")[0];

    forgotPWBtn.addEventListener("click", () => {
        signInModal.classList.toggle("loginModal-active");
        forgotPWModal.classList.toggle("loginModal-active");
    });

    signUpBtn.addEventListener("click", () => {
        signInModal.classList.toggle("loginModal-active");
        forgotPWModal.classList.toggle("loginModal-active");
    });

    exitBtn.addEventListener("click", () => {
        forgotPWModal.classList.toggle("loginModal-active");
        $(".darkness").fadeOut();
        document.body.classList.toggle("stopScrolling");
    });
};

export const toggleSideMenu = () => {
    $(".userImage").on("click", function () {
        $(".sideMenu").toggleClass("sideMenu-active");
        $("body").toggleClass("stopScrolling");
        $(".darkness").fadeIn();
    });
    $("#closeSideMenu").on("click", function () {
        $(".sideMenu").toggleClass("sideMenu-active");
        $("body").toggleClass("stopScrolling");
        $(".darkness").fadeOut();
    });
};

export const navBarCur_toggle = () => {
    const links = document.querySelectorAll(".nav-links li a");
    const cur_path = window.location.pathname;
    for (let i = 0; i < links.length; i++) {
        let cur_name = links[i].textContent;
        if (cur_name == "DISCUSSIONS") cur_name = "discuss";
        if (cur_path == "/" + cur_name) {
            links[i].classList.add("nav-links-active");
        }
    }
};

export const newDicuss_toggle = () => {
    const modalBox = document.getElementsByClassName("new_Discuss_modal")[0];

    $("#newDiscussBtn").on("click", function () {
        modalBox.classList.toggle("new_Discuss_modal-active");
        document.body.classList.toggle("stopScrolling");
        $(".darkness").fadeIn();
    });

    $("#close_discussPost").on("click", function () {
        modalBox.classList.toggle("new_Discuss_modal-active");
        document.body.classList.toggle("stopScrolling");
        $(".darkness").fadeOut();
    });

    $("body").click(function (event) {
        if (
            !$(event.target).closest(".new_Discuss_modal").length &&
            !$(event.target).is(".new_Discuss_modal") &&
            !$(event.target).closest("#newDiscussBtn").length &&
            !$(event.target).is("#newDiscussBtn")
        ) {
            if ($(".darkness").is(":visible")) {
                modalBox.classList.toggle("new_Discuss_modal-active");
                document.body.classList.toggle("stopScrolling");
                $(".darkness").fadeOut();
            }
        }
    });

    $("body").keyup(function (event) {
        if (event.keyCode === 27 && $(".darkness").is(":visible")) {
            modalBox.classList.toggle("new_Discuss_modal-active");
            document.body.classList.toggle("stopScrolling");
            $(".darkness").fadeOut();
        }
    });
};
