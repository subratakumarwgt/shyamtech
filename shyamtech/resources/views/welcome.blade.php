<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shyamtech Assignment For PHP Profile</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" integrity="sha512-CJ6VRGlIRSV07FmulP+EcCkzFxoJKQuECGbXNjMMkqu7v3QYj37Cklva0Q0D/23zGwjdvoM4Oy+fIIKhcQPZ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <!-- <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style> -->
    <style>
        .error {
            color: red;
            font-size: 0.8rem;
            font-weight: 600;
        }
    </style>
</head>

<body class="p-0">
  <x-my-modal />
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-3">
                <x-my-form />
            </div>
            <div class="col-md-9 p-3 border">
                <x-my-list />
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/loadingoverlay.js')}}"></script>
<script src="{{asset('js/bootstrap-notify.min.js')}}"></script>
<script>
    //loading overlay helper functions to load and hide the overlays
    function loadoverlay(object) {
        object.LoadingOverlay('show', {
            image: "data:image/png;base64,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",
            imageAnimation: "800ms rotate_right",
            size: 120,
        });
    }

    function hideoverlay(object) {
        object.LoadingOverlay('hide');
    }
    //get existing data and show the list
    var dataTable = $('#userTable').DataTable({
        'processing': true,
        serverSide: true,
        rowReorder: true,  
        language: {
            processing: '<div class="loader-box"><div class="loader-2"></div></div>'
        },
        ajax: {
            'url': '/get',
            'data': function(data) {
                // Read values

            },

        },
        drawCallback: function(settings) {
            //loading the images after the data loading is complete.
            $("#userTable").find(".image").each(function(key, elem) {
                $(elem).prop("src", $(elem).data("src"))
            })

        },
        searching: false,
        columns: [{
                data: 'ID',
                orderable: true
            },
            {
                data: 'Name',
                orderable: true
            },
            {
                data: 'Image',
              
            },
            {
                data: 'Gender',
              
            },
            {
                data: 'Address',
              
            },
            {
                data: 'Action',
              
            },
        ],
    });


    async function getOneRow(id) { //the one common function to fetch data for edit and view operations

        let data = await $.get("/get/" + id, function(data) {
            return data
        })
        return data.data;
    }
    async function setEditForm(id) { // Get the row data from backened and populate the data in the existing form;
        $("#submitType").html("Edit")
        let user = await getOneRow(id)
        console.log(user)
        $("#name").val(user.name)
        $("#address").val(user.address)
        $("#id").val(user.id)
        $("#image").prop("required", false)
        $(`input[value=${user.gender}]`).prop("checked", true)
        $("#img_prv").prop("src", user.image)
    }
    async function deleteRow(id){
       await $.post("/delete/"+id,function(success){      
            $.notify({
                message: "Row deleted successfully"
            }, {
                type: 'success',
                z_index: 10000,
                timer: 2000,
            });
            dataTable.draw();
        })
        .fail(function(){
            $.notify({
                message: "Row Could not be deleted"
            }, {
                type: 'danger',
                z_index: 10000,
                timer: 2000,
            });
        })
    }
    async function viewRow(id){
        let user = await getOneRow(id)
        $("#userImage").prop("src",user.image)       
        $("#userName").html(user.name)
        $("#userGender").html(user.gender)
        $("#userAddress").html(user.address)
        $("#userModal").modal("show")
    }

    function setAddForm() { // Reset the form to add new data
        $("#submitType").html("Add")
        $("#id").val(0)
        $("#image").prop("required", true)
        $("#name , #address").val("")
    }
    var imgInp = document.getElementById("image");
    if (imgInp) {
        imgInp.onchange = evt => {
            loadoverlay($("#img_prv"));
            const [file] = imgInp.files
            if (file) {
                hideoverlay($("#img_prv"));
                img_prv.src = URL.createObjectURL(file)
            }
        }
    }
    $("#userTable").on("click", ".editButton", function(e) {
        id = $(this).data("id")
        setEditForm(id)
    })
    $("#userTable").on("click", ".deleteButton", function(e) {
        if(confirm("Are you sure you want to delete this record?")){
            id = $(this).data("id")
            deleteRow(id)
        }
       
    })
    $("#userTable").on("click", ".viewButton", function(e) {
        id = $(this).data("id")
        viewRow(id)
    })
    $(".submit").on("click", async function(e) {
        e.preventDefault();
        //adding UI form validation
        let formType = "Added"

        if ($(this).closest("form").valid()) {
            loadoverlay($(this))

            // make AJAX call to submit data to server.
            let postUrl = "/submit"
            let method = "POST"
            var form = new FormData();

            form.append("name", $("#name").val());
            var file = $("#image")[0].files[0];
            if (file)
                form.append("image", file);
            form.append("address", $("#address").val());
            form.append("gender", $('input[name=gender]:checked').val());
            form.append("_token", "{{csrf_token()}}")
            if (parseInt($("#id").val()) !== 0) {
                form.append("id", $("#id").val())

                postUrl = `${postUrl}/${$("#id").val()}`
                formType = "Updated"
            }
            var settings = {
                "url": postUrl,
                "method": method,
                "timeout": 0,
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form,
                statusCode: {
                    400: function() {
                        hideoverlay($(this))
                        //  = JSON.parse();
                        $.notify({
                            message: "Please check the form again"
                        }, {
                            type: 'danger',
                            z_index: 10000,
                            timer: 2000,
                        });
                        return 0;
                    },
                    500: function() {
                        hideoverlay($(this))
                        // response = JSON.parse(response);
                        $.notify({
                            message: "Something went wrong !Internal Error: "
                        }, {
                            type: 'danger',
                            z_index: 10000,
                            timer: 2000,
                        })
                        return 0;
                    }
                }
            };

            response = await $.ajax(settings).done(function(response) {
                return response;
            });
            var response2 = JSON.parse(response)

            console.log(response)
            $("#id").val(response2.data.id)
            $.notify({
                message: `User ${formType} successfully. ID: ` + response2.data.id
            }, {
                type: 'success',
                z_index: 10000,
                timer: 2000,
            })



            dataTable.row.add({
                "ID": response2.data.id,
                "Name": response2.data.name,
                "Image": `<img src="${response2.data.image}" data-src="${response2.data.image}" width="70px" class="img-thumbnail" /> `,
                "Gender": response2.data.gender,
                "Address": response2.data.address,
                "Action": `<a href="#" class="btn btn-sm btn-outline-primary m-1 editButton small btn-sm" data-id="${response2.data.id}">Edit</a><a href="#" class="btn btn-sm btn-outline-danger m-1 deleteButton btn-sm small" data-id="${response2.data.id}">Delete</a><a href="#" class="btn btn-sm btn-outline-success m-1 viewButton btn-sm small" data-id="${response2.data.id}" >View</a>`
            }).draw();
            // dataTable.draw()
            hideoverlay($(this));
        } else {
            $.notify({
                message: "Please check the form again "
            }, {
                type: 'danger',
                z_index: 10000,
                timer: 2000,
            });
        }
    })
</script>

</html>