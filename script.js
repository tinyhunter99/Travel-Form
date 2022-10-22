function message(){
    let age = document.getElementById("age");
    let a = parseInt(age);
    // console.log(typeof a + " " + a);
    if(a < 18){
    alert("SORRY !! YOU ARE NOT ALLOWED. SEE YOU NEXT TIME :( ");
    }else{
        alert("Your details has been submitted successfully");
    }
    return true;
}