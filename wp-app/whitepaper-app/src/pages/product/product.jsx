import { use, useEffect, useState } from "react"
import "./product.css"
import { useParams } from "react-router-dom"

function Product(props)
{
    const address = "http://localhost/whitepaper";
    

    const {id} = useParams();
    const [information,setInformation] = useState({});
    const [pic,setPic] = useState("");

    let body = new URLSearchParams()
    body.append("id",id);
    useEffect(()=>{
        const data = fetch("http://localhost/WhitePaper/wp-json/whpapi/books/get",
            {method:"POST",
            body:body
            }).then(response=>response.json()).then(data => {
                setInformation(data);
                setPic(address + data["image_path"])
            });

        
        
    },[])

    return (
        <div className="product flex col p-2 ">
            <div className="product__info flex row">
                <div className="product-info__pic hf flex a-c jc-c">
                    <img src={pic} alt={information["title"]} />
                </div>
                <div className="product-info__general p-4 flex a-s col jc-s">
                    <div className="product-info-general__item flex a-c jc-c row gap-2">
                        <div className="product-info-general-item__icon">{props.icons["writer"]}</div>
                        <div className="product-info-general-item__content">{information["author"]}</div>
                    </div>
                    <div className="product-info-general__item flex a-c jc-c row gap-2">
                        <div className="product-info-general-item__icon"></div>
                        <div className="product-info-general-item__content">{information["title"]}</div>
                    </div>
                    <div className="product-info-general__item flex a-c jc-c row gap-2">
                        <div className="product-info-general-item__icon">{props.icons["dollar"]}</div>
                        <div className="product-info-general-item__content">{information["price"]}</div>
                    </div>
                    <div className="product-info-general__item flex a-c jc-c row gap-2">
                        <div className="product-info-general-item__icon">{props.icons["star"]}</div>
                        <div className="product-info-general-item__content">{information["stars"]}</div>
                    </div>
                    <div className="product-info-general__item flex a-c jc-c row gap-2">
                        <div className="product-info-general-item__icon">{props.icons["eye"]}</div>
                        <div className="product-info-general-item__content">{information["viewCount"]}</div>
                    </div>
                </div>
            </div>
            <div className="product__description p-2">{information["full_description"]}</div>
        </div>
    )
}

export default Product;