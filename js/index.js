let xhr = new XMLHttpRequest();
xhr.open("GET", "php/index.php",true);
xhr.onload = () =>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            if(data == "index"){
                document.location.href="user.php";
            }
            else{
                document.location.href="login.php";
            }
        }
    }
}
xhr.send();