import * as toggles from "./components/toggles.js";
import * as Ajax from "./components/Ajax.js";
import * as animJS from "./components/animations.js";

//toggles section
toggles.navBar();
toggles.signIn();
toggles.showHidePW();
toggles.signUp();
toggles.forgotPW();
toggles.toggleSideMenu();

//Ajax section
Ajax.RegAjax();
Ajax.LogAjax();

//JS animations
animJS.topBarAnim();
animJS.loadingBtn();
