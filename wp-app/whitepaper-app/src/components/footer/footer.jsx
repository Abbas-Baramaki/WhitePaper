import React , { useState } from "react";
import "./footer.css";

function Footer(props)
{
    const logo = process.env.PUBLIC_URL + "logo.png";
    return(

        <div className="footer wf flex p-2 gap-2 a-c jc-c">
            Bringing stories to your doorstep.
            {/* <div className="footer__description hf flex col gap-8">
                <div className="footer-description__pic flex row a-c jc-s p-4">
                    <img src={logo} alt="" className="flex a-c jc-c"/>
                    <h2 className="flex a-e jc-c">White Paper</h2>
                </div>
                <div className="footer-description__content"></div>
                <div className="footer-description__footer"></div>
            </div>
            <div className="footer__trust hf"></div> */}
        </div>

    )
}
export default Footer;