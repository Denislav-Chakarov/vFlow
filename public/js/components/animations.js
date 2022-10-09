export const topBarAnim = () => {
    $("#submitRegister, #submitLogin").click(function () {
        $(".animated-progress span").each(function () {
            $(this).show();
            $(this).animate(
                {
                    width: $(this).attr("data-progress") + "%",
                },
                350
            );
            setTimeout(() => {
                $(this).hide();
            }, "600");
        });
    });
};

export const loadingBtn = () => {
    $("#submitRegister").click(function () {
        $("#btnRegLoad").show();
        $(this).hide();
        setTimeout(() => {
            $(this).show();
            $("#btnRegLoad").hide();
        }, "600");
    });

    $("#submitLogin").click(function () {
        $("#btnLogLoad").show();
        $(this).hide();
        setTimeout(() => {
            $(this).show();
            $("#btnLogLoad").hide();
        }, "600");
    });
};
