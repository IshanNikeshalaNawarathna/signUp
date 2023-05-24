function celectImg() {

    var images = document.getElementById("img");
    var file = document.getElementById("image");

    file.onchange = function () {
        var newFile = this.files[0];
        var url = window.URL.createObjectURL(newFile);
        images.src = url;
    }

}

function save() {

    // alert("ok");

    var firstName = document.getElementById("firstName");
    var lastName = document.getElementById("lastName");
    var email = document.getElementById("email");
    var mobileNumber = document.getElementById("mobileNumber");
    var password = document.getElementById("password");
    var profileImg = document.getElementById("image");

    var formData = new FormData();
    formData.append("firstName", firstName.value);
    formData.append("lastName", lastName.value);
    formData.append("email", email.value);
    formData.append("mobileNumber", mobileNumber.value);
    formData.append("password", password.value);


    if (profileImg.files.length == 0) {
        var conform = confirm("Are you sure you don't want to update profile image? ");
        if (conform) {

        }
    } else {
        formData.append("image", profileImg.files[0]);
    }

    var respones = new XMLHttpRequest();
    respones.onreadystatechange = function () {
        if (respones.readyState == 4 && respones.status == 200) {
          if(respones.responseText == "error"){
            document.getElementById("msg").className='d-block';
            document.getElementById("messageText").innerHTML="Please Select a valid Image";

          }else if(respones.responseText == "success"){
            document.getElementById("msg").className='d-block';
            document.getElementById("messageText").innerHTML="Success";
            document.getElementById("messageText").style.color='green';
          }else if(respones.responseText){
            document.getElementById("msg").className='d-block';
            document.getElementById("messageText").innerHTML=this.responseText;
          }
        }
    }

 
    respones.open("POST", "save.php", true);
    respones.send(formData);
}