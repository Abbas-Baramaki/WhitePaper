import { useEffect, useState } from "react";
import "./assets/css/login.css";
import walpaper from "./assets/images/sand-mountain.jpg";
import Cookie from "../../components/cookie/cookie.js";

function Login(props) {
    const cookie = new Cookie();
    const [username, setUsername] = useState("amir");
    const [password, setPassword] = useState("1234");


    if (cookie.get_cookie("token"))
    {
        window.location.pathname = "/"
    }
    const handle_submit = (async(e) => {

        let data = new URLSearchParams();
        e.preventDefault()
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;
        data.append("username",username);
        data.append("password",password);

        
        try{
            const response  = await fetch("http://localhost/WhitePaper/wp-json/jwt-auth/v1/token",{method:"post",body:data}).then(
                response => response.json()
            );
            cookie.set_cookie("token",response["token"]); 
            cookie.set_cookie("user_display_name",response["user_display_name:"]); 
            cookie.set_cookie("user_nicename",response["user_nicename"]); 
            window.location.pathname = "/"
        }
        catch(error){
            console.log("Faild",error);
        }
        finally{

        }

    
    })

    return (

        <div className="login flex row a-c jc-c shadow-m gap-2">
            <div className="login__form">
                <div className="login-form__header flex a-s jc-c">
                    Welcome Back
                </div>
                <form action="" method="" onSubmit={handle_submit} className="login-form__form flex col gap-8 a-c">
                    <input type="text" placeholder="Username" id="username" name="username" />
                    <input type="password" placeholder="Password" id="password" name="password" />
                    <input type="submit" value="Login" id="submit-information" className="flex a-c jc-c" />
                </form>
            </div>
            <div className="login__wal">
                <img src={walpaper} alt="Walpaper" />
            </div>
        </div>
    )
}


export default Login;