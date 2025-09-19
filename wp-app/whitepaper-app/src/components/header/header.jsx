import "./header.css" ;
import React,{useState} from "react";
function Header(props){
    // props.name = "White Paper";
    const [logo,setLogo] = useState(process.env.PUBLIC_URL + "logo.png")

    return (
        <div className="header flex row p-1 gap-2 shadow-m">
            <div className="header__vendor hf flex a-c jc-c row gap-2">
                <div className="header-vendor__pic hf flex a-c jc-e"><img src={logo} alt="Vendor Logo" /></div>
                <div className="header-vendor__content flex a-c jc-s">{ props.name}</div>

            </div>
            <div className="header__nav hf flex row gap-8 jc-c">
                <div className="header-nav__item flex row gap-3 p-1" dist="home">
                    <div className="header-nav-item__icon flex a-c hf">{props.icons["home"]}</div>
                    <div className="header-nav-item__content flex a-c hf">Home</div>
                </div>
                <div className="header-nav__item flex row gap-3 p-1" dist="books" title="all of the books">
                    <div className="header-nav-item__icon flex a-c hf">{props.icons["books"]}</div>
                    <div className="header-nav-item__content flex a-c hf">Books</div>
                </div>
                <div className="header-nav__item flex row gap-3 p-1" dist="about" title="about the developer">
                    <a href="" className="flex row">
                         <div className="header-nav-item__icon flex a-c hf">{props.icons["manager"]}</div>
                        <div className="header-nav-item__content flex a-c hf">About us</div>
                    </a>
                </div>

            </div>
            <div className="header__action hf flex row p-2 a-c jc-c gap-6 shadow-m">
                <div className="header-action-item flex a-c jc-c p-9" dist="Login"><a href="#">Login</a></div>
                <div className="header-action-item flex a-c jc-c p-9" dist="Register"><a href="#">Sign up</a></div>
            </div>
        </div>
    )
 }

 export default Header;
