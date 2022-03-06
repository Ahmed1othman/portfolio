'use strict';
var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
};
var loadFile2 = function(event, id) {
    var image = document.getElementById(id);
    image.src = URL.createObjectURL(event.target.files[0]);
};

function edit_alert(id) {
    $("#update_model_" + id).modal('show');
}

function show_points(id) {
    $("#show_model_" + id).modal('show');
}

function delete_alert(id, url) {

    swal({
            title: "Are you sure ?",
            text: "Once deleted, you will not be able to recover this field!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: app_url + "/" + lang + "/" + url + "/" + id,
                    type: 'Delete',
                    async: false,
                    success: function(data) {
                        if (data == 1) {
                            $("#row_" + id).fadeOut(1500)
                            swal("Poof! field has been deleted!", {
                                icon: "success",
                            });
                        } else {
                            swal(data);
                        }
                    },
                    error: function(request, status, error) {
                        swal(error);
                    }
                });
            } else {
                swal("Your field is safe!");
            }
        });

}

function reset_alert(id, url) {

    swal({
            title: "Are you sure ?",
            text: "Item Will Be Restored in Its Table ",
            icon: "info",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: app_url + "/" + lang + "/restor-" + url + "/" + id,
                    type: 'POST',
                    async: false,
                    success: function(data) {
                        if (data == 1) {
                            $("#row_" + id).fadeOut(1500)
                            swal("Poof! field has been Restored!", {
                                icon: "success",
                            });
                        } else {
                            swal(data);
                        }
                    },
                    error: function(request, status, error) {
                        swal(error);
                    }
                });
            } else {
                swal("Your field is safe!");
            }
        });

}

function delete_alert_user(id, url) {

    swal({
            title: "Are you sure ?",
            text: "Once deleted, you will not be able to recover this field!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: app_url + "/auth/" + url + "/" + id,
                    type: 'Delete',
                    async: false,
                    success: function(data) {
                        if (data == 1) {
                            $("#row_" + id).fadeOut(1500)
                            swal("Poof! field has been deleted!", {
                                icon: "success",
                            });
                        } else {
                            swal(data);
                        }
                    },
                    error: function(request, status, error) {
                        swal(error);
                    }
                });
            } else {
                swal("Your field is safe!");
            }
        });

}

function activeSection(id) {
    var checkBox = document.getElementById("secttion_id_" + id);
    var active = 0;


    if (checkBox.checked == true) {
        active = 1;
    }

    alert(active);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: app_url + "/" + lang + "/front-sections/" + id,
        type: 'PUT',
        data: { _token: $('meta[name="csrf-token"]').attr('content'), active: active, id: id },
        async: false,
        success: function(data) {
            var obj = JSON.parse(data);
            if (obj.code === 0) {
                round_error_noti(obj.msg)
            } else {
                round_success_noti(obj.msg)
            }
        },
        error: function(error) {
            round_error_noti()

        }
    });
}
