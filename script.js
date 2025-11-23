$(document).ready(function() {
    $("#regForm").submit(function() {
        let phone = $("input[name='phone']").val();
        if (!/^[0-9]{10}$/.test(phone)) {
            alert("Phone must be 10 digits!");
            return false;
        }
        return true;
    });
});
