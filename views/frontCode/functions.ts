function sentDataToServer(vars:string){
    var hr = new XMLHttpRequest();
    let url = "server.php";
    hr.open("POST", url,true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
        console.log(hr);
    
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
          //  document.getElementById("status").innerHTML = return_data;
        }
    }
    hr.onload = (res) =>{
        $('.message').remove();
         $('body').append(res['target']['response']);
        //document.location.reload();
        // alert(res['target']['response']);
    }
    hr.send(vars);
}
