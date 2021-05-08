$('#memo-add-form').on('submit', function (event) {
    event.preventDefault();

    const formDataArray = $('#memo-add-form').serializeArray();

    const formData = {};
    for (const f of formDataArray) {
        formData[f.name] = f.value;
    }

    const [category_id, category_name] = formData.category_id.split('----');

    formData.category_id = category_id;

    $.ajax({
        url: "/memos",
        type: "POST",
        data: formData,
    }).done(function () {
        $('#add-memo-modal').modal('hide');
        $('#table-body').append(`
            <tr>
                <td scope="row">${formData.name}</td>
                <td>${category_name}</td>
                <td>${formData.description}</td>
                <td></td>
            </tr>
        `);

        $('body').append(`
            <div id="success-alert" class="alert alert-success alert-dismissible fade show" style="position: fixed; top: 100px; right: 0;" role="alert">
                <span>追加しました。</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        `);

        setTimeout(() => {
            $('#success-alert').remove();
        }, 3000);

        $('#memo-add-form').trigger("reset");
    });
});