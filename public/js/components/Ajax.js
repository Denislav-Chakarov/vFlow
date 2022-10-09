export const RegAjax = () => {
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $("#submitRegistedForm").submit(function (e) {
            e.preventDefault();
            let form_data = $(this);
            $.post({
                url: "Authentication/register",
                type: "POST",
                data: form_data.serialize(),
                success: function (data) {
                    window.location.reload();
                },
                error: function (data, textStatus, error) {
                    console.log(data);
                    var err = eval("(" + data.responseText + ")");
                    $(".alert-danger").show();
                },
            });
        });
    });
};

export const LogAjax = () => {
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $("#loginFormId").submit(function (e) {
            e.preventDefault();
            let form_data = $(this);
            $.post({
                url: "Authentication/login",
                type: "POST",
                data: form_data.serialize(),
                success: function (data) {
                    window.location.reload();
                },
                error: function (data, textStatus, error) {
                    console.log(data);
                    var err = eval("(" + data.responseText + ")");
                    $(".alert-login").show();
                },
            });
        });
    });
};
