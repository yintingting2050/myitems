window.onload=function () {
function toVaild(){
    var name = document.getElementsByClassName("username").value;
    var pass=document.getElementsByClassName("pass").value;
    var passed=document.getElementsByClassName("passed").value;
    var email=document.getElementsByClassName("email").value;

    if(name==""){
        alert("用户名不能为空");
        return false;
    }
    if(pass==""){
        alert("密码不能为空");
        return false;
    }
    if(name.match("/^[0-9a-zA-Z]/")){
        return true;
    } else{
        alert("校验失败，不进行提交");
        return false;
    }


    if(!pass.length>6) {
        alert("密码至少大于等于6位");
        return false;
    }
    if(!pass.match("/^[0-9a-zA-Z]/")){
        alert("密码只能由数字和字母组成");
        return false;
    } else{
        return true;
    }

    if(pass==passed){
        return true;
    } else{
        alert("两次密码不一致，不能进行提交");
        return false;
    }

    if(email.match("/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/")){
        return true;
    } else{
        alert("邮箱格式错误");
        return false;
    }
}}
