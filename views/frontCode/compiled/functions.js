function sentDataToServer(vars) {
    var hr = new XMLHttpRequest();
    var url = "server.php";
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function () {
        console.log(hr);
        if (hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    };
    hr.onload = function (res) {
        // $('body').append(res['target']['response']);
        alert(res['target']['response']);
    };
    hr.send(vars);
}
