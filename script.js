$(document).ready(function () {
    $('#registrationForm').submit(function (e) {
        let isValid = true;
        $('input, select').each(function () {
            if ($(this).val() === '') {
                isValid = false;
                alert(`${$(this).attr('name')} is required.`);
                return false;
            }
        });
        if (!isValid) e.preventDefault();
    });
});
