function sentDataToServer(data) {
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "server.php";
    var vars = "firstname=" + 1 + "&lastname=" + 2;
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function () {
        console.log(hr);
        if (hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    };
    hr.onload = function (res) {
        $('body').append(res['target']['response']);
    };
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
}
sentDataToServer('hello');
